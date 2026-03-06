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
            <div style="background-image: url('/images/back.png');
                    height: 917px">
             @include('layouts.navigation')
             @include('layouts.block')
            </div>
        </main>
            
        <footer>
            Подвал
        </footer>
</body>
</html>