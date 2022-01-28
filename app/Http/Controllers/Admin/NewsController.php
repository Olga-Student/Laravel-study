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

    public function create(Request $request)
    {
        //dd($request ->input('title'));
        //dd($request->all());
        //echo 'TEST';

            $title = $request->input('title');
            $category = $request->input('category');
            $description = $request->input('description');
            //сохраняем данные в базу
            return redirect()->route('admin::news::new');

        //return view('create'); отделяем логику отображения от создания

    }


    public function new(){
        return view('create');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
