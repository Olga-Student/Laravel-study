
@extends('layouts.main')

@section('title')
    Новость дня
@endsection

@section('content')
    <div>
        <div>
            Заголовок новости:
            {{$item->title}}
        </div>
        <div>
            {{$item->content}}
        </div>
    </div>
@endsection

