<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блок с каруселью</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>
<body class="bg-[#fbf8f8] text-black">
    <!-- Основной контент -->
    <div class="mainCont ml-[360px] w-[470px]">
        <img src="{{ asset('/images/geo.png') }}" alt="гео">
        <h2 class="text-[55px] font-semibold">Доставка обедов в офис</h2>
        <p class="text-base">Для каждой компании меню по доставке обедов подбирается индивидуально, исходя из ваших вкусов и предпочтений.</p>
        <button class="bg-[#ff8d28] text-white rounded-tr-[24px] rounded-br-[24px] rounded-bl-[24px] w-[213px] h-[46px] mt-[36px] hover:opacity-90 transition">Наше меню</button>
    </div>

    <!-- Контейнер карусели -->
    <div class="overflow-hidden w-[1185px] mt-[88px] pb-2">
        <div id="innerSlider" class="flex gap-4"></div>
    </div>

    <!-- Кнопки управления -->
    <div class="w-[1200px] flex justify-end gap-2 mt-4">
        <img src="{{ asset('/images/leftButton.png') }}" alt="левая стрелка" id="slideLeftCardBtn" class="slider-btn cursor-pointer">
        <img src="{{ asset('/images/rightButton.png') }}" alt="правая стрелка" id="slideRightCardBtn" class="slider-btn cursor-pointer">
    </div>

    @vite('resources/js/block.js')
</body>
</html>