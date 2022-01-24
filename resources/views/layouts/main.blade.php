<!doctype html>
<html lang="en">
<head>
 @include('blocks.header')
</head>
<title>@section('title')@show</title>

<body>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="header">
            @include('blocks.menu')
        </div>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @include('blocks.footer')

        </div>
    </div>
</div>
</body>
</html>
