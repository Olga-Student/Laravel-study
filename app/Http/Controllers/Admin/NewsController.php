<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.index', ['news' => $news]);
       //dd('hfejhh');
    }
    public function create(Request $request)
    {
        $news = new News();
        $news->fill([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'source' => $request->input('source'),
            'category_id' => $request->input('category_id')
        ]);
        $news->save();
        return redirect()->route('admin::news::new');

    }
    /*public function create(Request $request)
    {
            $title = $request->input('title');
            $content = $request->input('content');
            $source = $request->input('source');
            $category_id = $request->input('category_id');
            //сохраняем данные в базу

        return redirect()->route('admin::news::new');

      }*/
    public function new(){

        return view('news.create', ['model'=>'']);
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->input('title');
        $news->categories = $request->input('category_id');
        $news->save();

        ///return view('news.update', ['model'=>'']);
        return redirect()->route('admin::news');

        //dd($id);
    }

    public function show_news(News $news){

        return view('news.update', ['item' => $news]);
    }
        //$model->fill($request->all());
       /* $news->title = $request->input('title');
        $news->content =$request->input('content');
        $news->source = $request->input('source');
        $news->save();
        return redirect()->route('admin::news');*/
    /*public function update()
    {//обновление информации
        $news = News::find(9);
        $news->title = 'XXXXXXXXXxxx';
        $news->save();

    }*/

    public function delete(News $id)
    {

        News::destroy([$id]);
        return redirect()->route("admin::news::index");
    }
}
