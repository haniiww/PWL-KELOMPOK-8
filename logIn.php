<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>


<div class="back-arrow" onclick="goBack()">
  <a href="homepage.php">
    <i class="fas fa-arrow-left"></i>
  </a>
</div>

<div class="container">
  <div class="left-side">
    <div class="posters">
      <img src="fotologin-signup/1_login.png" alt="Poster 1" class="poster shift-up">
      <img src="fotologin-signup/3_login.png" alt="Poster 2" class="poster shift-down">
      <img src="fotologin-signup/2_login.png" alt="Poster 3" class="poster shift-up">
      <img src="fotologin-signup/4_login.png" alt="Poster 4" class="poster shift-down">
    </div>
  </div>

  <div class="right-side">
    <div class="form-box">
      <h2>Log In</h2>
      <p>New to this App? <a href="signup.php">Sign Up Now</a></p>
      <form method="POST" action="User_input/login.php">
          <input type="email" name="email" placeholder="Email" required>
          <div class="password-wrapper">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <i class="fa-solid fa-eye toggle-password" id="togglePassword"></i>
          </div>
          <button type="submit">Enter</button>
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