<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class NewsController extends Controller
{
    public function index()
    {
        //dd('TEST');
    }

    public function create()
    {
        //dd('TEST');
        return view('create');

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
