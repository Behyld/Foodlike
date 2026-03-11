<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слайдер блюд</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <style>
        /* Дополнительные эффекты если нужно */
        .dish-card-hover:hover {
            box-shadow: 0 20px 40px rgba(238, 119, 0, 0.2);
        }
        .arrow-btn:hover {
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.2));
        }
    </style>
</head>
<body class="bg-[#fbf8f8] text-black">
    <div class="bg-[#fbf8f8]">
        <!-- Блок популярных блюд -->
        <div class="mt-[300px] ml-[463px]">
            <h3 class="text-[46px] font-bold w-[200px] leading-[50px]">Популярные блюда</h3>
            <p class="w-[600px] text-[20px] mt-[16px] text-[#2f2f2f]">Изобилие готовых и вкусных блюд,  <br>предлагаемых нашей компанией, позволяет<br> удовлетворить любые потребности в еде.</p>
            <button class="mt-[33px] bg-[#EE7700] w-[208px] h-[48px] text-white rounded-tr-[24px] rounded-br-[24px] rounded-bl-[24px] transition-all duration-300 hover:bg-[#e86100]">
                Подробнее
            </button>

            <!-- Карточка блюда -->
            <div id="dishCard" class="bg-white ml-[410px] mt-[-50px] pt-[27px] w-[307px] h-[200px] pl-[38px] rounded-tr-[33px] rounded-br-[33px] rounded-bl-[33px] relative z-20 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 dish-card-hover">
                <div class="flex flex-col h-full">
                    <p id="dishTitle" class="font-medium">Курица в соусе терияки</p>
                    <p id="dishDesc" class="w-[200px]">куриная грудка, сыр, шампиньоны, майонез</p>
                    <p id="dishPrice" class="pt-[14px] font-bold text-[#ee7700]">280₽</p>
                    <div class="flex items-center mb-2">
                        <p class="mt-[-34px] w-28 transition-all duration-300 hover:text-[#EE7700] hover:translate-x-2 cursor-pointer font-medium">Подробнее   →</p>
                        <div class="mt-10 ml-7 flex-shrink-0 flex items-center gap-2">
                           <img src="{{ asset('/images/leftButton.png') }}" alt="левая стрелка" 
                                id="sliderLeftChangeFullMenuButton" 
                                class="slider-arrow dish-left-arrow cursor-pointer transition-all duration-300 hover:opacity-90 hover:scale-110 hover:-translate-x-1 arrow-btn">
                           <img src="{{ asset('/images/rightButton.png') }}" alt="правая стрелка" 
                                id="sliderRightChangeFullMenuButton" 
                                class="slider-arrow dish-right-arrow cursor-pointer transition-all duration-300 hover:opacity-90 hover:scale-110 hover:translate-x-1 arrow-btn">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Изображения блюда и слайдера -->
            <img id="dishImage" src="{{ asset('/images/teriyakiChicken.png') }}" alt="блюдо" 
                 class="absolute ml-[550px] mt-[-600px] z-10 transition-all duration-300 hover:scale-110 hover:rotate-2 hover:drop-shadow-2xl">
            <img id="sliderImage" src="{{ asset('/images/slider1.png') }}" alt="слайдер" 
                 class="absolute ml-[500px] mt-[-640px] z-10">
        </div>
        <!-- Оранжевый декоративный блок -->
        <div class="absolute bg-[#EE7700] w-[637px] h-[843px] ml-[1268px] mt-[-662px] rounded-bl-[88px] z-0"></div>
    </div>

    @vite('resources/js/menu.js')
</body>
</html>