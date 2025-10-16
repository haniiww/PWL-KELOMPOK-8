<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>FAQ - JEF Cinema</title>
    <link rel="stylesheet" href="FAQ.css" />
</head>
<body>
    <?php include './header.php' ?>
    <div class="container">
        <div class="overlay">
            <main class="faq-section">
                <h1>Frequently Asked Question</h1>

                <div class="search-box">
                    <img src="fotohomepage/tombolsearch.png" alt="search" class="search-icon">
                    <input id="faq-search" type="text" placeholder="What is your problem ?" />
                </div>

                <div class="accordion" id="faq-list">
                    <div class="accordion-item">
                        <button class="question">
                            How to use JEF Cinema?
                            <span class="chev"></span>
                        </button>
                        <div class="answer">
                            <p>Download the app or use the website to browse movies, select showtime, pick seats and pay online.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="question">
                            How do I cancel reservation?
                            <span class="chev"></span>
                        </button>
                        <div class="answer">
                            <p>Open your booking, choose cancel (if allowed by the show policy) or contact support for assistance.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="question">
                            How to change payment method?
                            <span class="chev"></span>
                        </button>
                        <div class="answer">
                            <p>Before confirming payment you can switch the method on the payment page. After payment, contact support.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="question">
                            About Ticket
                            <span class="chev"></span>
                        </button>
                        <div class="answer">
                            <p>Tickets are e-tickets. Bring your QR or order number to the counter for scanning.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="question">
                            About Foodiez
                            <span class="chev"></span>
                        </button>
                        <div class="answer">
                            <p>Foodiez lets you pre-order snacks. Select food in your booking or order at the counter.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="question">
                            How to scan the E-ticket?
                            <span class="chev"></span>
                        </button>
                        <div class="answer">
                            <p>Open your e-ticket on mobile and present the QR at entrance scanner. Keep the screen brightness up.</p>
                        </div>
                    </div>
                </div>
            </main>

            <?php include './footer.php' ?>
        </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // accordion toggle
  document.querySelectorAll('.accordion .question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.parentElement;
      const open = item.classList.toggle('open');
      // close siblings
      if (open) {
        document.querySelectorAll('.accordion .accordion-item.open').forEach(sib => {
          if (sib !== item) sib.classList.remove('open');
        });
      }
    });
  });

  // simple search filter
  const search = document.getElementById('faq-search');
  search.addEventListener('input', () => {
    const q = search.value.trim().toLowerCase();
    document.querySelectorAll('.accordion .accordion-item').forEach(item => {
      const txt = item.querySelector('.question').innerText.toLowerCase() + ' ' + item.querySelector('.answer').innerText.toLowerCase();
      item.style.display = q === '' || txt.includes(q) ? '' : 'none';
    });
  });
});
</script>
</body>
</html>