<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Proof — Reservation</title>
    <link rel="stylesheet" href="../assets/css/Payment-Method.css">
</head>
<?php
include './header.php';
include 'User_input/db_Connection.php';

// Placeholder for database data
$seat = 'F12';
$price = 'Rp 70.000,00';

// Generate a random QR code data (for demonstration)
$qrData = 'PAYMENT-PROOF-' . rand(100000, 999999);
// Randomize QR code size (square, between 150x150 and 250x250 pixels)
$size = rand(150, 250);
$qrUrl = 'https://chart.googleapis.com/chart?chs=' . $size . 'x' . $size . '&cht=qr&chl=' . urlencode($qrData);
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
                <img src="../assets/images/fotohomepage/25DSIC.jpg" alt="movie poster" />
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

            <!-- Right: QR Code -->
            <div class="pm-payment">
                <h3>Payment Proof</h3>
                <div class="qr-details">
                    <img src="<?php echo $qrUrl; ?>" alt="QR Code" />
                    <p>Scan this QR code to verify your payment.</p>
                </div>
            </div>
        </div>
    </main>

       <!-- Progress Bar -->
        <div class="progress-bar">
            <div class="progress-step">Reservation</div>
            <div class="progress-step">Payment</div>
            <div class="progress-step active">Proof</div>
        </div>

<?php include('../components/footer.php'); ?>
<script src="../assets/js/Payment-Method.js"></script>
</body>
</html>
