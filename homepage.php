<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
<div class="container">
  <div class="overlay">
    <?php include './header.php' ?>
    <main>
      <h1>FEEL THE MOMENTS BEYOND</h1>
    </main>
  </div>
</div>

<section class="collection">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="content swiper-slide">
                <img src="fotohomepage/demonslayer_slide.png" alt="">
                <div class="overlay-text">
                    <h3>Demon Slayer</h3>
                    <p>The demon slayer corps is lured into 'Infinity Castle' by Muzan. At the demon headquarters, Tanjiro, Nezuko, and the Hashira will face the terrifying upper moon demons.</p>
                    <button class="btn1">Get Ticket</button>
                    <button class="btn2">More Info</button>
                </div>
            </div>
            <div class="content swiper-slide">
                <img src="fotohomepage/avatar_slide.png" alt="">
                <div class="overlay-text">
                    <h3>Avatar</h3>
                    <p>A paralyzed Marine is sent to the moon Pandora on a special mission, but finds himself torn between following orders and protecting the new world he feels like home.</p>
                    <button class="btn1">Get Ticket</button>
                    <button class="btn2">More Info</button>
                </div>
            </div>
            <div class="content swiper-slide">
                <img src="fotohomepage/Moana_slide.png" alt="">
                <div class="overlay-text">
                    <h3>Moana</h3>
                    <p>Moana embarks on a boating adventure to convince Maui, a demigod, to return the heart of the goddess, Te Fitti, after the crops fail and the fish on her island begin to die.</p>
                    <button class="btn1">Get Ticket</button>
                    <button class="btn2">More Info</button>
                </div>
            </div>
            <div class="content swiper-slide">
                <img src="fotohomepage/jujutsu_slide.png" alt="">
                <div class="overlay-text">
                    <h3>Jujutsu Kaisen</h3>
                    <p>The Two Strongest, Irretrievable Youth. In June 2018, Yuji Itadori allowed Sukuna, the King of Curses, to reside within his body. In December 2017, Yuta Okkotsu successfully released Rika Orimoto's curse. However, time continued to rewind to the spring of 2006, when Satoru Gojo and Suguru Geto were still students at Jujutsu High School.</p>
                    <button class="btn1">Get Ticket</button>
                    <button class="btn2">More Info</button>
                </div>
            </div>
            <div class="content swiper-slide">
                <img src="fotohomepage/conan_slide.png" alt="">
                <div class="overlay-text">
                    <h3>Detective Conan</h3>
                    <p>On the snow-capped peak of Mitaodake, in Nagano's Yatsugatake mountains, Inspector Kansuke Yamato of the Nagano Prefectural Police pursues an elusive suspect. A fleeting shadow distracts him, and in that split second, a sniper's bullet grazes his left eye.</p>
                    <button class="btn1">Get Ticket</button>
                    <button class="btn2">More Info</button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="search-box">
    <input type="text" placeholder="Search">
    <img src="fotohomepage/tombolsearch.png" alt="search" class="search-icon">
  </div>
  
<div class="movie-section">
  <h2 class="movie-title">Now Playing</h2>
  <div class="carousel-wrapper">
    <button class="carousel-btn prev" onclick="slideCarousel('nowPlaying', -1)">❮</button>
    <div class="carousel-container">
      <div class="carousel" id="nowPlaying">
        <img src="fotohomepage/25SEDE.jpg" alt="">
        <img src="fotohomepage/Placeholder image (1).png" alt="">
        <img src="fotohomepage/25DSIC.jpg" alt="">
        <img src="fotohomepage/15LTCD.jpg" alt="">
        <img src="fotohomepage/25SEDE.jpg" alt="">
        <img src="fotohomepage/Placeholder image (1).png" alt="">
        <img src="fotohomepage/25DSIC.jpg" alt="">
        <img src="fotohomepage/15LTCD.jpg" alt="">
      </div>
    </div>
    <button class="carousel-btn next" onclick="slideCarousel('nowPlaying', 1)">❯</button>
  </div>
</div>

<div class="movie-section">
  <h2 class="movie-title">Coming Soon</h2>
  <div class="carousel-wrapper">
    <button class="carousel-btn prev" onclick="slideCarousel('comingSoon', -1)">❮</button>
    <div class="carousel-container">
      <div class="carousel" id="comingSoon">
        <img src="fotohomepage/25DATL.jpg" alt="">
        <img src="fotohomepage/imax.png" alt="">
        <img src="fotohomepage/25PSUI.jpg" alt="">
        <img src="fotohomepage/25CLRS.jpg" alt="">
        <img src="fotohomepage/25DATL.jpg" alt="">
        <img src="fotohomepage/imax.png" alt="">
        <img src="fotohomepage/25PSUI.jpg" alt="">
        <img src="fotohomepage/25CLRS.jpg" alt="">
      </div>
    </div>
    <button class="carousel-btn next" onclick="slideCarousel('comingSoon', 1)">❯</button>
  </div>
</div>

<h2 class="promo-title">Promo for a great time</h2>
<section class="promo">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="content swiper-slide">
                <img src="fotohomepage/promo1.png" alt="">
            </div>
            <div class="content swiper-slide">
                <img src="fotohomepage/promo2.png" alt="">
            </div>
            <div class="content swiper-slide">
                <img src="fotohomepage/promo3.png" alt="">
            </div>
            <div class="content swiper-slide">
                <img src="fotohomepage/promo4.png" alt="">
            </div>
            <div class="content swiper-slide">
                <img src="fotohomepage/promo5.png" alt="">
            </div>
        </div>
    </div>
</section>

<h2 class="foodiez-title">Get tasty snack at foodiez</h2>
<img src="fotohomepage/foodiez.png" alt="foodiez" class="foodiez">

<div  class="more-container">
  <img src="fotohomepage/More.png" alt="" class="More">
  <h2 class="More-text">|     More than movies — it’s an experience.</h2>
</div>

<?php include './footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="homepage.js"></script>

</body>
</html>