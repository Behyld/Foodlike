document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('reviewModal');
            const openBtn = document.getElementById('openReviewModal');
            const closeBtn = document.getElementById('closeReviewModal');
            const overlay = document.getElementById('modalOverlay');
            const form = document.getElementById('reviewForm');

            function openModal() {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = '';
                form.reset();
            }

            if (openBtn) {
                openBtn.addEventListener('click', openModal);
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', closeModal);
            }

            if (overlay) {
                overlay.addEventListener('click', closeModal);
            }

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });

            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const formData = {
                        name: document.querySelectorAll('.relative input[type="text"]')[0].value,
                        company: document.querySelectorAll('.relative input[type="text"]')[1].value,
                        review: document.querySelector('.relative textarea').value
                    };
                    
                    console.log('Отправка отзыва:', formData);
                    alert('Спасибо за ваш отзыв!');
                    closeModal();
                });
            }
        });