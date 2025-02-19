
class Slider {
    constructor() {
        this.container = document.querySelector('.slider-container');
        this.slider = document.querySelector('.cert-slider');
        this.cursor = document.querySelector('.custom-cursor');
        this.slideWidth = window.getComputedStyle(document.querySelectorAll('.slide')[0], null).getPropertyValue("width");
        this.divs = document.querySelectorAll('.cert-slider .slide');
        this.left_arrow = document.querySelector('.nav-arrow-left');
        this.right_arrow = document.querySelector('.nav-arrow-right');

        // Start from the second slide
        this.currentIndex = 1;

        this.init();
    }

    init() {
        this.setupEventListeners();
        this.positionSlides();
    }

    positionSlides() {
        const slides = this.slider.querySelectorAll('.slide');
        const newWidth = Number(this.slideWidth.slice(0, -2));
        const offset = (this.container.offsetWidth - newWidth) / 2;
        const baseTransform = -this.currentIndex * newWidth + offset;

        this.slider.style.transform = `translateX(${baseTransform + 20}px)`;

        slides.forEach((slide, index) => {
            const normalizedIndex = this.normalizeIndex(index);
            slide.classList.toggle('active', normalizedIndex === this.currentIndex % this.divs.length);
        });

        this.updateArrowColors();
    }
    normalizeIndex(index) {
        return index % this.divs.length;
    }
    moveSlides(direction) {
        if (this.isAnimating) return;
        this.isAnimating = true;
        if (direction === 1 && this.currentIndex >= this.divs.length - 1) {
            this.isAnimating = false;
            return;
        }

        if (direction === -1 && this.currentIndex <= 0) {
            this.isAnimating = false;
            return;
        }
        this.currentIndex += direction;
        this.slider.style.transition = 'transform 0.3s ease-out';
        this.positionSlides();
        if (this.currentIndex >= this.divs.length || this.currentIndex < 0) {
            setTimeout(() => {
                this.slider.style.transition = 'none';
                this.currentIndex = Math.max(0, Math.min(this.divs.length - 1, this.currentIndex));
                this.positionSlides();
            }, 300);
        }
        setTimeout(() => {
            this.isAnimating = false;
        }, 300);
    }
    setupEventListeners() {
        this.container.addEventListener('mouseenter', () => {
            this.cursor.style.opacity = '1';
            this.stopAutoplay();
        });
        this.container.addEventListener('mouseleave', () => {
            this.cursor.style.opacity = '0';
            this.startAutoplay();
        });
        window.addEventListener('resize', () => {
            this.positionSlides()
        });
        if (this.left_arrow) {
            this.left_arrow.addEventListener('click', () => this.moveSlides(-1));
        }
        if (this.right_arrow) {
            this.right_arrow.addEventListener('click', () => this.moveSlides(1));
        }
    }
    startAutoplay() {
        this.stopAutoplay();
        this.autoplayInterval = setInterval(() => {
            this.moveSlides(1);
        }, 3000);
    }
    stopAutoplay() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
        }
    }
    updateArrowColors() {
        const leftSvg = this.left_arrow.querySelector('svg');
        const rightSvg = this.right_arrow.querySelector('svg');

        if (this.currentIndex === 0) {
            this.left_arrow.classList.remove('blue');
            this.right_arrow.classList.remove('gray');
            this.left_arrow.classList.add('gray');
            this.right_arrow.classList.add('blue');
            leftSvg.style.fill = '#454545';
            rightSvg.style.fill = '#0092f3';
        } else if (this.currentIndex === this.divs.length - 1) {
            this.left_arrow.classList.remove('gray');
            this.right_arrow.classList.remove('blue');
            this.left_arrow.classList.add('blue');
            this.right_arrow.classList.add('gray');
            leftSvg.style.fill = '#0092f3';
            rightSvg.style.fill = '#454545';
        } else {
            this.left_arrow.classList.remove('gray');
            this.right_arrow.classList.remove('gray');
            this.left_arrow.classList.add('blue');
            this.right_arrow.classList.add('blue');
            leftSvg.style.fill = '#0092f3';
            rightSvg.style.fill = '#0092f3';
        }
    }
}
document.addEventListener('DOMContentLoaded', () => {
    new Slider();
});