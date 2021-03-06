<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- {{ Html::style(url('css/pdf.css')) }} --}}
    <link rel="stylesheet" href="{{ asset('css/pdf.css') }}">

    @yield('style')
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    @yield('script')
</body>

</html>
