<?php
require_once 'db_Connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT id, password FROM users WHERE email = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: ../profile.php?id=" . $user['id']);
            exit();
        } else {
            header("Location: ../logIn.php?error=1");
            exit();
        }
    } else {
        header("Location: ../logIn.php?error=1");
        exit();
    }
    $stmt->close();
}
?>
