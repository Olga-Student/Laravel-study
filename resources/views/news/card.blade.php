
@extends('layouts.main')

@section('title')
    Новость дня
@endsection

@section('content')
    <div>
        <div>
            Заголовок новости:
            {{$item['title']}}
        </div>
        <div>
            {{$item['description']}}
        </div>
    </div>
@endsection

