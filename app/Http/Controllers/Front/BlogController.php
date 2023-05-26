<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function singleBlog($locale, $slug): View
    {
        $singleBlog = Post::where('slug', $slug)->first();
        $recentPosts = Post::latest('created_at')->take(5)->get();

        if ($singleBlog && $recentPosts)
        {
            return \view('Front.Blog.singleBlog', compact('singleBlog', 'recentPosts'));
        } else {
            abort(404);
        }
    }
}
