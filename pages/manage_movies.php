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
    <title>Manage Movies</title>
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
        .movie-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .movie-table th, .movie-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .movie-table th {
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
        .add-btn {
            background-color: black;
            color: white;
            padding: 10px 20px;
            margin-bottom: 20px;
        }
        .add-btn:hover {
            background-color: #333;
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
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: black;
            color: white;
        }
        .form-group label {
            color: white;
        }
        h2 {
            color: white;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>Manage Movies</h1>
            <a href="admin_panel.php" class="back-btn">Back to Admin Panel</a>
            <a href="../User_input/logout.php" class="logout-btn">Logout</a>
        </div>

        <button class="add-btn" onclick="openModal('add')">Add New Movie</button>

        <table class="movie-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image URL</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, title, description, image_url, status FROM movie_poster ORDER BY id ASC";
                $result = mysqli_query($connection, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                        echo "<td>" . htmlspecialchars(substr($row['description'], 0, 100)) . "...</td>";
                        echo "<td>" . htmlspecialchars($row['image_url']) . "</td>";
                        echo "<td>" . ucfirst($row['status']) . "</td>";
                        echo "<td>";
                        echo "<button class='action-btn edit-btn' onclick='editMovie(" . $row['id'] . ", \"" . htmlspecialchars($row['title']) . "\", \"" . htmlspecialchars($row['description']) . "\", \"" . htmlspecialchars($row['image_url']) . "\")'>Edit</button>";
                        $action = ($row['status'] == 'active') ? 'Deactivate' : 'Activate';
                        echo "<a href='../User_input/toggle_movie_status.php?id=" . $row['id'] . "' class='action-btn delete-btn' onclick='return confirm(\"Are you sure you want to $action this movie?\")'>$action</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No movie posters found.</td></tr>";
                }

                mysqli_close($connection);
                ?>
            </tbody>
        </table>
    </div>

    <!-- Movie Modal -->
    <div id="movieModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('movieModal')">&times;</span>
            <h2 id="movieModalTitle">Add/Edit Movie</h2>
            <form id="movieForm" method="POST" enctype="multipart/form-data" action="">
                <input type="hidden" id="movieId" name="id">
                <div class="form-group">
                    <label for="movieTitle">Title:</label>
                    <input type="text" id="movieTitle" name="title" required>
                </div>
                <div class="form-group">
                    <label for="movieDescription">Description:</label>
                    <textarea id="movieDescription" name="description" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="movieImage">Upload Image:</label>
                    <input type="file" id="movieImage" name="image" accept="image/*" required>
                </div>
                <button type="submit" class="action-btn edit-btn" id="movieSubmitBtn">Add Movie</button>
            </form>
        </div>
    </div>

    <script>
        function editMovie(id, title, description, imageUrl) {
            document.getElementById('movieId').value = id;
            document.getElementById('movieTitle').value = title;
            document.getElementById('movieDescription').value = description;
            // Note: imageUrl is not set for file input
            document.getElementById('movieImage').required = false; // Make optional for edit
            document.getElementById('movieForm').action = '../User_input/update_movie.php';
            document.getElementById('movieModalTitle').textContent = 'Edit Movie';
            document.getElementById('movieSubmitBtn').textContent = 'Update Movie';
            document.getElementById('movieModal').style.display = 'block';
        }

        function openModal(type) {
            if (type === 'add') {
                document.getElementById('movieId').value = '';
                document.getElementById('movieTitle').value = '';
                document.getElementById('movieDescription').value = '';
                document.getElementById('movieImage').required = true; // Required for add
                document.getElementById('movieForm').action = '../User_input/create_movie.php';
                document.getElementById('movieModalTitle').textContent = 'Add New Movie';
                document.getElementById('movieSubmitBtn').textContent = 'Add Movie';
                document.getElementById('movieModal').style.display = 'block';
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
