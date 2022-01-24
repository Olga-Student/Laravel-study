<?php

namespace App\Models;

class News
{
    private $news = [
        1 => [
            'title' => 'news 1'
        ],
        2 => [
            'title' => 'news 2'
        ]
    ];
    public function getNews(){

       $return = [];
        foreach ($this -> news as $id => $item) {

            $return [] = "{$item['title']}";
        }
        return $return;
    }

}
