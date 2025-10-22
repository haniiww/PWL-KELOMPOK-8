<?php
require_once 'db_Connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = intval($_POST['user_id']);
    $newName = htmlspecialchars(trim($_POST['new_name']));

    if (empty($newName)) {
        echo json_encode(['success' => false, 'message' => 'Name cannot be empty.']);
        exit();
    }

    if (strlen($newName) > 20) {
        echo json_encode(['success' => false, 'message' => 'Name must be 20 characters or less.']);
        exit();
    }

    $query = "UPDATE users SET name = ? WHERE id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('si', $newName, $userId);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Name updated successfully.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error updating name: ' . $stmt->error]);
    }

    $stmt->close();
    $connection->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
