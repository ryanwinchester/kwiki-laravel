<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @section('title')
        <title>{{ config('kwiki.title') }}</title>
    @show

    @yield('meta')

    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/yeti/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/kwiki/kwiki.css" rel="stylesheet">

    @yield('styles')

</head>
<body>

<section class="header container">
    <h1 class="kwiki__title">{{ config('kwiki.title') }}</h1>
</section>

@yield('content')

<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

@yield('scripts')

</body>
</html>
