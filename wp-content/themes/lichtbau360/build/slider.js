const slides = document.querySelectorAll('.slides .slide');
const sliderPagination = document.querySelectorAll('.slider-pagi__elem');
let slideIndex = 0;
let intervalId = null;

const initializeSlider = () => {
  if (slides.length > 0) {
    slides[slideIndex].classList.add('displaySlide');
    sliderPagination[slideIndex].classList.add('active');
    intervalId = setInterval(nextSlide, 5000);
  }
};

document.addEventListener('DOMContentLoaded', initializeSlider);

const showSlide = (index) => {
  if (index >= slides.length) {
    slideIndex = 0;
  } else if (index < 0) {
    slideIndex = slides.length - 1;
  }

  slides.forEach((slide) => {
    slide.classList.remove('displaySlide');
  });
  sliderPagination.forEach((pagination) => {
    pagination.classList.remove('active');
  });

  slides[slideIndex].classList.add('displaySlide');
  sliderPagination[slideIndex].classList.add('active');
};

const nextSlide = () => {
  slideIndex++;
  showSlide(slideIndex);
};

const previousSlide = () => {
  clearInterval(intervalId);
  slideIndex--;
  showSlide(slideIndex);
};
