@extends('layouts.main')

@section('title')
    Добавление новостей
@endsection

@section('content')
<main>
    <h2>Добавление новостей</h2>
    <div class="row col-md-12">
        <!---<form action="" method="post">-->
        {!! Form::open(['route' => 'admin::news::create']) !!}
@csrf
            <div class="form-group">
                <label>Название новости</label>
                {!! Form::text('title', '',['class' => 'form-control']) !!}
                <!---<input type="text" name="title" class="form-control"> --->
            </div>
            <div class="form-group">
                <label>Категория новости</label>
                {!! Form::text('category', '',['class' => 'form-control']) !!}
                <!--<input type="text" name="category" value="" class="form-control">-->
            </div>

            <div class="form-group">
                <label>Описание</label>
                {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
                <!--<textarea name="description" class="form-control"  cols="84" rows="4"></textarea>-->
            </div>

            <div class="form-group">
                {!! Form::submit('send', ['class' => 'btn btn-success']) !!}
               <!-- <button type="submit" class="btn btn-success" >Создать</button>-->
            </div>
        {!! Form::close() !!}
    </div>
</main>
@endsection
