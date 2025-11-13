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
$error = '';

// Get movie_id, time, seat, day, title, image from URL
$movie_id = isset($_GET['movie_id']) ? intval($_GET['movie_id']) : 0;
$selected_time = isset($_GET['time']) ? htmlspecialchars($_GET['time']) : '';
$selected_seat = isset($_GET['seat']) ? htmlspecialchars($_GET['seat']) : '';
$selected_day = isset($_GET['day']) ? htmlspecialchars($_GET['day']) : '';
$movie_title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '';
$movie_image = isset($_GET['image']) ? htmlspecialchars($_GET['image']) : '';

// Fetch movie details if movie_id is provided
$movie = null;
if ($movie_id > 0) {
    $query = "SELECT * FROM movie_poster WHERE id = $movie_id";
    $result = mysqli_query($connection, $query);
    $movie = mysqli_fetch_assoc($result);
}

// Handle POST for payment method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payment_method = htmlspecialchars($_POST['payment'] ?? '');
    if (empty($payment_method)) {
        $error = "Please select a payment method.";
    } else {
        // Insert into payments
        $insert_query = "INSERT INTO payments (user_id, payment_method) VALUES (?, ?)";
        $stmt = $connection->prepare($insert_query);
        if ($stmt) {
            $stmt->bind_param('is', $user_id, $payment_method);
            if ($stmt->execute()) {
                $stmt->close();
                // Redirect to proof.php with parameters
                header("Location: proof.php?movie_id=$movie_id&time=" . urlencode($selected_time) . "&seat=" . urlencode($selected_seat) . "&day=" . urlencode($selected_day) . "&title=" . urlencode($movie_title) . "&image=" . urlencode($movie_image));
                exit();
            } else {
                $error = "Failed to process payment. Please try again.";
            }
        } else {
            $error = "Database error. Please try again.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Reservation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/Payment-Method.css">
</head><body>
<div class="movie-hero">
  <?php include '../User_input/header.php' ?>

    <div class="movie-container">
        <div class="poster-section">
            <img src="<?php echo $movie_image ? $movie_image : ($movie ? $movie['image_url'] : '../assets/images/fotohomepage/25DSIC.jpg'); ?>" alt="<?php echo $movie_title ? $movie_title : ($movie ? $movie['title'] : 'Demon Slayer'); ?> Poster" class="poster-img">
        </div>
        <div class="movie-details">
            <h1 class="movie-title"><?php echo $movie_title ? $movie_title : ($movie ? $movie['title'] : 'DEMON SLAYER – KIMETSU NO YAIBA:<br>THE MOVIE: INFINITY CASTLE'); ?></h1>
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

                <div class="payment-method">
                    <form method="POST" action="">
                        <h3>Virtual Account</h3>
                        <label class="payment-option">
                            <input type="radio" name="payment" value="mandiri" required>
                            <span class="check-circle"></span> Mandiri Virtual Account
                        </label>

                        <h3>Cards</h3>
                        <label class="payment-option">
                            <input type="radio" name="payment" value="card" required>
                            <span class="check-circle"></span> Credit Card / Debit Card
                        </label>

                        <?php if (!empty($error)): ?>
                            <p style="color: red; margin-top: 10px;"><?php echo $error; ?></p>
                        <?php endif; ?>
                        <button type="submit" class="confirm-btn">Confirm Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="steps">
    <button class="step" data-step="1" onclick="window.location.href='reservation.php'">Reservation</button>
    <div class="line"></div>

    <button class="step active" data-step="2" onclick="window.location.href='Payment-Method.php'">Payment</button>
    <div class="line"></div>

    <button class="step" data-step="3" onclick="window.location.href='proof.php'">Proof</button></div>
    <?php include '../components/footer.php' ?>
</body>
</html>
