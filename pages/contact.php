<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../assets/css/contact.css">
</head>
<body>
<section class="contact-hero">
<?php include('../User_input/header.php'); ?>
  <div class="hero-overlay">
    <h2>Contact Us</h2>
    <p>
      We’re happy to hear from you! Have any questions, feedback, or collaboration ideas? 
      Feel free to reach out through the form below or via our contact details.
    </p>
  </div>
</section>

<section class="contact-main">
  <div class="contact-container">
    <div class="contact-form">
      <h3>Send a Message</h3>
      <p>Fill out the form below to get in touch with us. Our team will get back to you within 1–2 business days.</p>
      <form id="contactForm">
        <input type="email" id="email" placeholder="Email" required>
        <input type="text" id="name" placeholder="Name" required>
        <textarea id="message" rows="4" placeholder="Message" required></textarea>
        <button type="submit" class="submit-btn">Submit</button>
      </form>
    </div>

    <div class="contact-text">
      <h3>Choose Options</h3>
      <p>Choose how you’d like to reach us:</p>

    <div class="contact-options">
      <div class="option-item">
        <img src="../assets/images/contact_us/call.png" alt="Call Icon">
        <span>Call<br>(+62) 821-3371-3267</span>
      </div>
      <div class="option-item">
        <img src="../assets/images/contact_us/email.png" alt="Email Icon">
        <span>Email<br>JEFCinema@gmail.com</span>
      </div>
      <div class="option-item">
        <img src="../assets/images/contact_us/wa.png" alt="WhatsApp Icon">
        <span>WhatsApp<br>(+62) 872-8932-3940</span>
      </div>
      <div class="option-item">
        <img src="../assets/images/contact_us/loc.png" alt="Location Icon">
        <span>Location<br>Pontianak, Kalimantan Barat</span>
      </div>
    </div>
    </div>
  </div>
</section>

<section class="thankyou-banner">
  <div class="banner-overlay">
    <img src="../assets/images/contact_us/logo (2).png" alt="JEF Cinema Logo" class="banner-logo">
    <h2>Thank You for Being Part of JEF Cinema</h2>
    <p>Your support means the world to us.<br>
    Together, let’s keep celebrating the magic of movies across Indonesia.</p>
  </div>
</section>

<div id="popup" class="popup">
  <div class="popup-content">
    <h3>Message Sent!</h3>
    <p>Your message has been delivered to the JEF Cinema team.</p>
    <div class="popup-buttons">
      <button id="cancelBtn" class="popup-btn cancel">Cancel</button>
      <button id="continueBtn" class="popup-btn continue">Continue</button>
    </div>
  </div>
</div>

<?php include('../components/footer.php'); ?>
<script src="../assets/js/contact.js"></script>

</body>
</html>