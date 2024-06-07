let currentIndex = 0;
const slides = document.querySelectorAll('.carousel-slide img');
const indicators = document.querySelectorAll('.indicator');
const totalSlides = slides.length;
const carouselSlide = document.querySelector('.carousel-slide');

let startX = 0;
let endX = 0;

function updateCarousel() {
    const slideWidth = document.querySelector('.carousel-container').clientWidth;
    carouselSlide.style.transform = `translateX(${-currentIndex * slideWidth}px)`;

    indicators.forEach((indicator, index) => {
        if (index === currentIndex) {
            indicator.classList.add('active');
        } else {
            indicator.classList.remove('active');
        }
    });
}

function showNextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
}

function showPrevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
}

function handleTouchStart(event) {
    startX = event.touches[0].clientX;
}

function handleTouchMove(event) {
    endX = event.touches[0].clientX;
}

function handleTouchEnd() {
    if (startX > endX + 50) {
        showNextSlide();
    } else if (startX < endX - 50) {
        showPrevSlide();
    }
}

indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        currentIndex = index;
        updateCarousel();
    });
});

carouselSlide.addEventListener('touchstart', handleTouchStart);
carouselSlide.addEventListener('touchmove', handleTouchMove);
carouselSlide.addEventListener('touchend', handleTouchEnd);

setInterval(showNextSlide, 9000);

window.addEventListener('resize', updateCarousel);

updateCarousel();