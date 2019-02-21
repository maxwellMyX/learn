<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>@yield('title', 'Weibo App') -- Laravel入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include("layouts._header")
    <div class="container">
        @yield('content')
        @include("layouts._footer")
    </div>
</body>
</html>