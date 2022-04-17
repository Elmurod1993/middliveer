<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<a href="{{url('en')}}">En</a>
<a href="{{url('uz')}}">Uz</a>
<ul>
    <li><a href="{{url('/')}}">{{ __('words.home')}}</a></li>
    <li><a href="{{url('/about')}}">{{ __('words.about') }}</a></li>
    <li><a href="{{url('/pages')}}">{{ __('words.pages') }}</a></li>
    <li><a href="{{url('/new')}}">{{ __('words.news')}}</a></li>
    <li><a href="{{url('/contact')}}">{{ __('words.contact') }}</a></li>

    <li><a href="{{url('/product')}}">{{ __('words.product') }}</a></li>
    <li><a href="{{url('/create')}}">{{ __('words.add_product') }}</a></li>
</ul>
@yield('content')
</body>
</html>
