<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты - FoodILike</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="m-0 p-0 font-sans">
    <div class="min-h-screen flex flex-col bg-cover bg-center" style="background-image: url('images/Bg.png')">
        <div class="max-w-7xl w-full mx-auto px-4 md:px-8 pt-10 flex flex-col min-h-screen">
            <!-- Заголовок -->
            <div class="bg-transparent mb-5 max-w-2xl">
                <h1 class="font-extrabold text-3xl md:text-5xl text-white drop-shadow-lg mb-2 mt-10">РАССЧИТАТЬ СТОИМОСТЬ ОБЕДА</h1>
                <div class="text-xl md:text-2xl text-white drop-shadow-md max-w-2xl">Заполните небольшую форму и наш менеджер свяжется с вами в ближайшее время.</div>
            </div>
            
            <!-- Форма -->
            <div class="bg-transparent mb-5 max-w-2xl">
                <!-- Первая строка: Дата и Кол-во человек -->
                <div class="flex flex-col md:flex-row gap-6 mb-1 max-w-md w-full">
                    <div class="flex-1 min-w-[250px] flex flex-col">
                        <label class="text-sm font-extrabold uppercase text-white drop-shadow-md mb-1">Дата</label>
                        <input type="text" placeholder="03-05-2020" class="bg-transparent border border-white rounded-lg p-3.5 text-xl text-gray-400 outline-none w-full shadow-md">
                    </div>
                    <div class="flex-1 min-w-[250px] flex flex-col">
                        <label class="text-sm font-extrabold uppercase text-white drop-shadow-md mb-1">Кол-во человек</label>
                        <select id="persons" name="persons" class="h-14 bg-transparent border border-white text-white rounded-lg text-xl px-2">
                            <option value="1" class="text-black">1 человек</option>
                            <option value="2" class="text-black">2 человека</option>
                            <option value="3" class="text-black">3 человека</option>
                            <option value="4" class="text-black">4 человека</option>
                            <option value="5" class="text-black">5 человек</option>
                            <option value="6" class="text-black">6 человек</option>
                        </select>
                    </div>
                </div>
                
                <!-- Вторая строка: Имя и Телефон -->
                <div class="flex flex-col md:flex-row gap-6 mb-5 max-w-md w-full">
                    <div class="flex-1 min-w-[250px] flex flex-col mb-1">
                        <label class="text-sm font-semibold uppercase text-white drop-shadow-md mb-1">Имя</label>
                        <input type="text" placeholder="Андрей Павлович" class="bg-transparent border border-white rounded-lg p-3.5 text-xl text-gray-400 outline-none w-full shadow-md">
                    </div>
                    <div class="flex-1 min-w-[250px] flex flex-col mb-1">
                        <label class="text-sm font-semibold uppercase text-white drop-shadow-md mb-1">Телефон</label>
                        <input type="text" placeholder="+7 (999) 999 99 99" class="bg-transparent border border-white rounded-lg p-3.5 text-xl text-gray-400 outline-none w-full shadow-md">
                    </div>
                </div>
                
                <button class="bg-[#f4511e] border-none mt-5 py-5 px-12 font-medium text-xl text-white cursor-pointer tracking-wide rounded-tl-none rounded-tr-3xl rounded-br-3xl rounded-bl-3xl transition-transform duration-200 hover:bg-[#e63e0b] hover:scale-105 w-fit">Рассчитать</button>
            </div>
            
            <!-- Подвал -->
            <div class="bg-black/30 backdrop-blur-md w-[1900px] ml-[calc(-50vw+50%)] px-4 md:px-16 lg:px-32 py-4 pb-8 text-white mt-auto">
                <!-- Верхняя часть подвала -->
                <div class="flex flex-wrap justify-between items-center gap-8 mb-5">
                    <div class="flex flex-wrap gap-8 md:gap-10">
                        <a href="#" class="no-underline font-extrabold text-lg text-white drop-shadow-md hover:underline">Главная</a>
                        <a href="#" class="no-underline font-extrabold text-lg text-white drop-shadow-md hover:underline">О компании</a>
                        <a href="#" class="no-underline font-extrabold text-lg text-white drop-shadow-md hover:underline">Меню</a>
                        <a href="#" class="no-underline font-extrabold text-lg text-white drop-shadow-md hover:underline">Отзывы</a>
                        <a href="#" class="no-underline font-extrabold text-lg text-white drop-shadow-md hover:underline">Доставка</a>
                        <a href="#" class="no-underline font-extrabold text-lg text-white drop-shadow-md hover:underline">Контакты</a>
                    </div>
                    
                    <div class="flex border border-white/30 pl-4 min-w-[300px] md:min-w-[400px]">
                        <input type="text" placeholder="Поиск..." class="bg-transparent border-none py-2 text-xl text-white outline-none flex-1 placeholder:text-white/80">
                        <button class="bg-none border-none cursor-pointer">
                            <img src="{{ asset('/images/search.png') }}" alt="search" class="w-5 h-5 m-1.5">
                        </button>
                    </div>
                </div>
                
                <!-- Средняя часть подвала -->
                <div class="flex flex-wrap items-center justify-between gap-6 mb-4">
                    <div class="text-xl font-medium text-white drop-shadow-md flex items-center gap-2">
                    <img src="{{ asset('/images/Vector.png') }}" alt="local" class=""> Челябинск, ул. Центральная (Шершни), д. 10
                    </div>
                    
                    <div class="flex flex-wrap gap-8 md:gap-20">
                        <a href="mailto:zakaz@foodilike.ru" class="text-white no-underline text-xl flex items-center gap-2"> 
                            <img src="{{ asset('/images/Letter.png') }}" alt="Letter" class="">zakaz@foodilike.ru
                        </a>
                        <a href="tel:+73512330601" class="text-white no-underline text-xl flex items-center gap-2">
                            <img src="{{ asset('/images/tel.png') }}" alt="tel" class=""> +7 351 233-06-01
                        </a>
                    </div>
                    
                    <button class="bg-white border-none py-2.5 px-8 rounded-tl-none rounded-tr-3xl rounded-br-3xl rounded-bl-3xl font-bold text-xl text-[#1e2d2f] cursor-pointer shadow-md hover:bg-gray-100">Обратный звонок</button>
                </div>
                
                <!-- Разделитель -->
                <div class="h-px bg-white/30 w-full my-4"></div>
                
                <!-- Нижняя часть подвала -->
                <div class="flex flex-wrap justify-between items-center text-[#777E89] text-xl drop-shadow-md">
                    <div>© 2019 Universe, Все права защищены</div>
                    <div class="flex">
                        <img src="{{ asset('/images/INTEC.png') }}" alt="INTEC logo" class="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>