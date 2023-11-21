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
    <title>ISHUSHO MOVIES</title>
</head>

<body>

    <main class="container">
        <?php
        include("./php/client/nav.php");
        ?>
        <section class="move">
            <div class="move-cont">
                <h1>
                    SERIES
                    <span></span>
                </h1>
                <div class="move-row">
                    <?php
                    $getMovies = mysqli_query($server, "SELECT * from 
                        series
                        ORDER BY 
                        serie_addition_time DESC
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
                                <img src="<?php echo $dataGetMovies['serie_poster']; ?>" alt="" />
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
                                            <h4><?php echo $dataGetMovies['serie_name']; ?></h4>
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
        </section>
        <?php
        include('./php/client/footer.php');
        ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./js/clientHeaderScroll.js"></script>
    <script src="./js/clientResponsivenes.js"></script>
</body>

</html>