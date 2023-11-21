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
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

</head>

<body>
    <main class="container">
        <?php
        include("./php/client/nav.php");
        ?>
        <section class="watch-section">
            <?php
            if (!isset($_GET['v'])) {
            ?>
                <title>404: NOT FOUND</title>
                <p class="fail">
                    No video sent to server!
                </p>
                <?php
            } else {
                if (!isset($_GET['ep'])) {
                ?>
                    <title>404: NOT FOUND</title>

                    <p class="fail">
                        Episode is not sen to the server.
                    </p>
                    <?php
                } else {
                    $videoToWatch = $_GET['v'];
                    $episodeToWatch = $_GET['ep'];
                    // Check if the video exists and episode exists 
                    $checkVideoExists = mysqli_query($server, "SELECT * from 
                    series,series_episodes
                        WHERE 
                        series.serie_id = series_episodes.serie 
                        AND
                        serie_id = '$videoToWatch'
                        AND
                        id = '$episodeToWatch'
                    ");
                    if (mysqli_num_rows($checkVideoExists) !== 1) {
                    ?>
                        <title>404: NOT FOUND</title>
                        <p class="fail">
                            The video doesn't exists.
                        </p>
                    <?php
                    } else {
                        $dataVideoExists = mysqli_fetch_array($checkVideoExists);
                    ?>
                        <title>ISHUSHO WATCH:
                            <?php echo $dataVideoExists['episode_name']; ?>
                        </title>
                        <div class="watch-container">
                            <div class="watch-info">
                                <div class="left">
                                    <img src="<?php echo $dataVideoExists['serie_poster'] ?>" alt="">
                                </div>
                                <div class="right">
                                    <h2>
                                        <?php echo $dataVideoExists['episode_name']; ?>
                                    </h2>
                                    <div class="genres">
                                        <ul>
                                            <li title="Serie Genres">
                                                <i class="fas fa-tag"></i>

                                                <?php echo $dataVideoExists['serie_categories']; ?>
                                            </li>
                                            <li title="Serie release date">
                                                <i class="fa fa-calendar"></i>
                                                <?php
                                                echo date('d/m/Y', strtotime($dataVideoExists['serie_releasedate']));
                                                ?>
                                            </li>
                                            <li title="Episode addition  date">
                                                <i class="fa fa-clock"></i>
                                                <?php
                                                echo date('d/m/Y', strtotime($dataVideoExists['addition_date']));
                                                ?>
                                            </li>
                                            
                                            <li>
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
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="overview">
                                        <?php
                                        echo $dataVideoExists['serie_overview'];
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="player-cont">
                                <h1>
                                    VIDEO
                                    <span></span>
                                </h1>
                                <video id="vid_player" playsinline controls data-poster="<?php echo $dataVideoExists['movie_poster']; ?>">
                                    <source src="<?php echo $dataVideoExists['episode_720']; ?>" type="video/mp4" />
                                    <source src="<?php echo $dataVideoExists['episode_480']; ?>" type="video/mp4" />
                                    <!-- Captions are optional -->
                                    <!-- <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default /> -->
                                </video>
                                <div class="move-cont">
                                    <h1>OTHER EPISODES
                                        <span></span>
                                    </h1>
                                    <div class="move-row">
                                        <?php
                                        $getMovies = mysqli_query($server, "SELECT * from 
                                            series_episodes,series
                                            WHERE series_episodes.serie = series.serie_id
                                            AND series.serie_id = '$videoToWatch'
                                            AND series_episodes.id != '$episodeToWatch'
                                            ORDER BY 
                                            addition_date ASC
                                        ");
                                        if (mysqli_num_rows($getMovies) < 1) {
                                        ?>
                                            <div class="box">
                                                :) Results found
                                            </div>
                                            <?php
                                        } else {

                                            while ($dataGetMovies = mysqli_fetch_array($getMovies)) {
                                            ?>
                                                <div class="box">
                                                    <img src="<?php echo $dataGetMovies['serie_poster']; ?>" class="bigimg" alt="Image for <?php echo $dataGetMovies['serie_name']; ?>" />
                                                    <a href="watch_series_episodes.php?v=<?php echo $dataGetMovies['serie_id']; ?>&ep=<?php echo $dataGetMovies['id'] ?>">
                                                        <div class="box-info">
                                                            <img src="./images/youtube.png" alt="" />
                                                            <div class="others">
                                                                <p>
                                                                    <i class="fa fa-tag"></i>
                                                                    <?php echo $dataGetMovies['serie_categories'] ?>
                                                                </p>
                                                                <span>
                                                                    <!-- <i class="fa fa-calendar"></i> -->
                                                                    <?php
                                                                    // echo date('Y', strtotime($dataGetMovies['release_date']))
                                                                    ?>
                                                                </span>
                                                                <h4><?php echo $dataGetMovies['episode_name']; ?></h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                }
            }

            ?>
        </section>
        <?php
        include('./php/client/footer.php');
        ?>
    </main>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./js/clientHeaderScroll.js"></script>
    <script src="./js/clientResponsivenes.js"></script>

</body>

</html>