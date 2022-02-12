@extends('layouts.main')

@section('title')
    Категории
@endsection

@section('content')
    <div class="title m-b-md">
        Какие новости Вас интересуют?  Выберете категорию
    </div>
    <div>
        @forelse($category as $id => $item)
            <div>
                <a href='{{route('news::card', ['id'=>$id])}}'>{!! $item['topic']!!}</a>

                {!! $item['description']!!}
            </div>
        @empty
            Not categories;
        @endforelse
    </div>
@endsection

