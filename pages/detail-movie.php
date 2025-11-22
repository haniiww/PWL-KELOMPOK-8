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

// Get movie ID from URL
$movie_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch movie details from database
$query = "SELECT * FROM movie_poster WHERE id = $movie_id";
$result = mysqli_query($connection, $query);
$movie = mysqli_fetch_assoc($result);

if (!$movie) {
    die("Movie not found.");
}

// Handle POST for selecting time and continuing
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selected_time = htmlspecialchars($_POST['selected_time']);
    if (!empty($selected_time)) {
        // Insert into full_reservations
        $insert_query = "INSERT INTO full_reservations (user_id, movie_id, movie_title, show_date, Time) VALUES (?, ?, ?, ?, NOW())";
        $stmt = $connection->prepare($insert_query);
        $stmt->bind_param('iiss', $user_id, $movie_id, $movie['title'], $selected_time);
        $stmt->execute();
        $stmt->close();
        // Redirect to reservation.php with movie_id and time
        header("Location: reservation.php?movie_id=$movie_id&time=" . urlencode($selected_time));
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Movie</title>
    <link rel="stylesheet" href="../assets/css/detail-movie.css">
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
      <p class="movie-desc">
        <?php echo $movie['description']; ?>
      </p>
      <button class="buy-btn" id="buyTicketBtn">BUY TICKET</button>
    </div>
  </div>
</div>

<section class="schedule-section"  id="schedule">
  <div class="schedule-container">
    <div class="day-list">
      <div class="day-item active">Hari ini<br>23</div>
      <div class="day-item">Jum<br>24</div>
      <div class="day-item">Sab<br>25</div>
      <div class="day-item">Min<br>26</div>
      <div class="day-item">Sen<br>27</div>
      <div class="day-item">Sel<br>28</div>
      <div class="day-item">Rab<br>29</div>
    </div>

    <div class="movie-info">
      Regular 2D | Rp70.000
    </div>

  <form method="POST" action="">
    <div class="time-buttons">
      <div class="showtimes">
        <button type="button" class="time-btn" data-time="10.30">10.30</button>
        <button type="button" class="time-btn" data-time="13.30">13.30</button>
        <button type="button" class="time-btn" data-time="16.30">16.30</button>
      </div>
      <input type="hidden" name="selected_time" id="selectedTime" value="">
      <button type="submit" class="continue-btn">CONTINUE</button>
    </div>
  </form>
</section>

<?php include('../components/footer.php'); ?>
<script src="../assets/js/detail-movie.js"></script>
</body>
</html>