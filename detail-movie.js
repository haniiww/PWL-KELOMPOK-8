document.addEventListener("DOMContentLoaded", () => {
  const dayItems = document.querySelectorAll(".day-item");
  const days = ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"];

  const today = new Date();

  dayItems.forEach((item, index) => {
    const date = new Date();
    date.setDate(today.getDate() + index);

    const dayName = days[date.getDay()];
    const dayNumber = date.getDate();

    if (index === 0) {
      item.innerHTML = `Hari ini<br>${dayNumber}`;
      item.classList.add("active");
    } else {
      item.innerHTML = `${dayName}<br>${dayNumber}`;
      item.classList.remove("active");
    }
  });
});
  
const timeButtons = document.querySelectorAll('.time-btn');

timeButtons.forEach(btn => {
  btn.addEventListener('click', () => {
    timeButtons.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  });
});


document.getElementById("buyTicketBtn").addEventListener("click", function() {
  document.getElementById("schedule").scrollIntoView({
    behavior: "smooth"
  });
});
