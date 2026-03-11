<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хедер с бургером</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/header.css'])
</head>
<body>
    <!-- Хедер -->
    <header class="flex items-center bg-transparent p-4 ml-[360px] h-[206px] pb-[134px] max-[425px]:ml-0 max-[425px]:h-auto max-[425px]:p-3 max-[425px]:px-4 max-[425px]:justify-between max-[425px]:relative max-[425px]:z-100">
        <!-- Бургер-меню -->
        <div class="hidden max-[425px]:flex flex-col justify-between w-9 h-[26px] cursor-pointer mr-5 max-[425px]:w-10 max-[425px]:h-7 max-[375px]:w-9 max-[375px]:h-6" id="burgerBtn">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>

        <!-- Логотип -->
        <img src="{{ asset('/images/Logo.png') }}" alt="Логотип" class="logo transition-transform duration-300 ease-in-out hover:scale-110 max-[425px]:w-[170px] max-[375px]:w-[95px]">

        <!-- Десктопная навигация -->
        <nav class="flex max-[425px]:hidden">
            <a href="#" class="ml-[70px] no-underline transition-all duration-300 hover:underline hover:decoration-[#ea580c] hover:decoration-2">О компании</a>
            <a href="#" class="ml-[70px] no-underline transition-all duration-300 hover:underline hover:decoration-[#ea580c] hover:decoration-2">Меню</a>
            <a href="#" class="ml-[70px] no-underline transition-all duration-300 hover:underline hover:decoration-[#ea580c] hover:decoration-2">Оплата</a>
            <a href="#" class="ml-[70px] no-underline transition-all duration-300 hover:underline hover:decoration-[#ea580c] hover:decoration-2">Доставка</a>
            <a href="#" class="ml-[70px] no-underline transition-all duration-300 hover:underline hover:decoration-[#ea580c] hover:decoration-2">Контакты</a>
        </nav>

        <!-- Телефон -->
        <img src="{{ asset('/images/phone.png') }}" alt="Телефон" class="phone-icon ml-[90px] transition-transform duration-300 ease-in-out hover:scale-110 max-[425px]:hidden">
    </header>

    <!-- Мобильное меню -->
    <div class="mobile-nav fixed inset-0 w-full h-screen bg-white z-1000 py-20 px-5 flex-col max-[425px]:px-4 max-[425px]:py-[70px]" id="mobileNav">
        <span class="close-menu absolute top-5 right-5 text-3xl cursor-pointer text-gray-700 hover:text-[#ee7700] max-[425px]:top-4 max-[425px]:right-4 max-[425px]:text-[28px]" id="closeBtn">&times;</span>
        <a href="#" class="text-gray-700 no-underline text-lg py-4 border-b border-gray-200 text-center hover:text-[#ee7700] max-[425px]:text-base max-[425px]:py-3.5 max-[375px]:text-sm max-[375px]:py-3">О компании</a>
        <a href="#" class="text-gray-700 no-underline text-lg py-4 border-b border-gray-200 text-center hover:text-[#ee7700] max-[425px]:text-base max-[425px]:py-3.5 max-[375px]:text-sm max-[375px]:py-3">Меню</a>
        <a href="#" class="text-gray-700 no-underline text-lg py-4 border-b border-gray-200 text-center hover:text-[#ee7700] max-[425px]:text-base max-[425px]:py-3.5 max-[375px]:text-sm max-[375px]:py-3">Оплата</a>
        <a href="#" class="text-gray-700 no-underline text-lg py-4 border-b border-gray-200 text-center hover:text-[#ee7700] max-[425px]:text-base max-[425px]:py-3.5 max-[375px]:text-sm max-[375px]:py-3">Доставка</a>
        <a href="#" class="text-gray-700 no-underline text-lg py-4 border-b border-gray-200 text-center hover:text-[#ee7700] max-[425px]:text-base max-[425px]:py-3.5 max-[375px]:text-sm max-[375px]:py-3">Контакты</a>
        <img src="{{ asset('/images/phone.png') }}" alt="Телефон" class="phone-icon mx-auto mt-5 block w-auto max-[425px]:w-[30px] max-[425px]:h-[30px] max-[425px]:mt-6">
    </div>
@vite('resources/js/header.js')
</body>
</html>