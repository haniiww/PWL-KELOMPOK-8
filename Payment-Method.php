<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Payment — Reservation</title>
    <link rel="stylesheet" href="Payment-Method.css">
</head>
<?php
include './header.php';
include 'User_input/db_Connection.php';

// Placeholder for database data
$seat = 'F12';
$price = 'Rp 70.000,00';
?>
<body>
    <main class="pm-root">
        <!-- Movie Info Section (like reservation) -->
        <div class="movie-info">
    
            <div class="movie-details">
                <h1>DEMON SLAYER -KIMETSU NO YAIBA- THE MOVIE: INFINITY CASTLE</h1>
            </div>
        </div>


        <!-- Mid Section -->
        <div class="pm-mid">
            <!-- Left: Poster -->
            <div class="pm-poster">
                <img src="fotohomepage/25DSIC.jpg" alt="movie poster" />
            </div>

            <!-- Middle: Ticket Info -->
            <div class="pm-ticket">
                <div class="ticket-header">
                    <h2>AYANI</h2>
                </div>
                <hr class="ticket-separator" />
                <div class="ticket-details">
                    <p><strong>Date:</strong> [Placeholder for Date]</p>
                    <p><strong>Time:</strong> [Placeholder for Time]</p>
                    <p><strong>Row:</strong> <?php echo htmlspecialchars($seat); ?></p>
                    <p><strong>Price:</strong> <?php echo htmlspecialchars($price); ?></p>
                </div>
            </div>

            <!-- Right: Payment Method -->
            <div class="pm-payment">
                <h3>Payment Method</h3>
                <div class="payment-option">
                    <button class="payment-btn active" data-method="virtual"></button>
                    <span class="payment-detail">Mandiri Virtual Account</span>
                </div>
                <div class="payment-option">
                    <button class="payment-btn" data-method="card"></button>
                    <span class="payment-detail">Credit Card / Debit Card</span>
                <button type="button" class="btn primary" id="proceedBtn">Proceed Payment</button>
            </div>
        </div>
    </main>

       <!-- Progress Bar -->
        <div class="progress-bar">
            <div class="progress-step">Reservation</div>
            <div class="progress-step active">Payment</div>
            <div class="progress-step">Proof</div>
        </div>

    <script src="Payment-Method.js"></script>
    <?php include './footer.php' ?>
</body>
</html>
