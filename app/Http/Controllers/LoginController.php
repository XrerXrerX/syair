<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Syair;
use App\Models\Pasaran;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'login',
        ]);
    }
}
