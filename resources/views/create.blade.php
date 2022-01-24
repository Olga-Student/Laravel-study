@extends('layouts.main')

@section('title')
    Добавление новостей
@endsection

@section('content')
<main>
    <h2>Добавленbе новостей</h2>
    <div class="row col-md-12">
        <form action="" method="post">

            <div class="form-group">
                <label>Название новости</label>
                <input type="text" name="title"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Категория новости</label>
                <input type="text" name="price" value=""
                       class="form-control">
            </div>

            <div class="form-group">
                <label>Описание</label>
                <textarea name="description" class="form-control"  cols="84"
                          rows="4"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success" >Создать</button>
            </div>
        </form>
    </div>
</main>
@endsection
