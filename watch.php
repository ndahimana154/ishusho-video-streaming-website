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
    <!-- Plyr.io CDN -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.7/plyr.css" />


    <link rel="stylesheet" href="./styles/main.css">

    <title>ISHUSHO MOVIES</title>
</head>

<body>
    <?php
    include("./php/client/nav-bar.php");
    ?>
    <!-- Search results section -->
    <div id="searchResults"></div>
    <?php
    if (!isset($_GET['v'])) {
    ?>
        <p class="alert alert-danger">
            No video sent to server.
        </p>
        <?php
    } else {
        $video = $_GET['v'];
        // Check the video existence
        $checkVideoExistence = mysqli_query($server, "SELECT * from
            movies WHERE movie_id = '$video'
        ");
        if (mysqli_num_rows($checkVideoExistence) != 1) {
        ?>
            <p class="alert alert-danger">
                404 :) Movie is not found
            </p>
        <?php
        } else {
            $dataVideoExistence = mysqli_fetch_array($checkVideoExistence);
            $video720p = $dataVideoExistence['url720'];
            $video480p = $dataVideoExistence['url480'];
            // Updating the views count
            $changeViewsCount = mysqli_query($server, "INSERT into movie_views
                VALUES(null,'$video',1,now())
            ");
            // Counting the views
            $getViewsCount = mysqli_query($server, "SELECT * from movie_views
                WHERE movie = '$video'
            ");
            $viewsCount = mysqli_num_rows($getViewsCount);

            // If the like button is clicked
            if(isset($_GET['like'])) {
                $videoToLike = $_GET['like'];
                $insertLike = mysqli_query($server,"INSERT into
                    movie_likes values(null,$videoToLike,now())
                ");
                
            }

        ?>
            <div class="center-section">
                <div class="left-video">
                    <div class="video-display">
                        <video id="my-video" controls>
                            <source src="<?php echo $video720p; ?>" type="video/mp4" data-size="480" />
                            <source src="<?php echo $video480p; ?>" type="video/mp4" data-size="720" />
                        </video>



                        <div class="video-controls">
                            <h2>
                                <?php echo $dataVideoExistence['movie_name']; ?>
                            </h2>
                            <div class="ctrlz">
                                <a>
                                    <i class="fa fa-eye"></i>
                                    <span>
                                        <?php echo $viewsCount; ?>
                                    </span>
                                </a>

                                <a href="?v=<?php echo $video ?>&like=<?php echo $video ?>">
                                    <?php
                                        $getLikesCOunt = mysqli_query($server,"SELECT 
                                            * from movie_likes 
                                            WHERE movie = '$video'
                                        ");
                                    ?>
                                    <i class="fa fa-thumbs-up"></i>
                                    <span><?php echo mysqli_num_rows($getLikesCOunt); ?></span>
                                </a>

                                <!----<a>
                                    <i class="fa fa-comment"></i>
                                    <span>10</span>
                                </a> --->
                            </div>


                        </div>
                        <div class="description">
                            <h4>
                                Overview:
                            </h4>
                            <?php
                            echo $dataVideoExistence['movie_description'];
                            ?>
                        </div>
                    </div>
                </div>
                <div class="recommended-vids">
                    <h1>
                        Other recommendations
                    </h1>
                    <?php
                    $getRecommendedOnes = mysqli_query($server, "SELECT * from movies
                            WHERE movie_id != '$video'
                            ORDER BY rand()    
                            LIMIT 8                 
                        ");
                    while ($dataRecommendationsVideos = mysqli_fetch_array($getRecommendedOnes)) {
                    ?>
                        <div class="recommend-box">
                            <a href="watch.php?v=<?php echo $dataRecommendationsVideos['movie_id'] ?>" class="recommend">
                                <div class="left">
                                    <img src="<?php echo $dataRecommendationsVideos['movie_poster']; ?>" alt="">
                                </div>
                                <div class="right">
                                    <span class="m_name">
                                        <?php
                                        echo $dataRecommendationsVideos['movie_name'];
                                        ?>
                                    </span>

                                    <p title="<?php echo $dataRecommendationsVideos['movie_description']; ?>">
                                        <!-- <i class="fa fa-film"></i> -->
                                        <?php echo $dataRecommendationsVideos['movie_description']; ?>
                                    </p>
                                    <div class="buttons">
                                        <?php
                                        $recommendId = $dataRecommendationsVideos['movie_id'];
                                        $getRecommendViews = mysqli_query($server, "SELECT * from movie_views 
                                                WHERE movie = '$recommendId'
                                            ");
                                        ?>
                                        <button>
                                            <i class="fa fa-eye"></i>
                                            <span><?php echo mysqli_num_rows($getRecommendViews); ?></span>
                                        </button>
                                        <button>
                                            <?php
                                                $getRecommendLikes = mysqli_query($server,"
                                                    SELECT * from movie_likes
                                                    WHERE movie = '$recommendId'
                                                ");

                                            ?>
                                            <i class="fa fa-thumbs-up"></i>
                                            <span><?php echo mysqli_num_rows($getRecommendLikes); ?></span>
                                        </button>
                                        <!----<button>
                                            <i class="fa fa-comment"></i>
                                            <span>100</span>
                                        </button> --->
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
    <?php
        }
    }
    include('./php/client/footer.php');
    ?>

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- End latest movies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include PlyR.io CDN -->
    <script src="https://cdn.plyr.io/3.6.7/plyr.js"></script>
    <!-- Clients Watching Movi Controls from Plyri.io -->
    <script src="./js/clientsWatchControls.js"></script>
    <!-- Include search.js -->
    <script src="./js/search.js"></script>
</body>

</html>