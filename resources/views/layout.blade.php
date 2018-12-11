<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>
</head>
@stack('style')
<body>
<div>
    The current UNIX timestamp is {{ time() }}.
</div>
<div class="container" style="max-width: 95%">
    <div class="row bg-info">
        <div class="col-4 bg-secondary">
            @section('sidebar')
                Это главная боковая панель.
            @show
            {{--@endsection--}}
        </div>
        <div class="col-8">
            @yield('content')
        </div>
    </div>
</div>
{{--@yield('content')--}}

{{--@yield('sidebar')--}}
<div class="container">
    @yield('id')
</div>
{{$id}}
</body>
</html>