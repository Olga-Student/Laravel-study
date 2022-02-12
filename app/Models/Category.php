<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   private $category = [
        1 => [
            'topic' => 'history',
            'description' => '111111'
        ],
        2 => [
            'topic' => 'politics',
            'description' => 'hhhhhhhhhhhhhhhhhhhhhh'
        ],
        3 => [
            'topic' => 'sport',
            'description' => '2222222'
        ],
        4 => [
            'topic' => 'fashion',
            'description' => 'ggggggggggggg'
        ]
    ];
    public function getCategory()
    {
        return $this->category;
    }

    public function getById($id)
    {
        return $this->category[$id];
    }

    public function getByTopic ($categoryTopic)
    {
        $return = [];
        foreach ($this->category as $item) {
            if ($item['topic'] == $categoryTopic) {
                $return[] = $item;
            }
        }
        return $return;
    }

    /*public function news() {
        return $this->hasMany(NEWS::class);
    }*/
}



