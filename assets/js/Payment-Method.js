(function(){
  const DURATION = 420; // must match --dur in CSS
  const body = document.body;
});

  // animate page in on load
  window.addEventListener('load', ()=> {
    requestAnimationFrame(()=> {
      body.classList.remove('is-entering');
      body.classList.add('is-entered');
    });
  });

  function navigateWithSlide(url){
    if(!url) return;
    body.classList.remove('is-entered');
    body.classList.add('is-exiting');
    setTimeout(()=> window.location.href = url, DURATION);
  }

  // intercept links/buttons with attributes
  document.addEventListener('click', function(e){
    const a = e.target.closest('a[data-transition]');
    if(a){
      e.preventDefault();
      navigateWithSlide(a.href);
      return;
    }
    const btn = e.target.closest('button[data-target]');
    if(btn){
      e.preventDefault();
      navigateWithSlide(btn.getAttribute('data-target'));
      return;
    }
  });

  // optional: intercept forms with class 'transition-form'
  document.addEventListener('submit', function(e){
    const form = e.target;
    if(form.classList && form.classList.contains('transition-form')){
      e.preventDefault();
      // if you need to submit via POST use fetch/AJAX; here we just animate then navigate to action
      navigateWithSlide(form.action || window.location.href);
    }
  });

  // Payment method selection
  const paymentBtns = document.querySelectorAll('.payment-btn');
  const proceedBtn = document.getElementById('proceedBtn');

  paymentBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      // Remove active class from all buttons
      paymentBtns.forEach(b => b.classList.remove('active'));
      // Add active class to clicked button
      btn.classList.add('active');
    });
  });

  if (proceedBtn) {
    proceedBtn.addEventListener('click', () => {
      const confirmed = confirm('Are you sure with this transaction?');
      if (confirmed) {
        // Navigate to proof page
        navigateWithSlide('proof.php');
      }});
  }
