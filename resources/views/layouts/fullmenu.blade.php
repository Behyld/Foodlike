<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Документ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="mt-[300px] ml-[350px]">
        <!-- Заголовок и навигация -->
        <div class="flex items-center">
            <h4 class="font-bold text-[30px]">Меню</h4>
            <div class="flex ml-[424px] gap-8 items-center border-b-2 border-[#989898] pb-1 w-[716px] justify-between">
                <p>Первые блюда</p>
                <p>Вторые блюда</p>
                <p>Салаты</p>
                <p>Выпечка</p>
            </div>
        </div>

        <!-- Карточки -->
        <div class="flex mt-[66px] gap-[50px]">
            <!-- Карточка 1 -->
            <div class="w-[277px] text-center relative">
                <img src="{{ asset('/images/teriyakiChicken.png') }}" alt="блюдо" class="absolute top-0 left-0 w-full h-[277px] object-cover z-10">
                <!-- Нижний блок: при наведении меняется фон и цвет текста -->
                <div class="w-full hover:bg-[#ee7700] hover:text-white transition-colors duration-200" style="margin-top: 277px;">
                    <div class="py-4">
                        <p class="font-medium">Курица в соусе терияки</p>
                        <p class="w-[150px] text-center mx-auto">куриная грудка, сыр, шампиньоны, майонез</p>
                    </div>
                </div>
            </div>
            <!-- Карточка 2 -->
            <div class="w-[277px] text-center relative">
                <img src="{{ asset('/images/pumpkinCreamSoup.png') }}" alt="блюдо" class="absolute top-0 left-0 w-full h-[277px] object-cover z-10">
                <div class="w-full hover:bg-[#ee7700] hover:text-white transition-colors duration-200" style="margin-top: 277px;">
                    <div class="py-4">
                        <p class="font-medium">Тыквенный крем-суп</p>
                        <p class="w-[150px] text-center mx-auto">куриная грудка, сыр, шампиньоны, майонез</p>
                    </div>
                </div>
            </div>
            <!-- Карточка 3 -->
            <div class="w-[277px] text-center relative">
                <img src="{{ asset('/images/salad.png') }}" alt="блюдо" class="absolute top-0 left-0 w-full h-[277px] object-cover z-10">
                <div class="w-full hover:bg-[#ee7700] hover:text-white transition-colors duration-200" style="margin-top: 277px;">
                    <div class="py-4">
                        <p class="font-medium">Салат летний</p>
                        <p class="w-[150px] text-center mx-auto">куриная грудка, сыр, шампиньоны, майонез</p>
                    </div>
                </div>
            </div>
            <!-- Карточка 4 -->
            <div class="w-[277px] text-center relative">
                <img src="{{ asset('/images/blyudo.png') }}" alt="блюдо" class="absolute top-0 left-0 w-full h-[277px] object-cover z-10">
                <div class="w-full hover:bg-[#ee7700] hover:text-white transition-colors duration-200" style="margin-top: 277px;">
                    <div class="py-4">
                        <p class="font-medium">Салат коул-слоу</p>
                        <p class="w-[150px] text-center mx-auto">куриная грудка, сыр, шампиньоны, майонез</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>