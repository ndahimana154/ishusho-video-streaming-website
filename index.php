<?php
session_start();
include('./php/global/server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome-free-6.4.2-web/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./styles/main.css">
  <title>ISHUSHO MOVIES</title>
</head>

<body>
  <?php
  include("./php/client/nav-bar.php")
  ?>

  <!-- Hero -->
  <!-- <div id="carouselExampleCaptions" class="carousel  container slide mt-2" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://fakeimg.pl/600x300" class="d-block w-100 rounded" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://fakeimg.pl/600x300" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block rounded">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://fakeimg.pl/600x300" class="d-block w-100 rounded" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div> -->
  <!-- End hero -->

  <!-- Latest movie -->
  <div class="latest-container">
    <h1 class="">
      Latest movies
    </h1>
    <div class="latest-movie-row">
      <?php
      $getMovies = mysqli_query($server, "SELECT * from 
                movies ORDER BY 
                release_date DESC;
              ");
      while ($dataGetMovies = mysqli_fetch_array($getMovies)) {
      ?>
        <div class="movie-card shadow ">
          <img src="<?php echo $dataGetMovies['movie_poster']; ?>" class="card-img-top w-100 rounded" alt="Movie Image">
          <div class="card-img-overlay">
            <div class="card-text-overlay">
              <a href="watch.php?v=<?php echo $dataGetMovies['movie_id']; ?>">
                <h2 class="">
                  <?php echo $dataGetMovies['movie_name']; ?>
                </h2>
                <p class="card-text text-light text-break fs-6 movie-desc">
                  <?php echo $dataGetMovies['movie_description'] ?>
                </p>
              </a>
              <div class="row">
                <a class="">
                  <i class="fas fa-calendar"></i> <span class="fw-bold">
                    Year:
                    <?php
                    echo date('Y', strtotime($dataGetMovies['release_date']))
                    ?>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="">
      <div class="d-grid gap-2  mx-auto">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-caret-down me-md-2"></i>
          Explore more...
        </button>
      </div>
    </div>
  </div>
  <!-- End latest movies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>


  </style>
</body>

</html>