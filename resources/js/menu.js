// resources/js/menu.js

document.addEventListener('DOMContentLoaded', function() {
    console.log('Скрипт menu.js загружен');

    // Данные карточек
    const slides = [
        {
            image: '/images/teriyakiChicken.png',
            title: 'Курица в соусе терияки',
            desc: 'куриная грудка, сыр, шампиньоны, майонез',
            price: '280₽'
        },
        {
            image: '/images/pumpkinCreamSoup.png',
            title: 'Тыквенный крем-суп',
            desc: 'куриная грудка, сыр, шампиньоны, майонез',
            price: '280₽'
        },
        {
            image: '/images/salad.png',
            title: 'Салат летний',
            desc: 'куриная грудка, сыр, шампиньоны, майонез',
            price: '280₽'
        }
    ];

    const sliderImages = [
        '/images/slider1.png',
        '/images/slider2.png',
        '/images/slider3.png'
    ];

    // Элементы
    const img = document.getElementById('dishImage');
    const title = document.getElementById('dishTitle');
    const desc = document.getElementById('dishDesc');
    const price = document.getElementById('dishPrice');
    const sliderImg = document.getElementById('sliderImage');

    const cards = document.querySelectorAll('.card');
    const leftBtn = document.getElementById('sliderLeftChangeFullMenuButton');
    const rightBtn = document.getElementById('sliderRightChangeFullMenuButton');
    const menuItems = document.querySelectorAll('.menu-item');

    console.log('Найдено карточек:', cards.length);
    console.log('Левая кнопка:', leftBtn);
    console.log('Правая кнопка:', rightBtn);
    console.log('Пунктов меню:', menuItems.length);

    if (!img || !title || !desc || !price || !sliderImg) {
        console.error('Не найдены основные элементы (dishImage, dishTitle, dishDesc, dishPrice, sliderImage)');
        return;
    }

    let activeCardIndex = 0;
    const totalSlides = slides.length;

    // Активация пункта меню
    function activateMenuItem(activeItem) {
        menuItems.forEach(item => {
            item.classList.remove('active', 'font-bold');
        });
        activeItem.classList.add('active', 'font-bold');
        console.log('Активирован пункт меню:', activeItem.textContent);
    }

    // Активация карточки
    function activateCard(index) {
        console.log('Активация карточки с индексом:', index);
        const slide = slides[index];
        img.src = slide.image;
        title.textContent = slide.title;
        desc.textContent = slide.desc;
        price.textContent = slide.price;
        sliderImg.src = sliderImages[index];

        cards.forEach((card, i) => {
            const arrow = card.querySelector('.card-arrow');
            const textBlock = card.querySelector('.card-text-block');
            if (!arrow) console.warn(`В карточке ${i} нет .card-arrow`);
            if (!textBlock) console.warn(`В карточке ${i} нет .card-text-block`);
            if (i === index) {
                arrow?.classList.add('opacity-100');
                textBlock?.classList.add('bg-[#ee7700]', 'text-white');
            } else {
                arrow?.classList.remove('opacity-100');
                textBlock?.classList.remove('bg-[#ee7700]', 'text-white');
            }
        });

        activeCardIndex = index;
    }

    // Обработчики для пунктов меню
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            activateMenuItem(this);
        });
    });

    // Обработчики для карточек
    cards.forEach((card, i) => {
        card.addEventListener('click', () => {
            console.log('Клик по карточке', i);
            activateCard(i);
        });
    });
    

    // Обработчики для кнопок
    if (leftBtn) {
        leftBtn.addEventListener('click', function(e) {
            console.log('Клик по левой кнопке');
            const newIndex = (activeCardIndex - 1 + totalSlides) % totalSlides;
            activateCard(newIndex);
        });
    } else {
        console.error('Левая кнопка не найдена! Проверьте ID: sliderLeftChangeFullMenuButton');
    }

    if (rightBtn) {
        rightBtn.addEventListener('click', function(e) {
            console.log('Клик по правой кнопке');
            const newIndex = (activeCardIndex + 1) % totalSlides;
            activateCard(newIndex);
        });
    } else {
        console.error('Правая кнопка не найдена! Проверьте ID: sliderRightChangeFullMenuButton');
    }

    // Инициализация
    if (menuItems.length > 0) {
        activateMenuItem(menuItems[0]);
    }
    if (cards.length > 0) {
        activateCard(0);
    }
});