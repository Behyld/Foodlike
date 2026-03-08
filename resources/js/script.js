document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('cardsContainer');
        const leftBtn = document.getElementById('slideLeftBtn');
        const rightBtn = document.getElementById('slideRightBtn');

        if (!container || !leftBtn || !rightBtn) return;

        // Вычисляем ширину прокрутки: ширина карточки + gap
        const card = container.querySelector('.flex-shrink-0');
        if (!card) return;

        const cardWidth = card.offsetWidth; // 380px
        const gap = parseFloat(getComputedStyle(container).gap) || 16; // 16px
        const scrollAmount = cardWidth + gap; // 396px

        // Обработчики кликов
        leftBtn.addEventListener('click', function() {
            container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });

        rightBtn.addEventListener('click', function() {
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        // Опционально: скрывать кнопки при достижении края
        function updateButtonsVisibility() {
            const maxScrollLeft = container.scrollWidth - container.clientWidth;
            leftBtn.style.opacity = container.scrollLeft <= 0 ? '0.5' : '1';
            rightBtn.style.opacity = container.scrollLeft >= maxScrollLeft - 1 ? '0.5' : '1';
        }

        container.addEventListener('scroll', updateButtonsVisibility);
        window.addEventListener('resize', updateButtonsVisibility);
        updateButtonsVisibility(); // инициализация
    });