<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Добавление новостей</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<main>
    <h2>Добавлене новостей</h2>
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
<footer>2022</footer>
</body>
</html>
