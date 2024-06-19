<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function logout()
    {
        session()->forget('user');
        return redirect('/');
    }

}
