<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hardcoded admin credentials
    $admin_email = 'Admin@JEF.com';
    $admin_password = 'Admin1234';

    if ($email === $admin_email && $password === $admin_password) {
        $_SESSION['admin'] = true;
        header("Location: ../pages/admin_panel.php");
        exit();
    } else {
        echo "Invalid admin credentials.";
    }
}
?>
