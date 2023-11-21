<?php
include('./php/global/server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .hero {
      position: relative;
      overflow: hidden;
      width: 100%;
      /* height: 500px; */
    }

    .slides {
      display: flex;
      transition: transform 1s ease-in-out;
      width: 25%;
    }

    .slide {
      min-width: 100%;
      overflow: hidden;
      position: relative;
    }

    .slide img {
      width: 100%;
      height: auto;
      object-fit: cover; 
    }

    .info {
      position: absolute;
      bottom: 10px;
      left: 10px;
      color: #fff;
    }

    .controls {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }

    .control {
      cursor: pointer;
      font-size: 24px;
      color: #fff;
      background: rgba(0, 0, 0, 0.5);
      padding: 10px;
      border: none;
    }
  </style>
</head>
<body>

<div class="hero">
  <div class="slides">
    <?php
    $getMovies = mysqli_query($server, "SELECT * FROM movies ORDER BY RAND() LIMIT 8");
    while ($movie = mysqli_fetch_array($getMovies)) {
      echo '<div class="slide">
              <img src="' . $movie['movie_poster'] . '" alt="Movie Poster">
              <div class="info">
                <h2>' . $movie['movie_name'] . '</h2>
                <p>Release Year: ' . date('Y', strtotime($movie['release_date'])) . '</p>
              </div>
            </div>';
    }
    ?>
    
  </div>

  <div class="controls">
    <button class="control" onclick="prevSlide()">❮</button>
    <button class="control" onclick="nextSlide()">❯</button>
  </div>
</div>
<script>
  let currentSlide = 0;

  function initializeSlides() {
    const slidesContainer = document.querySelector('.slides');
    const slides = document.querySelectorAll('.slide');
    const clonedSlides = Array.from(slides).map((slide) => slide.cloneNode(true));

    slidesContainer.append(...clonedSlides);
  }

  function showSlide(index) {
    const slidesContainer = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length / 2; // Divide by 2

    if (index < 0) {
      index = totalSlides - 1;
    } else if (index >= totalSlides) {
      index = 0;
    }

    currentSlide = index;

    slidesContainer.style.transition = 'transform 0.5s ease-in-out';
    slidesContainer.style.transform = `translateX(${-index * 100}%)`;
  }

  function nextSlide() {
    showSlide(currentSlide + 1);
  }

  function prevSlide() {
    showSlide(currentSlide - 1);
  }

  function handleTransitionEnd() {
    const slidesContainer = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length / 2; // Divide by 2

    slidesContainer.style.transition = 'none';

    if (currentSlide === totalSlides - 1) {
      currentSlide = 0;
    } else if (currentSlide === 0) {
      currentSlide = totalSlides - 1;
    }

    slidesContainer.style.transform = `translateX(${-currentSlide * 100}%)`;

    // Force reflow to apply the transform immediately
    void slidesContainer.offsetWidth;

    slidesContainer.style.transition = 'transform 0.5s ease-in-out';
  }

  initializeSlides();
  document.querySelector('.slides').addEventListener('transitionend', handleTransitionEnd);

  setInterval(nextSlide, 5000);
</script>



</body>
</html>
