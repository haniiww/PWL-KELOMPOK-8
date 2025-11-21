<?php
session_start();
include '../User_input/db_Connection.php';

if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../assets/css/homepage.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .admin-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .admin-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        .admin-link {
            padding: 15px 30px;
            background-color: black;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
        }
        .admin-link:hover {
            background-color: #333;
        }
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>Welcome to Admin Panel</h1>
            <a href="../User_input/logout.php" class="logout-btn">Logout</a>
        </div>

        <div class="admin-links">
            <a href="manage_users.php" class="admin-link">Manage Users</a>
            <a href="manage_movies.php" class="admin-link">Manage Movies</a>
        </div>
    </div>
</body>
</html>
