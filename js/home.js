const carousel = document.querySelector('.carousel');
        document.getElementById('prevBtn').addEventListener('click', () => {
            carousel.scrollBy({ left: -320, behavior: 'smooth' });
        });
        document.getElementById('nextBtn').addEventListener('click', () => {
            carousel.scrollBy({ left: 320, behavior: 'smooth' });
        });