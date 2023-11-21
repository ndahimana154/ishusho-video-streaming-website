<?php
session_start();
include('./php/global/server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/new-main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>ISHUSHO Home</title>
</head>

<body>

  <main class="container">
    <?php
    include("./php/client/nav.php");
    ?>
    <section class="hero">
      <div class="cont">
        <div class="slides">
          <?php
          $getMovies = mysqli_query($server, "SELECT * FROM movies ORDER BY RAND() LIMIT 8");
          while ($movie = mysqli_fetch_array($getMovies)) {
          ?><div class="slide">
              <img src="<?php echo $movie['movie_poster']; ?>" alt="Movie Poster">
              <a href="">
                <div class="info">
                  <h2><?php echo $movie['movie_name']; ?></h2>
                  <p>
                    <i class="fa fa-calendar"></i>
                    <?php echo date('Y', strtotime($movie['release_date'])); ?>
                  </p>
                </div>
              </a>
            </div>
          <?php
          }
          ?>

        </div>
      </div>
      <div class="controls">
        <button class="control" onclick="prevSlide()">❮</button>
        <button class="control" onclick="nextSlide()">❯</button>
      </div>
    </section>
    <section class="pop-mov pop">
      <div class="cont">
        <h1>
          POPULAR MOVIES
          <span></span>
        </h1>
        <div class="row">
          <?php
          $getMovies = mysqli_query($server, "SELECT * from 
            movies ORDER BY 
            addition_date DESC
            LIMIT 12
          ");
          while ($dataGetMovies = mysqli_fetch_array($getMovies)) {
          ?>
            <div class="box">
              <img src="<?php echo $dataGetMovies['movie_poster']; ?>" class="showimg" alt="Image for <?php $dataGetMovies['movie_name'] ?>" />
              <a href="watch.php?v=<?php echo $dataGetMovies['movie_id']; ?>">
                <div class="box-info">
                  <img src="./images/youtube.png" alt="" />
                  <div class="others">
                    <p>
                      <?php echo $dataGetMovies['movie_categories'] ?>
                    </p>
                    <span>
                      <i class="fa fa-calendar"></i>
                      <?php
                      echo date('Y', strtotime($dataGetMovies['release_date']))
                      ?>
                    </span>
                    <h4><?php echo $dataGetMovies['movie_name']; ?></h4>
                  </div>
                </div>
              </a>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <section class="pop-mov pop">
      <div class="cont">
        <h1>
          POPULAR SERIES
          <span></span>
        </h1>
        <div class="row">
          <?php
          $getMovies = mysqli_query($server, "SELECT * from 
            series ORDER BY 
            serie_addition_time DESC
            LIMIT 12
          ");
          while ($dataGetMovies = mysqli_fetch_array($getMovies)) {
            $serie_iid = $dataGetMovies['serie_id'];
          ?>
            <div class="box">
              <img src="<?php echo $dataGetMovies['serie_poster']; ?>" class="showimg" alt="Image for <?php $dataGetMovies['serie_name'] ?>" />
              <a href="watch_series.php?v=<?php echo $dataGetMovies['serie_id']; ?>">
                <div class="box-info">
                  <img src="./images/youtube.png" alt="" />
                  <div class="others">
                    <p>
                      <?php echo $dataGetMovies['serie_categories'] ?>
                    </p>
                    <span>
                      <i class="fa fa-calendar"></i>
                      <?php
                      echo date('Y', strtotime($dataGetMovies['serie_releasedate']))
                      ?>
                    </span>
                    <span>
                      <i class="fa fa-list"></i>
                      <?php
                      $getEpisodesNum = mysqli_query($server, "SELECT * from 
                        series_episodes WHERE
                        serie = '$serie_iid'
                      ");
                      echo mysqli_num_rows($getEpisodesNum);
                      if (mysqli_num_rows($getEpisodesNum) == 1) {
                        echo " Episode";
                      } else {
                        echo " Episodes";
                      }
                      // $dataEpisodesNum = mysqli_fetch_array($getEpisodesNum);
                      ?>
                    </span>
                    <h4><?php echo $dataGetMovies['serie_name']; ?></h4>
                  </div>
                </div>
              </a>
            </div>

          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <?php
    include('./php/client/footer.php');
    ?>
  </main>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="./js/clientHeaderScroll.js"></script>
  <script src="./js/clientResponsivenes.js"></script>



  <script src="./js/clientHeroSliding.js"></script>



</body>

</html>