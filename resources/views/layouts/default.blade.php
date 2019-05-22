<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Weibo App')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/weibo.css">
</head>
<body>
@include('layouts._header')
<div class="container" style="margin-top: 20px;">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
</div>
</body>
</html>