<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header("Location: logIn.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>
<?php include './header.php' ?>

<section class="profile-container">
    <div class="profile-header">
        <div class="profile-pic">
        <img src="fotoprofile/pp.png" alt="Profile Picture" id="profileImage">
        <i class="fa-solid fa-camera change-icon"></i>
        </div>

    <div class="profile-info">
    <h2 id="profileName">
        <?php
        $userId = $_SESSION['user_id'];
        require_once 'User_input/db_Connection.php';
        $query = "SELECT name FROM users WHERE id = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('i', $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            echo htmlspecialchars($user['name']);
        } else {
            echo "User not found";
        }
        $stmt->close();
        ?>
        <i class="fa-solid fa-pen edit-btn" id="editNameBtn"></i>
    </h2>
    <p>6288242857370</p>
    </div>


    <div class="popup" id="popup">
    <div class="popup-content">
        <h3>Edit Profile Name</h3>
        <input type="text" id="newName" placeholder="Enter new name" maxlength="20">
        <div class="popup-buttons">
        <button id="saveName">Save</button>
        <button id="cancelPopup">Cancel</button>
        </div>
    </div>
    </div>
    </div>

    <div class="menu-container">
    <div class="menu-item">
        <img src="fotoprofile/hugeicons--wallet-01.png" alt="Payment Icon" />
        <div class="menu-text">
        <h3>Payment Methods</h3>
        <p>Manage cards and e-wallets</p>
        </div>
    </div>

    <div class="divider"></div>

    <div class="menu-item">
        <img src="fotoprofile/fluent-emoji-high-contrast--ticket.png" alt="Ticket Icon" />
        <div class="menu-text">
        <h3>My Ticket</h3>
        <p>View your upcoming or active tickets</p>
        </div>
    </div>

    <div class="divider"></div>

    <div class="menu-item">
        <img src="fotoprofile/material-symbols--history.png" alt="History Icon" />
        <div class="menu-text">
        <h3>Booking History</h3>
        <p>Check your previous ticket orders</p>
        </div>
    </div>
    </div>


</section>

<?php include './footer.php' ?>

<script>
    const userId = <?php echo $_SESSION['user_id']; ?>;
</script>
<script src="profile.js"></script>
</body>
</html>
