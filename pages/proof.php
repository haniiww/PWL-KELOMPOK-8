<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Reservation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/proof.css">
</head><body>
<div class="movie-hero">
  <?php include '../User_input/header.php' ?>

    <div class="movie-container">
        <div class="poster-section">
            <img src="../assets/images/fotohomepage/25DSIC.jpg" alt="Demon Slayer Poster" class="poster-img">
        </div>
        <div class="movie-details">
            <h1 class="movie-title">DEMON SLAYER – KIMETSU NO YAIBA:<br>THE MOVIE: INFINITY CASTLE</h1>
            <div class="payment-container">
                <div class="ticket-info">
                    <h2>AYANI</h2>
                    <hr>

                    <div class="info-row"><span>DATE</span><span>Sunday, 20 August 2025</span></div>
                    <div class="info-row"><span>TIME</span><span>10:30</span></div>
                    <div class="info-row">
                        <span>ROW</span><span>F</span>
                        <span>SEAT</span><span>12</span>
                    </div>
                    <div class="info-row"><span>PRICE</span><span>Rp 70.000,00</span></div>
                </div>

                <div class="qr-section">
                    <img src="../assets/images/QR/image-removebg-preview 1.png" alt="qr.jpg" class="qr-img">
                </div>
            </div>
        </div>       
    </div>
</div>
<div class="steps">
    <button class="step" data-step="1" onclick="window.location.href='reservation.php'">Reservation</button>
    <div class="line"></div>

    <button class="step" data-step="2" onclick="window.location.href='Payment-Method.php'">Payment</button>
    <div class="line"></div>

    <button class="step active" data-step="3" onclick="window.location.href='proof.php'">Proof</button></div>  
    <?php include '../components/footer.php' ?>
</body></html>