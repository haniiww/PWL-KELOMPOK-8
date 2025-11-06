const form = document.getElementById("contactForm");
const popup = document.getElementById("popup");
const cancelBtn = document.getElementById("cancelBtn");
const continueBtn = document.getElementById("continueBtn");

// Saat form disubmit, munculkan popup
form.addEventListener("submit", (e) => {
  e.preventDefault();
  popup.classList.add("show");
});

// Tutup popup saat klik Cancel
cancelBtn.addEventListener("click", () => {
  popup.classList.remove("show");
});

// Tutup popup + reset form saat klik Continue
continueBtn.addEventListener("click", () => {
  popup.classList.remove("show");
  form.reset();
});
