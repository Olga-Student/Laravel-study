<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div class="content">
            <a href="/" class="logo">Logo</a>
            <nav>
                <ul>
                    <li><a href="">Главная</a></li>
                    <li><a href="">О нас</a></li>
                    <li><a href="">Контакты</a></li>
                </ul>
            </nav>
    </div>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        .logo {
            float: left;
        }
        nav {
            float: right;
        }
        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        nav li {
            display: inline-block;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <div class="content">
        <div class="title m-b-md">
            Information</div>
        </div>

    <div>У нас вы можете узнать самые свежие новости.</div>
    <footer>2022</footer>

</body>
</html>

