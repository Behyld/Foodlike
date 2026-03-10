document.addEventListener('DOMContentLoaded', function() {
    const cardsData = [
        { bgImage: '/images/khinkalis.png', icon: '/images/croissantIcon.png', text: 'Мучные изделия' },
        { bgImage: '/images/draniki.png', icon: '/images/dishIcon.png', text: 'горячие блюда' },
        { bgImage: '/images/eggroulette.png', icon: '/images/sandwichButton.png', text: 'Закуски' },
        { bgImage: '/images/pizza.png', icon: '/images/pizzaIcon.png', text: 'Пицца' },
        { bgImage: '/images/cakes.png', icon: '/images/desserticon.png', text: 'Десерты' }
    ];

    const visibleCount = 3;
    const innerSlider = document.getElementById('innerSlider');
    const leftBtn = document.getElementById('slideLeftCardBtn');
    const rightBtn = document.getElementById('slideRightCardBtn');

    if (!innerSlider || !leftBtn || !rightBtn) return;

    function createCard(data) {
        const card = document.createElement('div');
        card.className = 'relative bg-cover bg-center h-[239px] w-[380px] flex-shrink-0';
        card.style.backgroundImage = `url('${data.bgImage}')`;

        const innerDiv = document.createElement('div');
        innerDiv.className = 'absolute bottom-4 left-4 w-[316px] bg-white text-black p-2 rounded-[5px] flex items-center';

        const iconImg = document.createElement('img');
        iconImg.src = data.icon;
        iconImg.className = 'w-6 h-6 mr-2';
        iconImg.alt = 'иконка';

        const span = document.createElement('span');
        span.className = 'font-medium leading-none';
        span.textContent = data.text;

        const arrowImg = document.createElement('img');
        arrowImg.src = '/images/rightArrow.png';
        arrowImg.className = 'w-5 h-5 ml-auto';
        arrowImg.alt = 'стрелка';

        innerDiv.appendChild(iconImg);
        innerDiv.appendChild(span);
        innerDiv.appendChild(arrowImg);
        card.appendChild(innerDiv);
        return card;
    }

    const originalCards = cardsData.map(data => createCard(data));
    const totalOriginal = originalCards.length;

    const prependCards = originalCards.slice(-visibleCount).map(card => card.cloneNode(true));
    const appendCards = originalCards.slice(0, visibleCount).map(card => card.cloneNode(true));
    const allCards = [...prependCards, ...originalCards, ...appendCards];

    allCards.forEach(card => innerSlider.appendChild(card));

    requestAnimationFrame(() => {
        const card = allCards[0];
        const cardWidth = card.offsetWidth;         
        const gap = parseFloat(getComputedStyle(innerSlider).gap) || 16;
        const slideWidth = cardWidth + gap;       

        let currentIndex = visibleCount;
        const maxIndex = allCards.length - visibleCount;

        innerSlider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

        function slideTo(index, withAnimation = true) {
            if (!withAnimation) {
                innerSlider.style.transition = 'none';
            } else {
                innerSlider.style.transition = 'transform 0.3s ease-in-out';
            }
            currentIndex = index;
            innerSlider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        }

        innerSlider.addEventListener('transitionend', () => {
            if (currentIndex < visibleCount) {
                const newIndex = currentIndex + totalOriginal;
                slideTo(newIndex, false);
            } else if (currentIndex >= visibleCount + totalOriginal) {
                const newIndex = currentIndex - totalOriginal;
                slideTo(newIndex, false);
            }
        });

        leftBtn.addEventListener('click', () => slideTo(currentIndex - 1));
        rightBtn.addEventListener('click', () => slideTo(currentIndex + 1));
    });
});