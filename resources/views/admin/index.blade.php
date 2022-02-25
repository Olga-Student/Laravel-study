@extends('layouts.main')

@section('title')
    Администрирование новостей
@endsection

@section('content')
    <main>
        <h2>Администрирование новостей</h2>
        <a class="btn btn-primary" href="{{route('admin::news::new')}}">
            Создать новую новость
        </a>
        <a class="btn btn-primary" href="{{route('admin::category::new')}}">
            Создать новую категорию
        </a>
        <div>
            @forelse ($news as $item)

                <div href="#" class="">
                    <h2>{{$item->title}}</h2>
                    <h2>{{$item->category_id}}</h2>
                    <p>
                        <a class="btn btn-primary" href="{{route('admin::news::show_news', ['news' => $item->id])}}">
                            Перейти на изменение новости
                        </a>
                        <a class="btn btn-primary" href="{{route('admin::news::delete', ['id' => $item->id])}}">
                            Удалить новость
                        </a>
                    </p>

                </div>

            @empty
                Новостей нет!
            @endforelse
        </div>
    </main>
@endsection
