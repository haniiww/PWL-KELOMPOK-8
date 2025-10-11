var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  loop:true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 150,
    modifier: 2.5,
    slideShadows: true,
  },
  autoplay:{

    delay:3000,
    disableOnInteraction:false,
  }

});

let currentSlide = {
  nowPlaying: 0,
  comingSoon: 0
};

function slideCarousel(carouselId, direction) {
  const carousel = document.getElementById(carouselId);
  const items = carousel.children;
  const itemWidth = 240; // 220px width + 20px gap
  const visibleItems = 4; // Tampilkan 4 poster 
  const maxSlide = Math.max(0, items.length - visibleItems);
  
  currentSlide[carouselId] += direction;
  
  if (currentSlide[carouselId] < 0) {
    currentSlide[carouselId] = 0;
  } else if (currentSlide[carouselId] > maxSlide) {
    currentSlide[carouselId] = maxSlide;
  }
  
  const translateX = -currentSlide[carouselId] * itemWidth;
  carousel.style.transform = `translateX(${translateX}px)`;
}

// Auto-resize handling
window.addEventListener('resize', function() {
  // Reset positions on resize
  Object.keys(currentSlide).forEach(key => {
    currentSlide[key] = 0;
    document.getElementById(key).style.transform = 'translateX(0px)';
  });
});


