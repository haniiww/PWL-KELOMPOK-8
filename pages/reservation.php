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

// Get movie_id, time, and day from URL
$movie_id = isset($_GET['movie_id']) ? intval($_GET['movie_id']) : 0;
$selected_time = isset($_GET['time']) ? htmlspecialchars($_GET['time']) : '';
$selected_day = isset($_GET['day']) ? htmlspecialchars($_GET['day']) : '';

// Fetch movie details
$query = "SELECT * FROM movie_poster WHERE id = $movie_id";
$result = mysqli_query($connection, $query);
$movie = mysqli_fetch_assoc($result);

if (!$movie) {
    die("Movie not found.");
}

// Handle POST for confirming seat
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selected_seat = htmlspecialchars($_POST['selected_seat']);
    if (!empty($selected_seat)) {
        // Update full_reservations with seat_number
        $update_query = "UPDATE full_reservations SET seat_number = ? WHERE user_id = ? AND movie_id = ? AND show_date = ?";
        $stmt = $connection->prepare($update_query);
        $stmt->bind_param('siis', $selected_seat, $user_id, $movie_id, $selected_time);
        $stmt->execute();
        $stmt->close();
        // Redirect to Payment-Method.php with movie_id, time, seat, day, title, image
        header("Location: Payment-Method.php?movie_id=$movie_id&time=" . urlencode($selected_time) . "&seat=" . urlencode($selected_seat) . "&day=" . urlencode($selected_day) . "&title=" . urlencode($movie['title']) . "&image=" . urlencode($movie['image_url']));
        exit();
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
    <link rel="stylesheet" href="../assets/css/reservation.css">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const seats = document.querySelectorAll('.seat');
            const selectedSeatInput = document.getElementById('selectedSeat');
            let selectedSeat = null;

            seats.forEach(seat => {
                seat.addEventListener('click', function() {
                    if (this.classList.contains('selected')) {
                        // Deselect
                        this.classList.remove('selected');
                        selectedSeat = null;
                        selectedSeatInput.value = '';
                    } else {
                        // Deselect previous
                        if (selectedSeat) {
                            selectedSeat.classList.remove('selected');
                        }
                        // Select new
                        this.classList.add('selected');
                        selectedSeat = this;
                        selectedSeatInput.value = this.getAttribute('data-seat');
                    }
                });
            });
        });
    </script>
</head>
<body>
<div class="movie-hero">
  <?php include('../User_input/header.php'); ?>


    <div class="movie-container">
        <div class="poster-section">
            <img src="<?php echo $movie['image_url']; ?>" alt="<?php echo $movie['title']; ?> Poster" class="poster-img">
        </div>
        <div class="movie-details">
            <h1 class="movie-title"><?php echo $movie['title']; ?></h1>
            <div class="screen">SCREEN</div>
            <form id="seatForm" action="" method="POST">
                <input type="hidden" name="selected_seat" id="selectedSeat" value="">
                <div class="chair">
                    <div class="row">
                        <span>J</span>
                        <?php for($i=1; $i<=26; $i++): ?>
                            <button type="button" class="seat" data-seat="J<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php endfor; ?>
                        <span>J</span>
                    </div>
                    <div class="row">
                        <span>I</span>
                        <?php for($i=1; $i<=26; $i++): ?>
                            <button type="button" class="seat" data-seat="I<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php endfor; ?>
                        <span>I</span>
                    </div>
                    <div class="row">
                        <span>H</span>
                        <?php for($i=1; $i<=26; $i++): ?>
                            <button type="button" class="seat" data-seat="H<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php endfor; ?>
                        <span>H</span>
                    </div>
                    <div class="row">
                        <span>G</span>
                        <?php for($i=1; $i<=26; $i++): ?>
                            <button type="button" class="seat" data-seat="G<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php endfor; ?>
                        <span>G</span>
                    </div>
                    <div class="row">
                        <span>F</span>
                        <?php for($i=1; $i<=26; $i++): ?>
                            <button type="button" class="seat" data-seat="F<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php endfor; ?>
                        <span>F</span>
                    </div>
                    <div class="row">
                        <span>E</span>
                        <?php for($i=1; $i<=26; $i++): ?>
                            <button type="button" class="seat" data-seat="E<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php endfor; ?>
                        <span>E</span>
                    </div>
                    <div class="row">
                        <span>D</span>
                        <?php for($i=1; $i<=26; $i++): ?>
                            <button type="button" class="seat" data-seat="D<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php endfor; ?>
                        <span>D</span>
                    </div>
                    <div class="row">
                        <span>C</span>
                        <?php for($i=1; $i<=26; $i++): ?>
                            <button type="button" class="seat" data-seat="C<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php endfor; ?>
                        <span>C</span>
                    </div>
                    <div class="row">
                        <span>B</span>
                        <?php for($i=1; $i<=26; $i++): ?>
                            <button type="button" class="seat" data-seat="B<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php endfor; ?>
                        <span>B</span>
                    </div>
                    <div class="row">
                        <span>A</span>
                        <?php for($i=1; $i<=26; $i++): ?>
                            <button type="button" class="seat" data-seat="A<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php endfor; ?>
                        <span>A</span>
                    </div>
                </div>
                <button type="submit" class="confirm-btn">Confirm Seat</button>
            </form>
            <div class="details" id="det">
               <div class="details_chair">
                    <li>Selected</li>
                    <li>Available</li>
                    <li>Taken</li>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="steps">
    <button class="step active" data-step="1" onclick="window.location.href='reservation.php'">Reservation</button>
    <div class="line"></div>

    <button class="step" data-step="2" onclick="window.location.href='payment.php'">Payment</button>
    <div class="line"></div>

    <button class="step" data-step="3" onclick="window.location.href='proof.php'">Proof</button>
</div>
<?php include('../components/footer.php'); ?>
</body>
</html>
