<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP UI</title>
    <link rel="stylesheet" href="../assets/css/about-us.css">
</head>
<body>
<div class="hero-section">
    <?php include('../user_input/header.php'); ?>
    <div class="hero-content">
        <h1>AT THE HEART OF JEF CINEMA</h1>
        <p>
            With years of dedication in the cinema industry, JEF Cinema is committed to delivering exceptional facilities and an enjoyable movie-going experience at accessible prices. More than just a place to watch films, JEF Cinema serves as a second home where audiences can share moments with family and friends while enjoying unforgettable stories on the big screen—today, tomorrow, and beyond.
        </p>
    </div>
</div>

<div class="Motto">
    <h2>MORE THAN MOVIES, IT’S AN EXPERIENCE</h2>
</div>

<section class="vision">
    <div class="vision-grid">
        <div class="vision-title">
            <h2>OUR VISION</h2>
            <hr>
        </div>
        <div class="vision-desc">
            <p>
                To become the leading cinema that delivers unforgettable experiences,
                connecting people through stories and the art of film.
            </p>
        </div>
    </div>
</section>

<section class="mission">
    <h2>OUR MISSION</h2>
    <div class="mission-grid">
        <div class="mission-card">
            <img src="../assets/images/about_us/m2.jpg" alt="Mission 1">
            <p>Providing high-quality services and facilities that ensure comfort and satisfaction for every visitor.</p>
        </div>
        <div class="mission-card">
            <img src="../assets/images/about_us/m1.jpg" alt="Mission 2">
            <p>Creating a friendly and welcoming atmosphere where audiences can enjoy meaningful time with family and friends.</p>
        </div>
        <div class="mission-card">
            <img src="../assets/images/about_us/m3.jpg" alt="Mission 3">
            <p>Presenting a wide variety of films—both international and local—at affordable and accessible prices.</p>
        </div>
    </div>
</section>

<section class="gallery">
    <h2>OUR GALLERY</h2>
    <div class="gallery-grid">
        <img src="../assets/images/about_us/g1.jpg" alt="">
        <img src="../assets/images/about_us/g2.jpg" alt="">
        <img src="../assets/images/about_us/g3.jpg" alt="">
        <img src="../assets/images/about_us/g4.jpg" alt="">
        <img src="../assets/images/about_us/g5.jpg" alt="">
        <img src="../assets/images/about_us/g6.jpg" alt="">
        <img src="../assets/images/about_us/g7.jpg" alt="">
        <img src="../assets/images/about_us/g8.jpg" alt="">
    </div>
</section>

<section class="highlight">
    <div class="highlight-banner">
        <img src="../assets/images/about_us/besar.jpg" alt="Highlight">
        <p>Bringing you the finest movie experience at the best value</p>
    </div>
</section>

<section class="team">
    <h2>OUR TEAM</h2>
    <div class="team-grid">
        <div class="team-card">
            <img src="../assets/images/about_us/edward-removebg-preview (1).png" alt="Edward Hans Reinaldo">
            <div class="team-info">
                <p class="team-name">Edward Hans Reinaldo</p>
                <p class="team-role">Back End</p>
            </div>
        </div>
        <div class="team-card">
            <img src="../assets/images/about_us/forensya-removebg-preview.png" alt="Forensya Hani">
            <div class="team-info">
                <p class="team-name">Forensya Hani</p>
                <p class="team-role">Front End</p>
            </div>
        </div>
        <div class="team-card">
            <img src="../assets/images/about_us/joey-removebg-preview (1).png" alt="Joey Jason Lee">
            <div class="team-info">
                <p class="team-name">Joey Jason Lee</p>
                <p class="team-role">UI/UX Designer</p>
            </div>
        </div>
    </div>
</section>
<?php include('../components/footer.php'); ?>
</body>
</html>