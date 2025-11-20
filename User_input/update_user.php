<?php
session_start();
include 'db_Connection.php';

header('Content-Type: application/json');

if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    echo json_encode(['success' => false, 'error' => 'Unauthorized']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if (mysqli_query($connection, $sql)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => mysqli_error($connection)]);
    }

    mysqli_close($connection);
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method']);
}
?>
