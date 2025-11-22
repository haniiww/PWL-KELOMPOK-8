<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header("Location: logIn.php");
    exit();
}

$user_id = $_SESSION['user_id'];
include('../User_input/db_Connection.php');

// Fetch booking history for the logged-in
$query = "SELECT movie_title, show_date, Time, seat_number, payment_method FROM full_reservations WHERE user_id = ? ORDER BY id DESC";
$stmt = $connection->prepare($query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$bookings = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking History</title>
    <link rel="stylesheet" href="../assets/css/profile.css"> <!-- Reuse profile.css for consistency -->
    <style>
        .history-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: rgba(49, 49, 49, 0.75);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            color: #fff;
        }
        .history-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
        }
        th {
            background-color: rgba(0, 0, 0, 0.3);
            color: #fff;
        }
        .no-bookings {
            text-align: center;
            padding: 20px;
            color: #ccc;
        }
    </style>
</head>
<body>
<?php include('../User_input/header.php'); ?>

<section class="history-container">
    <h2>Booking History</h2>
    <?php if (empty($bookings)): ?>
        <p class="no-bookings">No booking history found.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Movie Name</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Seat</th>
                    <th>Payment Method</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookings as $booking): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($booking['movie_title']); ?></td>
                        <td><?php echo htmlspecialchars($booking['show_date']); ?></td>
                        <td><?php echo $booking['Time'] ? htmlspecialchars($booking['Time']) : '-'; ?></td>
                        <td><?php echo htmlspecialchars($booking['seat_number']); ?></td>
                        <td><?php echo htmlspecialchars($booking['payment_method']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</section>

<?php include('../components/footer.php'); ?>
</body>
</html>
                    