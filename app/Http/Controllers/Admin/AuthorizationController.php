<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorizationController extends Controller{
    public function authorization()
    {
        return view('authorization');

    }
}

