<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isLoggedIn = isset($_SESSION['user_id']);
if ($isLoggedIn) {
    include 'header_logged_in.php';
} else {
    include 'header_logged_out.php';
}
?>
