const slider = document.querySelector('.slider');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const navItems = document.querySelectorAll('.slider-nav-item');
        let currentSlide = 0;

        function goToSlide(n) {
            slider.style.transform = `translateX(-${n * 25}%)`;
            currentSlide = n;
            updateNavItems();
        }

        function nextSlide() {
            goToSlide((currentSlide + 1) % 4);
        }

        function prevSlide() {
            goToSlide((currentSlide - 1 + 4) % 4);
        }

        function updateNavItems() {
            navItems.forEach((item, index) => {
                item.classList.toggle('active', index === currentSlide);
            });
        }

        prevBtn.addEventListener('click', (e) => {
            e.preventDefault();
            prevSlide();
        });

        nextBtn.addEventListener('click', (e) => {
            e.preventDefault();
            nextSlide();
        });

        navItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                goToSlide(index);
            });
        });

        setInterval(nextSlide, 5000);