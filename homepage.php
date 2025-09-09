<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEF TEAM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include './header.php'?>

  <section class="hero">
    <h1>FEEL THE MOMENTS BEYOND</h1>
    <div class="search-box">
      <input type="text" placeholder="Search">
      <img src="fotohomepage/Vector.png" alt="search" class="search-icon">
    </div>

    <div class="menu-icons">
      <div class="menu-item">
        <img src="fotohomepage/bioskop.png" alt="Bioskop">
        <p>Bioskop</p>
      </div>
      <div class="menu-item">
        <img src="fotohomepage/film (1).png" alt="Film">
        <p>Film</p>
      </div>
      <div class="menu-item">
        <img src="fotohomepage/foodiez (1).png" alt="Foodiez">
        <p>Foodiez</p>
      </div>
      <div class="menu-item">
        <img src="fotohomepage/reservation (1).png" alt="Reservation">
        <p>Reservation</p>
      </div>
    </div>
  </section>

<div class="slider">
  <div class="slides">
    <div class="slide"><img src="fotohomepage/demonslaye1.png" alt="Demon Slayer"></div>
    <div class="slide"><img src="fotohomepage/conjuring1.png" alt="Conjuring"></div>
    <div class="slide"><img src="fotohomepage/Brosur_page-0001.jpg" alt="Foodiez"></div>
  </div>

  <!-- tombol navigasi -->
  <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
  <a class="next" onclick="moveSlide(1)">&#10095;</a>
</div>

<div class="dots">
  <span class="dot" onclick="currentSlide(0)"></span>
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
</div>

<div class="movie-section">
  <h2 class="section-title">Now Playing</h2>
  <div class="carousel-container">
    <button class="carousel-btn prev">&#10094;</button> <!-- tambahin tombol kiri -->
    <div class="carousel">
      <img src="fotohomepage/25SEDE.jpg" alt="">
      <img src="fotohomepage/15LTCD.jpg" alt="">
      <img src="fotohomepage/25DSIC.jpg" alt="">
      <img src="fotohomepage/15JTBG.jpg" alt="">
    </div>
    <button class="carousel-btn next">&#10095;</button>
  </div>
</div>

<div class="movie-section">
  <h2 class="section-title">Now Playing</h2>
  <div class="carousel-container">
    <button class="carousel-btn prev">&#10094;</button> <!-- tambahin tombol kiri -->
    <div class="carousel">
      <img src="fotohomepage/25DATL.jpg" alt="">
      <img src="fotohomepage/imax.png" alt="">
      <img src="fotohomepage/25PSUI.jpg" alt="">
      <img src="fotohomepage/25CLRS.jpg" alt="">
    </div>
    <button class="carousel-btn next">&#10095;</button>
  </div>
</div>

</body>
</html>