<?php
require_once 'db_Connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

    $stmt = $connection->prepare($query);
    $stmt->bind_param('sss', $name, $email, $passwordHashed);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $userId = $connection->insert_id;
        session_start();
        $_SESSION['user_id'] = $userId;
        header("Location: ../pages/homepage.php");
        exit();
    } else {
        echo "Error storing user: " . $stmt->error;
    }
    $stmt->close();
}
?>
