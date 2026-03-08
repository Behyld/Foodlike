document.addEventListener('DOMContentLoaded', function() {
        // Элементы
        const cards = document.querySelectorAll('.card');
        const leftBtn = document.getElementById('sliderLeftChangeFullMenuButton');
        const rightBtn = document.getElementById('sliderRightChangeFullMenuButton');
        const menuItems = document.querySelectorAll('.menu-item');
        let activeCardIndex = 0;

        // Верхнее меню
        function activateMenuItem(activeItem) {
            menuItems.forEach(item => {
                item.classList.remove('active', 'font-bold');
            });
            activeItem.classList.add('active', 'font-bold');
        }

        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                activateMenuItem(this);
            });
        });

        // Карточки
        function activateCard(index) {
            cards.forEach((card, i) => {
                const arrow = card.querySelector('.card-arrow');
                const textBlock = card.querySelector('.card-text-block');
                if (i === index) {
                    arrow.classList.add('opacity-100');
                    textBlock.classList.add('bg-[#ee7700]', 'text-white');
                } else {
                    arrow.classList.remove('opacity-100');
                    textBlock.classList.remove('bg-[#ee7700]', 'text-white');
                }
            });
            activeCardIndex = index;
        }

        cards.forEach((card, i) => {
            card.addEventListener('click', () => activateCard(i));
        });

        // Кнопки переключения
        if (leftBtn) {
            leftBtn.addEventListener('click', function() {
                let newIndex = (activeCardIndex - 1 + cards.length) % cards.length;
                activateCard(newIndex);
            });
        } else {
            console.warn('Левая кнопка с ID sliderLeftChangeFullMenuButton не найдена');
        }

        if (rightBtn) {
            rightBtn.addEventListener('click', function() {
                let newIndex = (activeCardIndex + 1) % cards.length;
                activateCard(newIndex);
            });
        } else {
            console.warn('Правая кнопка с ID sliderRightChangeFullMenuButton не найдена');
        }

        // Инициализация
        if (menuItems.length > 0) {
            activateMenuItem(menuItems[0]);
        }
        if (cards.length > 0) {
            activateCard(0);
        }
    });