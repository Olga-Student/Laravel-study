<?php

namespace App\Models;

class News
{    private $news = [
        1 => [
            'title' => 'news 1',
            'description' => 'lllllllllllllllll',
            'category_id' => 3
        ],
        2 => [
            'title' => 'news 2',
            'description' => 'hhhhhhhhhhhhhhhhhhhhhh',
            'category_id' => 4
        ]
    ];
    public function getNews()
    {
        return $this->news;
    }
    public function getByCategoryId(int $categoryId)
    {
        $return = [];
        foreach ($this->news as $item) {
            if($item['category_id'] == $categoryId) {
                //$item['category_id'] = 100;
                $return[] = $item;
            }
        }
        return $return;
    }
    public function getById($id)
    {        return $this->news[$id];
    }
}

