<?php

namespace App\Http\Controllers\Auth\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return \view('Front.CustomerAuth.login');
    }

    public function register(): View
    {
        return \view('Front.CustomerAuth.register');
    }
}
