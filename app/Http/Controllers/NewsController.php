<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsOld;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   /* public function index(NewsOld $news){

       $newsArray = $news->getNews();
       //dd($newsArray);

      return view('news.index', ['news'=>$newsArray]);
    }

    public function card(NewsOld $news, $id)
    {
       //dd($news);
        return view('news.card', ['item' => $news->getById($id)]);
    }*/
    public function index(){

        $newsArray = News::all();
        //dd($newsArray);
        /*foreach ($newsArray as $item){dump($item->title);};*/
        return view('news.index', ['news'=>$newsArray]);

      /* //внесение новой информации
        $news = new News();
        //прямое внесение данных = данных модели
        $news->title = 'newnew news';
        $news->content = 'mgdfkghhkt[jpryjkptupkuktukyuj';
        $news->category_id = 2;
        //через метод филл внесение данных = данных модели
        $news->fill([
            'title' => 'TESTnews',
            'content' => 'bbbbbbbbbghgkgjl',
            'category_id' => 4
        ]);
        //обновление информации
        $news = News::find(9);
        $news->title = 'XXXXXXXXXxxx';
        $news->save();
        //удаление информации
        $news = News::find(15);
        $news->delete();
        //удаление группой
        $news = News::destroy([10,11,12]);
        //запрос в базу
        $news = News::query()->where('id');
        $news = NEWS::with('category')->get();
        //dd($this->category->news);

        echo "complete";*/

    }

    public function category(int $categoryId){

        return view('news', ['news'=> News::getByCategoryId($categoryId)]);

    }


    /*public function card(NewsOld $news, $id)
    {
        //dd($news);
        return view('news.card', ['item' => $news->getById($id)]);
    }*/

   /* public function card($id)
    {
        $item = News::find($id);
        //$item = News::findOrNew(); //если не найдет модель создаст новую;
        //$item = News::findCreate(); //если не найдет модель создаст новую и запишет в базе
        //$item = News::findOrFail(); //если не найдет создает исключения
        //dd($item);
        return view('news.card', ['item' => $item]);
    }*/
    // без использования find  передаем модель
    public function card(News $news)
    {
        return view('news.card', ['item' => $news]);
    }

};

