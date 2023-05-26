<?php

namespace App\Http\Controllers\Front;

use App\ContactMessage;
use App\Http\Controllers\Controller;
use App\Mail\ContactMessageMail;
use App\Partner;
use App\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Mockery\Exception;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class GeneralController extends Controller
{
    public function index(): View
    {
        $latestBlog = Post::latest('created_at')->take(3)->get();
        return \view('Front.Home.index', compact('latestBlog'));
    }

    public function aboutUs(): View
    {
        return \view('Front.Home.aboutUs');
    }

    public function publications(): View
    {
        $publications = Publication::paginate(10);
        return \view('Front.Home.publications', compact('publications'));
    }

    public function blog(): View
    {
        $blogPosts = Post::paginate(5);
        $recentPosts = Post::latest('created_at')->take(5)->get();
        return \view('Front.Home.blog', compact('blogPosts', 'recentPosts'));
    }

    public function partners(): View
    {
        $partners = Partner::paginate(10);
        return \view('Front.Home.partners', compact('partners'));
    }

    public function contact(): View
    {
        return \view('Front.Home.contact');
    }

    public function contactSend(Request $request)
    {
        try {
            $validation = $request->validate([
                'name' => 'required|max:100',
                'surname' => 'required|max:100',
                'email' => 'required|email|max:100',
                'phone' => 'required|max:20',
                'body' => 'required|max:2000',
                'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
            ],[
                'name.required' => 'Name Required !',
                'name.max' => 'Max 100 symbol !',
                'surname.required' => 'Surname Required !',
                'surname.max' => 'Max 100 symbol !',
                'email.required' => 'Email Required !',
                'email.email' => 'Email type incorrect !',
                'email.max' => 'max 100 symbol !',
                'phone.required' => 'Phone Required !',
                'phone.max' => 'Max 20 symbol !',
                'body.required' => 'Body Message Required !',
                'body.max' => 'Max 2000 symbol !'
            ]);

            $save = new ContactMessage();
            $save->name = $request->name;
            $save->surname = $request->surname;
            $save->email = $request->email;
            $save->phone = $request->phone;
            $save->body = $request->body;
            $save->save();

            $data = array(
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'phone' => $request->phone,
                'body' => $request->body,
            );

            $emails = array(
                'office@mgc.az',
                'admin@burncode.org'
            );

            foreach ($emails as $key => $value)
            {
                Mail::to($value)->send(new ContactMessageMail($data));
            }

            return back()->with('success', 'Your message has been sent. You will be contacted as soon as possible.');
        } catch (Exception $exception)
        {
            return $exception;
        }
    }
}
