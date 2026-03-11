// Открытие/закрытие мобильного меню
        const burgerBtn = document.getElementById('burgerBtn');
        const mobileNav = document.getElementById('mobileNav');
        const closeBtn = document.getElementById('closeBtn');

        if (burgerBtn) {
            burgerBtn.addEventListener('click', function() {
                mobileNav.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            });
        }

        // Закрытие по клику на ссылку
        const mobileLinks = mobileNav.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            });
        });