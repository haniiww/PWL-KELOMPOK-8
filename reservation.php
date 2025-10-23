<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Reservation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reservation.css">
</head>
<body>
    <div class="background-top"></div>
    <div class="background-bottom"></div>
    <?php include './header.php' ?>
    <div class="container">
        <div class="movie-info">
            <div class="movie-poster">
                <img src="fotohomepage/25DSIC.jpg" alt="">
            </div>
            <div class="movie-details">
                <h1>DEMON SLAYER -KIMETSU NO YAIBA- THE MOVIE: INFINITY CASTLE</h1>
            </div>
        </div>

        <div class="seat-layout">
            <div class="screen">SCREEN</div>
            <div class="seats">
                <?php
                $rows = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
                foreach ($rows as $row) {
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<div class='seat available' data-seat='$row$i'>$row$i</div>";
                    }
                }
                ?>
            </div>

            <div class="legend">
                <div class="legend-item">
                    <div class="seat available"></div>
                    <span>Available</span>
                </div>
                <div class="legend-item">
                    <div class="seat selected"></div>
                    <span>Selected</span>
                </div>
                <div class="legend-item">
                    <div class="seat taken"></div>
                    <span>Taken</span>
                </div>
            </div>
        </div>

        <div class="progress-bar">
            <div class="progress-step">Reservation</div>
            <div class="progress-step">Payment</div>
            <div class="progress-step">Proof</div>
        </div>

        <form id="reservationForm" action="payment.php" method="POST">
            <input type="hidden" name="selected_seats" id="selected_seats">
            <button type="submit" style="padding: 10px 20px; background: #000; color: white; border: none; cursor: pointer;">
                Continue to Payment
            </button>
        </form>
    </div>

    <script>
        document.querySelectorAll('.seat.available').forEach(seat => {
            seat.addEventListener('click', function() {
                this.classList.toggle('selected');
                updateSelectedSeats();
            });
        });

        function updateSelectedSeats() {
            const selectedSeats = Array.from(document.querySelectorAll('.seat.selected'))
                .map(seat => seat.dataset.seat);
            document.getElementById('selected_seats').value = JSON.stringify(selectedSeats);
        }
    </script>

    <?php include './footer.php' ?>
</body>
</html>