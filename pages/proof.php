<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('../User_input/db_Connection.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/logIn.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Get movie_id, time, seat, day, title, image from URL
$movie_id = isset($_GET['movie_id']) ? intval($_GET['movie_id']) : 0;
$selected_time = isset($_GET['time']) ? htmlspecialchars($_GET['time']) : '';
$selected_seat = isset($_GET['seat']) ? htmlspecialchars($_GET['seat']) : '';
$selected_day = isset($_GET['day']) ? htmlspecialchars($_GET['day']) : '';
$movie_title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '';
$movie_image = isset($_GET['image']) ? htmlspecialchars($_GET['image']) : '';


?>
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
            <img src="<?php echo $movie_image ?: '../assets/images/fotohomepage/25DSIC.jpg'; ?>" alt="<?php echo $movie_title ?: 'Demon Slayer'; ?> Poster" class="poster-img">
        </div>
        <div class="movie-details">
            <h1 class="movie-title"><?php echo $movie_title ?: 'DEMON SLAYER – KIMETSU NO YAIBA:<br>THE MOVIE: INFINITY CASTLE'; ?></h1>
            <div class="payment-container">
                <div class="ticket-info">
                    <h2>AYANI</h2>
                    <hr>

                    <div class="info-row"><span>DATE</span><span><?php echo $selected_day ? $selected_day : 'Sunday, 20 August 2025'; ?></span></div>
                    <div class="info-row"><span>TIME</span><span><?php echo $selected_time ? $selected_time : '10:30'; ?></span></div>
                    <div class="info-row">
                        <span>ROW</span><span><?php echo $selected_seat ? substr($selected_seat, 0, 1) : 'F'; ?></span>
                        <span>SEAT</span><span><?php echo $selected_seat ? substr($selected_seat, 1) : '12'; ?></span>
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

    <button class="step" data-step="2" onclick="window.location.href='payment-method.php'">Payment</button>
    <div class="line"></div>

    <button class="step active" data-step="3" onclick="window.location.href='proof.php'">Proof</button></div>  
    <?php include '../components/footer.php' ?>
</body></html>