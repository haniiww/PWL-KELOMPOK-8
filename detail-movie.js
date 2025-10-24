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
(function(){
  const continueLink = document.getElementById('continueLink');
  if (!continueLink) return;

  continueLink.addEventListener('click', function(e){
    e.preventDefault();

    // selected day
    const activeDay = document.querySelector('.day-item.active');
    const dayText = activeDay ? activeDay.textContent.replace(/\s+/g,' ').trim() : '';

    // selected time (prefer .active, fallback to first button)
    const activeTimeBtn = document.querySelector('.time-btn.active') || document.querySelector('.time-btn');
    let selectedTime = '';
    if (activeTimeBtn) {
      selectedTime = activeTimeBtn.dataset.time || activeTimeBtn.textContent.trim();
      // normalize "10.30" -> "10:30"
      selectedTime = selectedTime.replace(/\./g, ':');
    }

    const params = new URLSearchParams();
    if (dayText) params.set('day', dayText);
    if (selectedTime) params.set('time', selectedTime);

    window.location.href = 'reservation.php?' + params.toString();
  });
})();