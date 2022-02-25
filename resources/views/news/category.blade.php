@extends('layouts.main')

@section('title')
    Категории
@endsection

@section('content')
    <div class="title m-b-md">
        Какие новости Вас интересуют?  Выберете категорию
    </div>
    <div>
        @forelse( $category as  $item)

            <div>
                <a href='{{route('news::category',  ['id' => $item->id])}}'> <h2>{{$item->topic}}</h2></a>
            </div>
        @empty
            Not categories;
        @endforelse
    </div>
@endsection

