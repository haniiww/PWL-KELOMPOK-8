<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$userName = '';
if (isset($_SESSION['user_id'])) {
    require_once '../User_input/db_Connection.php';
    $query = "SELECT name FROM users WHERE id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('i', $_SESSION['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $userName = htmlspecialchars($user['name']);
    }
    $stmt->close();
}
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    color: white;
    font-family: 'Poppins';
}

.header {
    padding: 15px 0;
}

.nav-container {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 70px;
}

.logo {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: white;
    font-size: 20px;
    font-weight: bold;
    height: 55px;
}

.logo img {
    width: 35px;
    height: 35px;
    object-fit: contain;
    border-radius: 8px;
    margin-bottom: 18px;
    vertical-align: middle;
}

.nav-menu {
    display: flex;
    list-style: none;
    gap: 30px;
    margin: 0;
    padding: 0;
}

.nav-link {
    color: white;
    text-decoration: none;
    font-size: 16px;
    padding: 8px 12px;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
    transform: translateY(-2px);
}



.right-side {
    display: flex;
    align-items: center;
    gap: 30px;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 15px;
}

.user-info img {
    color: white;
    text-decoration: none;
    width: auto;
    height: 30px;
}

.user-name {
    color: white;
    font-size: 16px;
    font-weight: 600;
    margin-right: 10px;
}


</style>

<header class="header">
    <nav class="nav-container">
        <a href="../pages/homepage.php" class="logo">
            <img src="../assets/images/header&footer/JEF (2).png" alt="Logo">
            Cinema
        </a>

        <div class="right-side">
            <ul class="nav-menu" id="navMenu">
                <li><a href="../pages/homepage.php" class="nav-link">Home</a></li>
                <li><a href="../pages/about-us.php" class="nav-link">About Us</a></li>
                <li><a href="../pages/FAQ.php" class="nav-link">FAQ</a></li>
            </ul>

            <div class="user-info">
                <a href="../pages/profile.php"><img src="../assets/images/header&footer/Untitled__10__page-0001-removebg-preview.png" alt="Profile"></a>
            </div>
    </nav>
</header>
