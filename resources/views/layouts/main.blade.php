<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'images/bg.png'])
</head>
<body>
    <main>
        <div class="backBlockImgFirst" style="background-image: url('/images/back.png'); height: 1000px">
            @include('layouts.navigation')
            @include('layouts.block')
            @include('layouts.menu')
            @include('layouts.fullmenu')
            @include('layouts.about')
            @include('layouts.order')
            @include('layouts.howorder')
            @include('layouts.review')
            @include('layouts.articles')
            @include('layouts.footer')
        </div>
    </main>
</body>
</html>