<?php
session_start();
include '../User_input/db_Connection.php';

if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: admin_login.php");
    exit();
}

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if (mysqli_query($connection, $sql)) {
        $success = true;
    } else {
        $error = mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
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
        .user-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .user-table th, .user-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .user-table th {
            background-color: #0D0D0D;
            color: white;
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
        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .back-btn:hover {
            background-color: #5a6268;
        }
        .action-btn {
            padding: 5px 10px;
            margin: 2px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .edit-btn {
            background-color: #ffc107;
            color: black;
        }
        .delete-btn {
            background-color: #dc3545;
            color: white;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: black;
            color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>Manage Users</h1>
            <a href="admin_panel.php" class="back-btn">Back to Admin Panel</a>
            <a href="../User_input/logout.php" class="logout-btn">Logout</a>
            <?php if ($success): ?>
                <p style="color: green;">User updated successfully!</p>
            <?php elseif ($error): ?>
                <p style="color: red;">Error updating user: <?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>
        </div>

        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, name, email, created_at FROM users ORDER BY id ASC";
                $result = mysqli_query($connection, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr id='user-row-" . $row['id'] . "'>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td class='user-name'>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td class='user-email'>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "<td>";
                        echo "<input type='button' class='action-btn edit-btn' onclick='editUser(" . $row['id'] . ", \"" . htmlspecialchars($row['name']) . "\", \"" . htmlspecialchars($row['email']) . "\")' value='Edit'>";
                        echo "<input type='button' class='action-btn delete-btn' onclick='deleteUser(" . $row['id'] . ")' value='Delete'>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No users found.</td></tr>";
                }

                mysqli_close($connection);
                ?>
            </tbody>
        </table>
    </div>

    <!-- User Edit Modal -->
    <div id="userModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('userModal')">&times;</span>
            <h2>Edit User</h2>
            <form id="userForm" method="POST">
                <input type="hidden" id="userId" name="id">
                <div class="form-group">
                    <label for="userName">Name:</label>
                    <input type="text" id="userName" name="name" required>
                </div>
                <div class="form-group">
                    <label for="userEmail">Email:</label>
                    <input type="email" id="userEmail" name="email" required>
                </div>
                <button type="submit" class="action-btn edit-btn">Update User</button>
            </form>
        </div>
    </div>

    <script>
        function editUser(id, name, email) {
            document.getElementById('userId').value = id;
            document.getElementById('userName').value = name;
            document.getElementById('userEmail').value = email;
            document.getElementById('userModal').style.display = 'block';
        }

        function deleteUser(id) {
            if (confirm("Are you sure you want to delete this user?")) {
                const formData = new FormData();
                formData.append('id', id);

                fetch('../User_input/delete_user.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    console.log('Response status:', response.status);
                    console.log('Response headers:', response.headers);
                    return response.text(); // Get text first to debug
                })
                .then(text => {
                    console.log('Response text:', text);
                    try {
                        const data = JSON.parse(text);
                        if (data.success) {
                            // Remove the row from the table
                            const row = document.getElementById('user-row-' + id);
                            row.remove();
                        } else {
                            alert('Error deleting user: ' + data.error);
                        }
                    } catch (e) {
                        console.error('JSON parse error:', e);
                        alert('Server returned invalid response: ' + text);
                    }
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                    alert('Network error: ' + error.message);
                });
            }
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        }
    </script>
</body>
</html>
