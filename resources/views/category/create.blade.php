@extends('layouts.main')

@section('title')
    Добавление категории
@endsection

@section('content')
    <main>
        <h2>Добавление категорий новостей</h2>
        <div class="row col-md-12">
            <!---<form action="" method="post">-->
            {!! Form::open(['route' => 'admin::category::save']) !!}
            @csrf

            <div class="form-group">
                <label>Категория новости</label>
            {!! Form::text('category', '',['class' => 'form-control']) !!}
            <!--<input type="text" name="category" value="" class="form-control">-->
            </div>



            <div class="form-group">
            {!! Form::submit('send', ['class' => 'btn btn-success']) !!}
            <!-- <button type="submit" class="btn btn-success" >Создать</button>-->
            </div>
            {!! Form::close() !!}
        </div>
    </main>
@endsection

