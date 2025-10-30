<?php
require_once 'User_input/db_Connection.php';
echo 'Testing database connection...<br>';
if ($connection) {
    echo 'Connection successful!<br>';
    $query = 'SELECT COUNT(*) as count FROM users';
    $result = mysqli_query($connection, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo 'Users in database: ' . $row['count'] . '<br>';
        if ($row['count'] > 0) {
            $query2 = 'SELECT id, name, email FROM users LIMIT 3';
            $result2 = mysqli_query($connection, $query2);
            echo 'Sample users:<br>';
            while ($user = mysqli_fetch_assoc($result2)) {
                echo 'ID: ' . $user['id'] . ', Name: ' . $user['name'] . ', Email: ' . $user['email'] . '<br>';
            }
        }
    } else {
        echo 'Query failed: ' . mysqli_error($connection) . '<br>';
    }
} else {
    echo 'Connection failed: ' . mysqli_connect_error() . '<br>';
}
?>
