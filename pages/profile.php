<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../assets/css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>
<header class="header">
    <nav class="nav-container">
        <a href="index.php" class="logo">
        <img src="../assets/images/header&footer/JEF (2).png" alt="Logo"> Cinema
        </a>

        <ul class="nav-menu" id="navMenu">
        <li><a href="homepage.php" class="nav-link">Home</a></li>
        <li><a href="about_us.php" class="nav-link">About Us</a></li>
        <li><a href="#" class="nav-link">FAQ</a></li>
        </ul>

        <div style="display: flex; align-items: center; gap: 20px;">
        <i class="fa-regular fa-user"></i>
        </div>
    </nav>
</header>

<section class="profile-container">
    <div class="profile-header">
        <div class="profile-pic">
        <img src="../assets/images/fotoprofile/pp.png" alt="Profile Picture" id="profileImage">
        <i class="fa-solid fa-camera change-icon"></i>
        </div>

    <div class="profile-info">
    <h2 id="profileName">
        <?php
        // Assuming user ID is passed via URL, e.g., profile.php?id=1
        if (isset($_GET['id'])) {
            $userId = intval($_GET['id']);
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
            $connection->close();
        } else {
            echo "POPCORN121"; 
        }
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
        <img src="../assets/images/fotoprofile/hugeicons--wallet-01.png" alt="Payment Icon" />
        <div class="menu-text">
        <h3>Payment Methods</h3>
        <p>Manage cards and e-wallets</p>
        </div>
    </div>

    <div class="divider"></div>

    <div class="menu-item">
        <img src="../assets/images/fotoprofile/fluent-emoji-high-contrast--ticket.png" alt="Ticket Icon" />
        <div class="menu-text">
        <h3>My Ticket</h3>
        <p>View your upcoming or active tickets</p>
        </div>
    </div>

    <div class="divider"></div>

    <div class="menu-item">
        <img src="../assets/images/fotoprofile/material-symbols--history.png" alt="History Icon" />
        <div class="menu-text">
        <h3>Booking History</h3>
        <p>Check your previous ticket orders</p>
        </div>
    </div>
    </div>


    <div class="arrangement">
        <h3>Arrangement</h3>
        <div class="arr-item"><i class="fa-solid fa-link"></i> Account Security</div>
        <div class="arr-item"><i class="fa-solid fa-globe"></i> Language</div>
        <div class="arr-item"><i class="fa-solid fa-phone"></i> Support & Feedback</div>
    </div>
</section>

<?php include('../components/footer.php'); ?>

<script src="../assets/js/profile.js"></script>
</body>
</html>