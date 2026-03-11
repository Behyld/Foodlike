document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.card');
    const leftBtn = document.getElementById('sliderLeftChangeMenuButton');
    const rightBtn = document.getElementById('sliderRightChangeMenuButton');
    const menuItems = document.querySelectorAll('.menu-item');
    let activeCardIndex = 0;

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
    function activateMenuCard(index) {
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
        card.addEventListener('click', (e) => {
            if (!e.target.classList.contains('card-arrow')) {
                activateMenuCard(i);
            }
        });

        const arrow = card.querySelector('.card-arrow');
        if (arrow) {
            arrow.addEventListener('click', (e) => {
                e.stopPropagation();
                console.log('Arrow clicked for card', i);
                alert(`Переход к блюду: ${card.querySelector('.font-medium').textContent}`);
            });
        }
    });

    if (leftBtn) {
        leftBtn.addEventListener('click', function() {
            let newIndex = (activeCardIndex - 1 + cards.length) % cards.length;
            activateMenuCard(newIndex);
        });
    }
    if (rightBtn) {
        rightBtn.addEventListener('click', function() {
            let newIndex = (activeCardIndex + 1) % cards.length;
            activateMenuCard(newIndex);
        });
    } 

    if (menuItems.length > 0) {
        activateMenuItem(menuItems[0]);
    }
    if (cards.length > 0) {
        activateMenuCard(0);
    }
});