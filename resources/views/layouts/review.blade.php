<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodILike</title>
</head>
<body class="bg-white font-sans">
    <div class="bg-white flex justify-center items-center min-h-screen py-10 px-4">
        <div class="max-w-7xl w-full bg-transparent px-4 md:px-12">
            <h1 class="text-3xl md:text-4xl font-bold text-[#1a2a3a] mb-8 tracking-tight">Интересные статьи</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-5">
                <!-- Левая колонка (2/3) -->
                <div class="md:col-span-2 flex flex-col gap-8">
                    <!-- Горизонтальная статья -->
                    <div class="flex rounded-2xl overflow-hidden">
                        <div class="relative w-full min-h-[250px] bg-[#e0e9f0]">
                            <img src="{{ asset('/images/Card1.png') }}" alt="Статья" class="w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 right-0 p-6 pl-8 md:pl-12 pb-8 bg-gradient-to-t from-black/80 to-transparent text-white">
                                <div class="text-sm font-medium opacity-90 mb-1">22.04.2020</div>
                                <div class="text-xl md:text-2xl font-bold leading-tight">Разгружаемся после праздников</div>
                            </div>
                            <!-- Затемнение при наведении -->
                            <div class="absolute inset-0 bg-black/0 transition-colors duration-300 hover:bg-black/40 pointer-events-none"></div>
                        </div>
                    </div>
                    
                    <!-- Две маленькие статьи в ряд -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Первая маленькая -->
                        <div class="rounded-2xl overflow-hidden relative">
                            <div class="relative w-full h-[267px] bg-[#dde5ec]">
                                <img src="{{ asset('/images/Card2.png') }}" alt="Статья" class="w-full h-full object-cover">
                                <div class="absolute bottom-0 left-0 right-0 p-5 pl-8 md:pl-12 pb-8 bg-gradient-to-t from-black/80 to-transparent text-white">
                                    <div class="text-sm font-medium opacity-90 mb-1">22.04.2020</div>
                                    <div class="text-lg md:text-xl font-bold leading-tight">Готовим обеды для офиса</div>
                                </div>
                                <div class="absolute inset-0 bg-black/0 transition-colors duration-300 hover:bg-black/40 pointer-events-none"></div>
                            </div>
                        </div>
                        
                        <!-- Вторая маленькая -->
                        <div class="rounded-2xl overflow-hidden relative">
                            <div class="relative w-full h-[267px] bg-[#dde5ec]">
                                <img src="{{ asset('/images/Card3.png') }}" alt="Статья" class="w-full h-full object-cover">
                                <div class="absolute bottom-0 left-0 right-0 p-5 pl-8 md:pl-12 pb-8 bg-gradient-to-t from-black/80 to-transparent text-white">
                                    <div class="text-sm font-medium opacity-90 mb-1">22.04.2020</div>
                                    <div class="text-lg md:text-xl font-bold leading-tight">Еда, которая заставляет грустить</div>
                                </div>
                                <div class="absolute inset-0 bg-black/0 transition-colors duration-300 hover:bg-black/40 pointer-events-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Правая колонка (1/3) -->
                <div class="flex flex-col gap-8">
                    <!-- Вертикальная статья -->
                    <div class="rounded-2xl overflow-hidden relative w-full">
                        <div class="relative w-full bg-[#e0e9f0]">
                            <img src="{{ asset('/images/Card4.png') }}" alt="Статья" class="w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 p-6 pl-8 md:pl-12 pb-8 bg-gradient-to-t from-black/80 to-transparent text-white">
                                <div class="text-sm font-medium opacity-90 mb-1">22.04.2020</div>
                                <div class="text-xl md:text-2xl font-bold leading-tight">Что такое детокс? Очищаем организм</div>
                            </div>
                            <div class="absolute inset-0 bg-black/0 transition-colors duration-300 hover:bg-black/40 pointer-events-none"></div>
                        </div>
                    </div>
                    
                    <!-- Ссылка "Все статьи" -->
                    <div class="flex items-center justify-end text-xl font-semibold text-[#1a2a3a] cursor-pointer w-full mt-2">
                        Все статьи
                        <span class="w-9 h-9 flex items-center justify-center">
                            <img src="{{ asset('/images/arrow.png') }}" alt="→" class="w-4 h-5 block">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>