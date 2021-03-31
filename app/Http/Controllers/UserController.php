<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userdashboard()
    {
        return view('admin.user.dashboard');
    }
}
