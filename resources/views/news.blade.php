@extends('layouts.main')

@section('title')
    Категории
@endsection

@section('content')
    <div class="title m-b-md">
        Новости по выбранной категории
    </div>
    <div>
        @forelse($news as $item)
            <div>
                <a href='{{route('news::card', ['news' => $item->id])}}'> {!! $item->title !!} </a>
            </div>
        @empty
            Новостей нет!!!
        @endforelse
    </div>
@endsection

