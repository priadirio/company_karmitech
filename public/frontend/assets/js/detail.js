document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 3, // Show three slides at a time
      spaceBetween: 20, // Space between slides
      loop: true, // Enable continuous loop mode
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  });