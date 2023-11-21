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
        <header>
            <div class="logo">
                <h1>ISHU<span>SHO</span></h1>
            </div>
            <div class="links">
                <ul>
                    <li>
                        <a href="./index.php"> Home</a>
                    </li>
                    <li>
                        <a href="./movies.php"> Movies</a>
                    </li>
                    <li>
                        <a href="./series.php">Series</a>
                    </li>
                    <li>
                        <a href="./search.php">Search </a>
                    </li>
                </ul>
            </div>
        </header>
        <section class="watch-section">
            <?php
            if (!isset($_GET['v'])) {
            ?>
                <p class="fail">
                    No video sent to server!
                </p>
                <?php
            } else {
                $videoToWatch = $_GET['v'];
                // Check if the video exists 
                $checkVideoExists = mysqli_query($server, "SELECT * from movies
                        WHERE movie_id = '$videoToWatch'
                    ");
                if (mysqli_num_rows($checkVideoExists) !== 1) {
                ?>
                    <p class="fail">
                        The video doesn't exists.
                    </p>
                <?php
                } else {
                    $dataVideoExists = mysqli_fetch_array($checkVideoExists);
                ?>
                    <title>ISHUSHO WATCH:
                        <?php echo $dataVideoExists['movie_name']; ?>
                    </title>
                    <div class="watch-container">
                        <div class="watch-info">
                            <div class="left">
                                <img src="<?php echo $dataVideoExists['movie_poster'] ?>" alt="">
                            </div>
                            <div class="right">
                                <h2>
                                    <?php echo $dataVideoExists['movie_name']; ?>
                                </h2>
                                <div class="genres">
                                    <ul>
                                        <li>Genre 1</li>
                                    </ul>
                                </div>
                                <div class="overview">
                                    <?php
                                    echo $dataVideoExists['movie_description'];
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
                                <source src="<?php echo $dataVideoExists['url720']; ?>" type="video/mp4" />
                                <source src="<?php echo $dataVideoExists['url480']; ?>" type="video/mp4" />
                                <!-- Captions are optional -->
                                <!-- <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default /> -->
                            </video>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </section>
    </main>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

    <script src="./js/clientHeaderScroll.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const player = new Plyr('#vid_player');
        });
    </script>

</body>

</html>