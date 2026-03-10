document.addEventListener('DOMContentLoaded', function() {
    console.log('Скрипт слайдера загружен');

    const slides = [
        { image: '/images/teriyakiChicken.png', title: 'Курица в соусе терияки', desc: 'куриная грудка, сыр, шампиньоны, майонез', price: '280₽' },
        { image: '/images/pumpkinCreamSoup.png', title: 'Тыквенный крем-суп', desc: 'куриная грудка, сыр, шампиньоны, майонез', price: '280₽' },
        { image: '/images/salad.png', title: 'Салат летний', desc: 'куриная грудка, сыр, шампиньоны, майонез', price: '280₽' }
    ];

    const sliderImages = ['/images/slider1.png', '/images/slider2.png', '/images/slider3.png'];

    const img = document.getElementById('dishImage');
    const title = document.getElementById('dishTitle');
    const desc = document.getElementById('dishDesc');
    const price = document.getElementById('dishPrice');
    const sliderImg = document.getElementById('sliderImage');
    const leftBtn = document.getElementById('sliderLeftChangeFullMenuButton');
    const rightBtn = document.getElementById('sliderRightChangeFullMenuButton');

    if (!img || !title || !desc || !price || !sliderImg) {
        console.error('Не найдены элементы слайдера');
        return;
    }

    let activeIndex = 0;
    const totalSlides = slides.length;

    function updateSlide(index) {
        const slide = slides[index];
        img.src = slide.image;
        title.textContent = slide.title;
        desc.textContent = slide.desc;
        price.textContent = slide.price;
        sliderImg.src = sliderImages[index];
        activeIndex = index;
    }

    if (leftBtn) {
        leftBtn.addEventListener('click', () => {
            const newIndex = (activeIndex - 1 + totalSlides) % totalSlides;
            updateSlide(newIndex);
        });
    }
    if (rightBtn) {
        rightBtn.addEventListener('click', () => {
            const newIndex = (activeIndex + 1) % totalSlides;
            updateSlide(newIndex);
        });
    }

    updateSlide(0);
});