<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="user_data";

    $connection = mysqli_connect($host, $username, $password, $database);

    if(!$connection){
        die("Database Connection Failed: " . mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudeeeflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>


<a href="homepage.php" class="back-arrow">
    <i class="fas fa-arrow-left"></i>
</a>


<div class="container">
  <div class="left-side">
    <div class="posters">
      <img src="fotologin-signup/Gambar1_SignUp.png" alt="Poster 1" class="poster shift-down">
      <img src="fotologin-signup/Gambar3_SignUp.png" alt="Poster 2" class="poster shift-up">
      <img src="fotologin-signup/Gambar2_SignUp.jpg" alt="Poster 3" class="poster shift-down">
      <img src="fotologin-signup/Gambar4_SignUp.jpg" alt="Poster 4" class="poster shift-up">
    </div>
  </div>

  <div class="right-side">
    <div class="form-box">
      <h2>Create an account</h2>
      <p>Already have an account? <a href="login.php">Log in</a></p>
      <form class="form" method="POST" action="User_input/User.php">
          <input type="text" id="name" name="name" placeholder="First Name" required>
          <input type="email" id="email" name="email" placeholder="Email" required>
            <div class="password-wrapper">
              <input type="password" id="password" name="password" placeholder="Password" required>
              <i class="fa-solid fa-eye toggle-password" id="togglePassword"></i>
            </div>
          <button type="submit">Create Account</button>
      </form>

      <div class="divider">OR</div>

      <div class="social-login">
        <div class="circle">G</div> 
        <div class="circle facebook">f</div>
      </div>
    </div>
  </div>
</div>
<script src="signup.js"></script>
</body>
</html>