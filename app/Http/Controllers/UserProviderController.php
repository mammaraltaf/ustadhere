<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProviderController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
}
