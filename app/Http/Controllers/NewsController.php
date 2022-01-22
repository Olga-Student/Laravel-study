<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news = [
        1 => [
            'title' => 'news 1'
        ],
        2 => [
            'title' => 'news 2'
        ]
    ];
    public function index(){

        $respons ='';
        foreach ($this -> news as $id => $item) {
            $url = route('news::card', ['id'=>$id]);
            $respons .= "<div>
              <a href='{$url}'>{$item['title']}</a>
                     </div>";
        }
        return $respons;
    }

    public function card($id){
       $news = $this->news[$id];
       return $news['title'];
    }
};

