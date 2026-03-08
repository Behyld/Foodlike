<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слайдер блюд</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-[#fbf8f8]">
        <div class="mt-[300px] ml-[463px]">
            <h3 class="text-[46px] font-bold w-[200px] leading-[50px]">Популярные блюда</h3>
            <p class="w-[600px] text-[20px] mt-[16px] text-[#2f2f2f]">Изобилие готовых и вкусных блюд,  <br>предлагаемых нашей компанией, позволяет<br> удовлетворить любые потребности в еде.</p>
            <button class="mt-[33px] bg-[#EE7700] w-[208px] h-[48px] text-white rounded-tr-[24px] rounded-br-[24px] rounded-bl-[24px]">Подробнее</button>

            <!-- Белая карточка -->
            <div id="dishCard" class="bg-white ml-[410px] mt-[-50px] pt-[27px] w-[307px] h-[200px] pl-[38px] rounded-tr-[33px] rounded-br-[33px] rounded-bl-[33px] relative z-20">
                <div class="flex flex-col h-full">
                    <p id="dishTitle" class="font-medium">Курица в соусе терияки</p>
                    <p id="dishDesc" class="w-[200px]">куриная грудка, сыр, шампиньоны, майонез</p>
                    <p id="dishPrice" class="pt-[14px] font-bold text-[#ee7700]">280₽</p>
                    <div class="flex items-center mb-2">
                        <p class="mt-[-34px] w-28">Подробнее   ></p>
                        <div class="mt-10 ml-7 flex-shrink-0">
                           <img src="{{ asset('/images/leftButton.png') }}" alt="левая стрелка" id="sliderLeftChangeFullMenuButton" class="slider-arrow inline-block dish-left-arrow">
<img src="{{ asset('/images/rightButton.png') }}" alt="правая стрелка" id="sliderRightChangeFullMenuButton" class="slider-arrow inline-block ml-2 dish-right-arrow">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Картинка блюда -->
            <img id="dishImage" src="{{ asset('/images/teriyakiChicken.png') }}" alt="блюдо" class="absolute ml-[550px] mt-[-600px] z-10">
            <!-- Картинка слайдера -->
            <img id="sliderImage" src="{{ asset('/images/slider1.png') }}" alt="слайдер" class="absolute ml-[500px] mt-[-640px] z-10">
        </div>
        <!-- Оранжевый декор -->
        <div class="absolute bg-[#EE7700] w-[637px] h-[843px] ml-[1268px] mt-[-662px] rounded-bl-[88px] z-0"></div>
    </div>

    @vite('resources/js/menu.js')
</body>
</html>