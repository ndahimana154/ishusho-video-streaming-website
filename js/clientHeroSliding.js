let currentSlide = 0;

  function initializeSlides() {
    const slidesContainer = document.querySelector('.slides');
    const slides = document.querySelectorAll('.slide');
    const clonedSlides = Array.from(slides).map((slide) => slide.cloneNode(true));

    slidesContainer.append(...clonedSlides);
  }

  function showSlide(index) {
    const slidesContainer = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length / 2; // Divide by 2

    if (index < 0) {
      index = totalSlides - 1;
    } else if (index >= totalSlides) {
      index = 0;
    }

    currentSlide = index;

    slidesContainer.style.transition = 'transform 0.5s ease-in-out';
    slidesContainer.style.transform = `translateX(${-index * 100}%)`;
  }

  function nextSlide() {
    showSlide(currentSlide + 1);
  }

  function prevSlide() {
    showSlide(currentSlide - 1);
  }

  function handleTransitionEnd() {
    const slidesContainer = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length / 2; // Divide by 2

    slidesContainer.style.transition = 'none';

    if (currentSlide === totalSlides - 1) {
      currentSlide = 0;
    } else if (currentSlide === 0) {
      currentSlide = totalSlides - 1;
    }

    slidesContainer.style.transform = `translateX(${-currentSlide * 100}%)`;

    // Force reflow to apply the transform immediately
    void slidesContainer.offsetWidth;

    slidesContainer.style.transition = 'transform 0.5s ease-in-out';
  }

  initializeSlides();
  document.querySelector('.slides').addEventListener('transitionend', handleTransitionEnd);

  setInterval(nextSlide, 5000);