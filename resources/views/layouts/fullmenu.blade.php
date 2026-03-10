<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Документ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .menu-item.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ee7700;
        }
    </style>
</head>
<body>
    <div class="mt-[300px] ml-[350px] mb-[200px]">
        <!-- Заголовок и навигация -->
        <div class="flex items-center">
            <h4 class="font-bold text-[30px]">Меню</h4>
            <div class="flex ml-[424px] gap-8 items-center border-b border-[#989898] w-[716px] justify-between">
                <p class="menu-item relative cursor-pointer py-1 mb-1 transition-all">Первые блюда</p>
                <p class="menu-item relative cursor-pointer py-1 mb-1 transition-all">Вторые блюда</p>
                <p class="menu-item relative cursor-pointer py-1 mb-1 transition-all">Салаты</p>
                <p class="menu-item relative cursor-pointer py-1 mb-1 transition-all">Выпечка</p>
            </div>
        </div>

        <!-- Карточки -->
        <div class="flex mt-[66px] gap-[50px]">
            <!-- Карточка 1 -->
            <div class="w-[277px] text-center relative card">
                <div class="absolute top-0 left-0 w-[277px] h-[277px] z-10">
                    <img src="{{ asset('/images/teriyakiChicken.png') }}" alt="блюдо" class="w-full h-full object-cover">
                    <img src="{{ asset('/images/rightWhiteButton.png') }}" alt="arrow" 
                         class="absolute left-[40px] top-[230px] -translate-y-1/2 w-[45px] h-[45px] z-20 opacity-0 transition-opacity duration-200 card-arrow">
                </div>
                <div class="w-full transition-colors duration-200 flex flex-col items-center justify-center rounded-tr-[49px] rounded-br-[49px] rounded-bl-[49px] mt-[170px] min-h-[220px] card-text-block">
                    <p class="font-medium mt-[80px]">Курица в соусе <br> терияки</p>
                    <p class="w-[150px] text-center mx-auto mt-2 mb-[20px]">куриная грудка, сыр, шампиньоны, майонез</p>
                </div>
            </div>

            <!-- Карточка 2 -->
            <div class="w-[277px] text-center relative card">
                <div class="absolute top-0 left-0 w-[277px] h-[277px] z-10">
                    <img src="{{ asset('/images/pumpkinCreamSoup.png') }}" alt="блюдо" class="w-full h-full object-cover">
                    <img src="{{ asset('/images/rightWhiteButton.png') }}" alt="arrow" 
                         class="absolute left-[40px] top-[230px] -translate-y-1/2 w-[45px] h-[45px] z-20 opacity-0 transition-opacity duration-200 card-arrow">
                </div>
                <div class="w-full transition-colors duration-200 flex flex-col items-center justify-center rounded-tr-[49px] rounded-br-[49px] rounded-bl-[49px] mt-[170px] min-h-[220px] card-text-block">
                    <p class="font-medium mt-[80px]">Тыквенный <br> крем-суп</p>
                    <p class="w-[150px] text-center mx-auto mt-2 mb-[20px]">куриная грудка, сыр, шампиньоны, майонез</p>
                </div>
            </div>

            <!-- Карточка 3 -->
            <div class="w-[277px] text-center relative card">
                <div class="absolute top-0 left-0 w-[277px] h-[277px] z-10">
                    <img src="{{ asset('/images/salad.png') }}" alt="блюдо" class="w-full h-full object-cover">
                    <img src="{{ asset('/images/rightWhiteButton.png') }}" alt="arrow" 
                         class="absolute left-[40px] top-[230px] -translate-y-1/2 w-[45px] h-[45px] z-20 opacity-0 transition-opacity duration-200 card-arrow">
                </div>
                <div class="w-full transition-colors duration-200 flex flex-col items-center justify-center rounded-tr-[49px] rounded-br-[49px] rounded-bl-[49px] mt-[170px] min-h-[220px] card-text-block">
                    <p class="font-medium mt-[80px]">Салат <br> летний</p>
                    <p class="w-[150px] text-center mx-auto mt-2 mb-[20px]">куриная грудка, сыр, шампиньоны, майонез</p>
                </div>
            </div>

            <!-- Карточка 4 -->
            <div class="w-[277px] text-center relative card">
                <div class="absolute top-0 left-0 w-[277px] h-[277px] z-10">
                    <img src="{{ asset('/images/blyudo.png') }}" alt="блюдо" class="w-full h-full object-cover">
                    <img src="{{ asset('/images/rightWhiteButton.png') }}" alt="arrow" 
                         class="absolute left-[40px] top-[230px] -translate-y-1/2 w-[45px] h-[45px] z-20 opacity-0 transition-opacity duration-200 card-arrow">
                </div>
                <div class="w-full transition-colors duration-200 flex flex-col items-center justify-center rounded-tr-[49px] rounded-br-[49px] rounded-bl-[49px] mt-[170px] min-h-[220px] card-text-block">
                    <p class="font-medium mt-[80px]">Салат <br> коул-слоу</p>
                    <p class="w-[150px] text-center mx-auto mt-2 mb-[20px]">куриная грудка, сыр, шампиньоны, майонез</p>
                </div>
            </div>
        </div>

     <img src="{{ asset('/images/leftButton.png') }}" alt="левая стрелка" 
     id="sliderLeftChangeMenuButton"
     class="slider-arrow inline-block dish-left-arrow mt-[69px] cursor-pointer relative z-50">
<img src="{{ asset('/images/rightButton.png') }}" alt="правая стрелка" 
     id="sliderRightChangeMenuButton"
     class="slider-arrow inline-block ml-2 dish-right-arrow mt-[69px] cursor-pointer relative z-50">
        <p class="absolute ml-[1200px] mt-[-30px] font-medium">Наше меню    ></p>
    </div>

   @vite('resources/js/fullmenu.js')
</body>
</html>