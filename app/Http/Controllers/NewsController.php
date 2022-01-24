<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index(){

       $news = (new News())->getNews();
        return view('news.index', ['news'=>$news]);
    }


    public function card($id){
       $news = $this->news[$id];
       return $news['title'];
        //return view('news.card', ['item' => $news);
    }
};

