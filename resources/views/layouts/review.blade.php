<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы - FoodILike</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans m-0 p-0">
    <section class="bg-gray-100 py-12 md:py-16 relative">
        <div class="max-w-7xl mx-auto px-4 md:px-8 flex flex-col md:flex-row gap-8 md:gap-12">
            <!-- Заголовок слева -->
            <div class="md:w-1/2 text-left">
                <h2 class="text-3xl md:text-4xl text-gray-800 mb-2 leading-tight">Нашим клиентам нравится<br>то, что мы делаем</h2>
                <p class="text-lg text-gray-600 mb-5">Для нас важно любое ваше мнение!</p>
                <a href="#" class="text-gray-600 no-underline text-base hover:underline">Все отзывы</a>
            </div>
            
            <!-- Список отзывов справа -->
            <div class="md:w-1/2">
                <div class="flex flex-col gap-5">
                    <!-- Первый отзыв -->
                    <div class="flex bg-white p-6 rounded-xl shadow-md transition-transform duration-300 hover:scale-105 relative ml-12 md:ml-16">
                         <img src="{{ asset('/images/Ava1.png') }}" alt="Аватарка" class="w-16 h-16 md:w-20 md:h-20 rounded-full absolute -left-8 md:-left-10 top-5">
                        <div class="flex-1 pl-5 md:pl-8">
                            <img src="{{ asset('/images/Symbol.png') }}" alt="Quote" class="w-5 h-5 mb-4">
                            <p class="text-gray-800 text-base leading-relaxed">Конструктивный, всегда свежие продукты, оперативно, вежливый, исполнительный курьер, работают просто фантастически.</p>
                        </div>
                    </div>
                    
                    <!-- Второй отзыв (без отступа) -->
                    <div class="flex bg-white p-6 rounded-xl shadow-md transition-transform duration-300 hover:scale-105 relative">
                        <img src="{{ asset('/images/Ava2.png') }}" alt="Аватарка" class="w-16 h-16 md:w-20 md:h-20 rounded-full absolute -left-8 md:-left-10 top-5">
                        <div class="flex-1 pl-5 md:pl-8">
                            <img src="{{ asset('/images/Symbol.png') }}" alt="Quote" class="w-5 h-5 mb-4">
                            <p class="text-gray-800 text-base leading-relaxed">Сегодня попробовали первый раз Ваши обеды. Всё очень вкусно буду продолжать! Спасибо!</p>
                        </div>
                    </div>
                    
                    <!-- Третий отзыв (с отступом) -->
                    <div class="flex bg-white p-6 rounded-xl shadow-md transition-transform duration-300 hover:scale-105 relative ml-12 md:ml-16 z-10">
                        <img src="{{ asset('/images/Ava3.png') }}" alt="Аватарка" class="w-16 h-16 md:w-20 md:h-20 rounded-full absolute -left-8 md:-left-10 top-5">
                        <div class="flex-1 pl-5 md:pl-8">
                            <img src="{{ asset('/images/Symbol.png') }}" alt="Quote" class="w-5 h-5 mb-4">
                            <p class="text-gray-800 text-base leading-relaxed">Заказали задание за 3 дня: обеды на 9 человек. Всё вовремя, вкусно и успешно доставили. Обеды всем понравились!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Футер с призывом -->
        <div class="bg-cover bg-center min-h-[350px] py-12 md:py-16 px-4 pb-24 text-white text-center mt-12 relative" style="background-image: url('images/Bg2.png')">
            <h3 class="text-2xl md:text-3xl mb-5">Хотите поделиться своим<br>впечатлением?</h3>
            <p class="text-lg md:text-xl mb-8">Мы всегда уважаем мнения наших покупателей. Будь у вас есть<br class="hidden md:block">пожелания или предложения, пожалуйста, напишите нам о них!</p>
            <button class="bg-white text-gray-800 border-none py-3 px-8 text-base rounded-md cursor-pointer transition-transform duration-300 hover:scale-105">Оставить отзыв</button>
        </div>
    </section>
</body>
</html>