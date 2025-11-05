<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('../User_input/db_Connection.php');

// Get movie ID from URL
$movie_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch movie details from database
$query = "SELECT * FROM movie_poster WHERE id = $movie_id";
$result = mysqli_query($connection, $query);
$movie = mysqli_fetch_assoc($result);

if (!$movie) {
    die("Movie not found.");
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

  <div class="time-buttons">
    <div class="showtimes">
      <button class="time-btn">10.30</button>
      <button class="time-btn">13.30</button>
      <button class="time-btn">16.30</button>
    </div>
    <a class="continue-btn" id="continueLink" href="reservation.php">CONTINUE</a>
  </div>
</section>

<?php include('../components/footer.php'); ?>
<script src="../assets/js/detail-movie.js"></script>

</body>
</html>