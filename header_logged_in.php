<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$userName = '';
if (isset($_SESSION['user_id'])) {
    require_once 'User_input/db_Connection.php';
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

.menu-kanan {
    display: flex;
    align-items: center;
    gap: 20px;
}

.menu a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    padding: 8px 12px;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.menu a:hover {
    background-color: rgba(255, 255, 255, 0.1);
    transform: translateY(-2px);
}

.tombol-auth {
    display: flex;
    gap: 15px;
    margin-right: 10px;
}

.btn {
    padding: 8px 18px;
    border-radius: 100px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    border: 2px solid white;
    background-color: transparent;
    color: white;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: rgba(255, 255, 255, 0.15);
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

.logout-btn {
    background-color: transparent;
    border: 2px solid white;
    color: white;
    padding: 8px 18px;
    border-radius: 100px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.logout-btn:hover {
    background-color: rgba(255, 255, 255, 0.15);
}
</style>

<header class="header">
    <nav class="nav-container">
        <a href="homepage.php" class="logo">
            <img src="header&footer/JEF (2).png" alt="Logo">
            Cinema
        </a>

        <div class="right-side">
            <ul class="nav-menu" id="navMenu">
                <li><a href="homepage.php" class="nav-link">Home</a></li>
                <li><a href="about_us.php" class="nav-link">About Us</a></li>
                <li><a href="#" class="nav-link">FAQ</a></li>
            </ul>

            <div class="user-info">
                <a href="profile.php"><img src="header&footer/Untitled__10__page-0001-removebg-preview.png" alt="Profile"></a>
            </div>
        </div>
    </nav>
</header>
