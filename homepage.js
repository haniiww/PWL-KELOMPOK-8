let index = 0;

function showSlide(n) {
  const slides = document.querySelector(".slides");
  const dots = document.querySelectorAll(".dot");
  const totalSlides = dots.length;

  if (n >= totalSlides) index = 0;
  if (n < 0) index = totalSlides - 1;

  slides.style.transform = `translateX(${-index * 100}%)`;

  dots.forEach(dot => dot.classList.remove("active"));
  dots[index].classList.add("active");
}

function moveSlide(n) {
  index += n;
  showSlide(index);
}

function currentSlide(n) {
  index = n;
  showSlide(index);
}

// Tampilkan pertama kali
showSlide(index);