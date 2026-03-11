<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блок с каруселью</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <style>
        /* Адаптив под 425px */
        @media (max-width: 425px) {
            /* Основной контент */
            .mainCont {
                margin-left: 20px !important;
                width: calc(100% - 40px) !important;
            }
            
            .mainCont h2 {
                font-size: 36px !important;
                line-height: 1.1 !important;
                margin-bottom: 14px;
            }
            
            .mainCont p {
                font-size: 26px;
                width: 364px;
            }

            .mainCont button{
                margin-bottom: 58px;
            }
            /* Увеличиваем отступ сверху у картинки с geo */
            .mainCont img:first-child {
                margin-top: 30px !important;
                margin-bottom: 26px !important;
                width: 108px !important;
            }
            
            /* Контейнер карусели */
            .overflow-hidden {
                width: 100vw !important;
                margin-left: 0 !important;
                margin-top: 40px !important;
                padding-left: 20px !important;
                overflow-x: auto !important;
            }
            
            #innerSlider {
                gap: 12px !important;
                display: flex !important;
                flex-wrap: nowrap !important;
                width: max-content !important;
            }
            
            /* Карточки */
            #innerSlider > * {
                min-width: 238px !important;
                width: 238px !important;
                min-height: 163px !important;
                height: 163px !important;
                flex: 0 0 auto !important;
                border-radius: 10px;
            }
            
            /* Скрываем кнопки */
            div:has(> .slider-btn) {
                display: none !important;
            }
            
            body {
                overflow-x: hidden !important;
            }
        }
    </style>
</head>
<body class="bg-[#fbf8f8] text-black overflow-x-hidden">
    <!-- Основной контент -->
    <div class="mainCont ml-[360px] w-[470px]">
        <img src="{{ asset('/images/geo.png') }}" alt="гео">
        <h2 class="text-[55px] font-bold">Доставка обедов в офис</h2>
        <p class="text-base">Для каждой компании меню по доставке обедов подбирается индивидуально, исходя из ваших вкусов и предпочтений.</p>
        <button class="bg-[#ff8d28] text-white rounded-tr-[24px] rounded-br-[24px] rounded-bl-[24px] w-[213px] h-[46px] mt-[36px] hover:opacity-90 transition duration-300 hover:bg-[#e86100]">
            Наше меню
        </button>
    </div>

    <!-- Контейнер карусели -->
    <div class="overflow-hidden w-[1185px] mt-[88px] pb-2">
        <div id="innerSlider" class="flex gap-4"></div>
    </div>

    <!-- Кнопки управления -->
    <div class="w-[1200px] flex justify-end gap-2 mt-4">
        <img src="{{ asset('/images/leftButton.png') }}" alt="левая стрелка" 
             id="slideLeftCardBtn" 
             class="slider-btn cursor-pointer transition-all duration-300 hover:opacity-80 hover:scale-105">
        <img src="{{ asset('/images/rightButton.png') }}" alt="правая стрелка" 
             id="slideRightCardBtn" 
             class="slider-btn cursor-pointer transition-all duration-300 hover:opacity-80 hover:scale-105">
    </div>

    @vite('resources/js/block.js')
</body>
</html>