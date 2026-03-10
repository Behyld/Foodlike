<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="mt-[870px] w-full h-[596px] bg-cover bg-center bg-no-repeat" style="background-image: url('/images/backg.png');"></div>
    <form action="submit" class="w-[585px] h-[656px] bg-white ml-[360px] mt-[-568px] rounded-[53px] text-center">
        <h3 class="text-center font-bold text-[34px] pt-[77px]">Не знаете, <br> что лучше заказать?</h3>
        <p class="text-[16px] text-[#2f2f2f] text-center w-[325px] mx-auto leading-relaxed mt-[16px] h-[96px]">
            Оставьте заявку и наш специалист свяжется с Вами. Он поможет подобрать вкусный комплексный обед, рассчитать стоимость <br> и оформить доставку
        </p>

        <!-- Контейнер для поля с лейблом на рамке -->
        <div class="relative w-[380px] mx-auto mt-[32px] border border-gray-300 rounded-[5px]">
            <label class="absolute left-[34px] -translate-x-1/2 -top-3 bg-white px-2 text-sm text-gray-600 font-medium">Имя</label>
            <input type="text" placeholder="Андрей Васильевич" 
                   class="block w-full h-[50px] pl-[15px] pr-3 border-none rounded-[5px] focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <div class="relative w-[380px] mx-auto mt-[32px] border border-gray-300 rounded-[5px]">
            <label class="absolute left-[47px] -translate-x-1/2 -top-3 bg-white px-2 text-sm text-gray-600 font-medium">Телефон</label>
            <input type="text" placeholder="+7 (999) 999 99 99" 
                   class="block w-full h-[50px] pl-[15px] pr-3 border-none rounded-[5px] focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

         <button class="mt-[33px] bg-[#EE7700] w-[208px] h-[48px] text-white rounded-tr-[24px] rounded-br-[24px] rounded-bl-[24px]">Отправить</button>
        
        <p class="mt-[25px] font-medium">Нажимая кнопку Вы подтверждаете <br>
            обработку <span class="font-bold underline">Персональных данных</span></p>
    </form>
</body>
</html>