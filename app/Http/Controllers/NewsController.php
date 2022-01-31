<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(News $news){

       $newsArray = $news->getNews();
       //dd($newsArray);

      return view('news.index', ['news'=>$newsArray]);
    }

    public function card(News $news, $id)
    {
       //dd($news);
        return view('news.card', ['item' => $news->getById($id)]);
    }

};

