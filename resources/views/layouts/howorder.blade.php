<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Как сделать заказ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>
<body class="bg-[#fbf8f8] text-black">
    <!-- Заголовок -->
    <div class="mt-[150px] text-center text-[34px] font-bold">
        <h2>Как сделать заказ</h2>
    </div>

    <!-- Карточки -->
    <div class="flex w-[1199px] justify-between ml-[360px] mt-[60px]">
        <!-- Карточка 1: Заказ -->
        <div class="bg-white w-[277px] min-h-[278px] h-auto rounded-tr-[33px] rounded-br-[33px] rounded-bl-[33px] order-card pb-4">
            <img src="{{ asset('/images/fingericon.png') }}" class="mt-[41px] ml-[27px]">
            <p class="text-[18px] font-medium ml-[27px] mt-[19px]">Заказ</p>
            <p class="w-[223px] ml-[27px] mt-[8px]">Перейдите в "Меню" и выберите предпочитаемые блюда и затем заполните форму заявки и ожидайте звонка менеджера</p>
            <div class="more-link mt-2 ml-[27px] font-medium">Подробнее ></div>
        </div>

        <!-- Карточка 2: Оплата -->
        <div class="bg-white w-[277px] min-h-[278px] h-auto rounded-tr-[33px] rounded-br-[33px] rounded-bl-[33px] order-card pb-4">
            <img src="{{ asset('/images/cardicon.png') }}" class="mt-[41px] ml-[27px]">
            <p class="text-[18px] font-medium ml-[25px] mt-[14px]">Оплата</p>
            <p class="w-[223px] ml-[27px] mt-[8px]">Мы принимаем любой удобный для вас способ оплаты: картой банка, наличными, электронным платежом</p>
            <div class="more-link mt-2 ml-[27px] font-medium">Подробнее ></div>
        </div>

        <!-- Карточка 3: Доставка -->
        <div class="bg-white w-[277px] min-h-[278px] h-auto rounded-tr-[33px] rounded-br-[33px] rounded-bl-[33px] order-card pb-4">
            <img src="{{ asset('/images/deliveryicon.png') }}" class="mt-[41px] ml-[27px]">
            <p class="text-[18px] font-medium ml-[27px] mt-[14px]">Доставка</p>
            <p class="w-[223px] ml-[27px] mt-[8px]">Производится каждый день по Москве с 8:00 до 20:00. Сумма минимального заказа составляет 800 рублей</p>
            <div class="more-link mt-2 ml-[27px] font-medium">Подробнее ></div>
        </div>

        <!-- Карточка 4: Упаковка -->
        <div class="bg-white w-[277px] min-h-[278px] h-auto rounded-tr-[33px] rounded-br-[33px] rounded-bl-[33px] order-card pb-4">
            <img src="{{ asset('/images/packicon.png') }}" class="mt-[46px] ml-[27px]">
            <p class="text-[18px] font-medium ml-[26px] mt-[19px]">Упаковка</p>
            <p class="w-[223px] ml-[27px] mt-[8px]">Блюда доставляются в одноразовой пластиковой посуде в охлаждённом виде (необходимо подогрев в микроволновой печи)</p>
            <div class="more-link mt-2 ml-[27px] font-medium">Подробнее ></div>
        </div>
    </div>

    @vite('resources/js/howorder.js')
</body>
</html>