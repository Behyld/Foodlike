document.addEventListener('DOMContentLoaded', function() {
    const orderCards = document.querySelectorAll('.order-card');

    const whiteIconPaths = [
        '/images/fingerwhiteicon.png',
        '/images/cardwhiteicon.png',
        '/images/deliverywhiteicon.png',
        '/images/packwhiteicon.png'
    ];

    orderCards.forEach((card, index) => {
        const icon = card.querySelector('img');
        if (icon) {
            icon.dataset.originalSrc = icon.src;
            icon.dataset.whiteSrc = whiteIconPaths[index];
        }
    });

    function unselectCard(card) {
        card.classList.remove('selected');
        const img = card.querySelector('img');
        if (img && img.dataset.originalSrc) {
            img.src = img.dataset.originalSrc;
        }
    }

    function selectCard(card) {
        card.classList.add('selected');
        const img = card.querySelector('img');
        if (img && img.dataset.whiteSrc) {
            img.src = img.dataset.whiteSrc;
        }
    }

    orderCards.forEach(card => {
        card.addEventListener('click', function() {
            if (this.classList.contains('selected')) {
                unselectCard(this);
            } else {
                orderCards.forEach(c => unselectCard(c));
                selectCard(this);
            }
        });
    });
});