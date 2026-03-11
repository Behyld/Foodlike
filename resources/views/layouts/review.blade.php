<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы - FoodILike</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .modal-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
        }
    </style>
</head>
<body class="font-sans m-0 p-0">
    <section class="bg-[#fbf8f8] py-12 md:py-16 relative">
        <div class="max-w-7xl mx-auto px-4 md:px-8 flex flex-col md:flex-row gap-8 md:gap-12">
            <!-- Заголовок слева -->
            <div class="md:w-1/2 text-left">
                <h2 class="text-3xl md:text-4xl mb-2 leading-tight font-bold">Нашим клиентам нравится<br>то, что мы делаем</h2>
                <p class="text-lg text-gray-600 mb-5">Для нас важно любое ваше мнение!</p>
                <a href="#" class="font-bold no-underline text-base hover:underline">Все отзывы    ></a>
            </div>
            
            <!-- Список отзывов справа -->
            <div class="md:w-1/2">
                <div class="flex flex-col gap-5">
                    <!-- Первый отзыв -->
                    <div class="h-[162px] flex bg-white p-6 shadow-md transition-transform duration-300 hover:scale-105 relative ml-12 md:ml-16 rounded-tr-[22px] rounded-br-[22px] rounded-bl-[22px]">
                         <img src="{{ asset('/images/Ava1.png') }}" alt="Аватарка" class="w-[91px] h-[91px] md:w-20 md:h-20 rounded-full absolute -left-8 md:-left-10 top-5">
                        <div class="flex-1 pl-5 md:pl-8">
                            <p class="text-gray-800 text-base leading-relaxed">Качественные, всегда свежие продукты, оперативная доставка, вежливый, исполнительный курьер, работает просто фантастически</p>
                            <div class="flex ml-[-40px] mt-[10px]">
                            <img src="{{ asset('/images/Symbol.png') }}" alt="Quote" class="w-5 h-5 mb-4"> <p class="ml-[16px] font-medium">Премиум Кофе Солюшнз</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Второй отзыв (без отступа) -->
                    <div class="h-[162px] flex bg-white p-6 rounded-tr-[22px] rounded-br-[22px] rounded-bl-[22px] shadow-md transition-transform duration-300 hover:scale-105 relative">
                        <img src="{{ asset('/images/Ava2.png') }}" alt="Аватарка" class="w-[91px] h-[91px] md:w-20 md:h-20 rounded-full absolute -left-8 md:-left-10 top-5">
                        <div class="flex-1 pl-5 md:pl-8">
                            <p class="text-gray-800 text-base leading-relaxed">Сегодня попробовали первый раз Ваши <br> обеды. Все очень вкусно! Будем продолжать) <br>Спасибо!</p>
                            <div class="flex ml-[-40px] mt-[0px]">
                            <img src="{{ asset('/images/Symbol.png') }}" alt="Quote" class="w-5 h-5 mb-4"> <p class="ml-[16px] font-medium">Байт-Эрг Мария</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Третий отзыв (с отступом) -->
                    <div class="h-[162px] flex bg-white p-6 rounded-tr-[22px] rounded-br-[22px] rounded-bl-[22px] shadow-md transition-transform duration-300 hover:scale-105 relative ml-12 md:ml-16 z-10">
                        <img src="{{ asset('/images/Ava3.png') }}" alt="Аватарка" class="w-[91px] h-[91px] md:w-20 md:h-20 rounded-full absolute -left-8 md:-left-10 top-5">
                        <div class="flex-1 pl-5 md:pl-8">
                            <p class="text-gray-800 text-base leading-relaxed">Заказали задание за 3 дня: обеды на 9 человек. Всё вовремя, вкусно и успешно доставили. Обеды всем понравились!</p> 
                            <div class="flex ml-[-40px] mt-[10px]">
                            <img src="{{ asset('/images/Symbol.png') }}" alt="Quote" class="w-5 h-5 mb-4"> <p class="ml-[16px] font-medium">Ирина Леонтьева</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Футер с призывом -->
        <div class="bg-cover bg-center h-[530px] py-12 md:py-16 px-4 pb-24 text-white text-center mt-[-150px] relative" style="background-image: url('images/Bg2.png')">
            <h3 class="text-2xl md:text-3xl mt-[98px] font-bold">Хотите поделиться своим<br>впечатлением?</h3>
            <p class="text-lg mb-8 font-normal" >Мы всегда уважаем мнения наших покупателей. Будь у вас есть<br class="hidden md:block">пожелания или предложения, пожалуйста, напишите нам о них!</p>
            <button id="openReviewModal" class="bg-white w-[230px] text-[#82bc00] border-none py-3 px-8 text-base cursor-pointer transition-all duration-300 hover:scale-105 hover:shadow-lg rounded-tr-[24px] rounded-br-[24px] rounded-bl-[24px]">
                Оставить отзыв
            </button>
        </div>
    </section>

    <!-- Модальное окно для отзыва -->
    <div id="reviewModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <!-- Затемненный фон -->
        <div class="absolute inset-0 modal-overlay" id="modalOverlay"></div>
        
        <!-- Модальное окно с зафиксированными размерами -->
        <div class="relative bg-white w-[550px] h-[600px] shadow-md rounded-[30px] transform transition-all duration-300 hover:scale-105 overflow-y-auto">
            <!-- Крестик выше заголовка справа -->
            <button id="closeReviewModal" class="absolute top-6 right-6 text-gray-500 hover:text-gray-700 transition-colors z-10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            
            <!-- Заголовок модального окна -->
            <div class="pt-16 pb-4">
                <h3 class="text-3xl md:text-4xl font-bold text-[#1a2a3a] ml-[57px]">Оставить отзыв</h3>
            </div>
            
            <!-- Форма отзыва -->
            <form class="flex flex-col items-center px-8 pb-8 space-y-6" id="reviewForm">
                <!-- Поле для имени -->
                <div class="relative w-[370px]">
                    <label class="absolute -top-2 left-4 bg-white px-2 text-sm font-medium text-gray-600">Имя</label>
                    <input type="text" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-[5px] focus:ring-2 focus:ring-[#82bc00] focus:border-transparent outline-none transition bg-white"
                           placeholder="Введите ваше имя"
                           required>
                </div>
                
                <!-- Поле для компании -->
                <div class="relative w-[370px]">
                    <label class="absolute -top-2 left-4 bg-white px-2 text-sm font-medium text-gray-600">E-mail</label>
                    <input type="text" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-[5px] focus:ring-2 focus:ring-[#82bc00] focus:border-transparent outline-none transition bg-white"
                           placeholder="Введите название компании">
                </div>
                
                <!-- Поле для отзыва -->
                <div class="relative w-[370px]">
                    <label class="absolute -top-2 left-4 bg-white px-2 text-sm font-medium text-gray-600">Отзыв</label>
                    <textarea rows="5"
                              class="w-full px-4 py-3 border border-gray-300 rounded-[5px] focus:ring-2 focus:ring-[#82bc00] focus:border-transparent outline-none transition resize-none bg-white"
                              placeholder="Напишите ваш отзыв..."
                              required></textarea>
                </div>
                
                <!-- Кнопка отправки (по левому краю) -->
                <div class="w-[370px]">
                    <button type="submit" 
                            class="w-[185px] bg-[#ff7f72] text-white py-3 px-8 text-base cursor-pointer transition-all duration-300 hover:scale-105 hover:shadow-lg rounded-tr-[24px] rounded-br-[24px] rounded-bl-[24px] font-medium mt-4">
                        Отправить
                    </button>
                </div>
            </form>
        </div>
    </div>
    @vite('resources/js/review.js')
</body>
</html>