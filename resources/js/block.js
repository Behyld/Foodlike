document.addEventListener('DOMContentLoaded', function() {
            // Данные карточек (можно вынести в отдельный массив или получить из существующего HTML)
            const cardsData = [
                {
                    bgImage: '/images/khinkalis.png',
                    icon: '/images/croissantIcon.png',
                    text: 'Мучные изделия'
                },
                {
                    bgImage: '/images/draniki.png',
                    icon: '/images/dishIcon.png',
                    text: 'горячие блюда'
                },
                {
                    bgImage: '/images/eggroulette.png',
                    icon: '/images/sandwichButton.png',
                    text: 'Закуски'
                },
                {
                    bgImage: '/images/pizza.png',
                    icon: '/images/pizzaIcon.png',
                    text: 'Пицца'
                },
                {
                    bgImage: '/images/cakes.png',
                    icon: '/images/desserticon.png',
                    text: 'Десерты'
                }
            ];

            const visibleCount = 3; // сколько показываем одновременно
            const innerSlider = document.getElementById('innerSlider');
            const leftBtn = document.getElementById('slideLeftBtn');
            const rightBtn = document.getElementById('slideRightBtn');

            if (!innerSlider || !leftBtn || !rightBtn) return;

            // Функция для создания DOM-элемента карточки по данным
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

            // Создаем массив карточек из данных
            const originalCards = cardsData.map(data => createCard(data));
            const totalOriginal = originalCards.length;

            // Клонируем первые visibleCount и последние visibleCount для бесконечности
            const prependCards = originalCards.slice(-visibleCount).map(card => card.cloneNode(true));
            const appendCards = originalCards.slice(0, visibleCount).map(card => card.cloneNode(true));

            // Собираем полный список: клоны в начале + оригиналы + клоны в конце
            const allCards = [...prependCards, ...originalCards, ...appendCards];

            // Вставляем все карточки в слайдер
            allCards.forEach(card => innerSlider.appendChild(card));

            // Параметры слайдера
            const card = allCards[0]; // любая карточка для расчёта ширины
            const cardWidth = card.offsetWidth; // 380px
            const gap = parseFloat(getComputedStyle(innerSlider).gap) || 16;
            const slideWidth = cardWidth + gap; // расстояние на один шаг

            // Индекс первой видимой карточки в массиве allCards
            // Начинаем с visibleCount (чтобы показать оригинальные первые три)
            let currentIndex = visibleCount;
            const maxIndex = allCards.length - visibleCount; // последний возможный индекс

            // Устанавливаем начальное смещение
            innerSlider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

            // Функция плавного перехода к индексу
            function slideTo(index, withAnimation = true) {
                if (!withAnimation) {
                    innerSlider.style.transition = 'none';
                } else {
                    innerSlider.style.transition = 'transform 0.3s ease-in-out';
                }
                currentIndex = index;
                innerSlider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            }

            // Обработчик окончания перехода для переброски индекса
            innerSlider.addEventListener('transitionend', () => {
                // Если ушли влево на клоны в начале
                if (currentIndex < visibleCount) {
                    // Перебрасываем на соответствующий оригинал справа без анимации
                    const newIndex = currentIndex + totalOriginal;
                    slideTo(newIndex, false);
                }
                // Если ушли вправо на клоны в конце
                if (currentIndex >= visibleCount + totalOriginal) {
                    // Перебрасываем на соответствующий оригинал слева
                    const newIndex = currentIndex - totalOriginal;
                    slideTo(newIndex, false);
                }
            });

            // Обработчики кликов на стрелки
            leftBtn.addEventListener('click', () => {
                slideTo(currentIndex - 1);
            });

            rightBtn.addEventListener('click', () => {
                slideTo(currentIndex + 1);
            });

            // Блокировка кнопок не нужна — у нас бесконечная прокрутка
            // Но можно добавить визуальное отключение, если совсем нет карточек (не наш случай)
        });