<?php
session_start();
include("../php/global/server.php");
include("../php/global/api_keys.php");
if (!isset($_SESSION['actingAdminUsername'])) {
    header("location: index.php");
} else {
    include('./php/admin-sessions.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../php/global/cdns.php');
    ?>
    <link rel="stylesheet" href="../styles/admin-main.css">
    <title>ISHUSHO Admin: Edit Serie Details</title>
</head>

<body>
    <div class="main-container">
        <?php
        include("./php/header.php");
        ?>
        <section class="center-section">
            <?php
            include('./php/nav-left.php');
            ?>
            <div class="right-contents">
                <?php
                include("./php/acting-user.php");
                ?>
                <div class="all-interchange">
                    <?php
                    if (isset($_GET['edit'])) {
                        if (!isset($_GET['v'])) {
                    ?>
                            <p class="alert alert-danger">
                                No video sent to the server!
                            </p>
                            <?php
                        } else {
                            $videoToEdit = $_GET['v'];
                            $checkIfVideoExists = mysqli_query($server, "SELECT * from 
            series
            WHERE serie_id= '$videoToEdit'
        ");
                            if (mysqli_num_rows($checkIfVideoExists) !== 1) {
                            ?>
                                <p class="alert alert-danger">
                                    Video doesn't exists in the database.
                                </p>
                            <?php
                            } else {
                                $dataVideoExists = mysqli_fetch_array($checkIfVideoExists);
                            ?>
                                <h1>
                                    Edit movie "<?php echo $dataVideoExists['serie_name']; ?>"
                                </h1>
                                <form action="" method="post" autocomplete="off">
                                    <?php
                                    if (isset($_POST['EditMovie'])) {
                                        $tmdbMovieId = mysqli_real_escape_string($server, $_POST['movie_id']);
                                        $tmdbMovieName = mysqli_real_escape_string($server, $_POST['tmdbmovie_name']);
                                        $tmdbMovieDesc = mysqli_real_escape_string($server, $_POST['tmdbmovie_desc']);
                                        $tmdbMovieCate = mysqli_real_escape_string($server, $_POST['tmdbmovie_cate']);
                                        $tmdbPosterImage = mysqli_real_escape_string($server, $_POST['tmdbmovie_poster']);
                                        $tmdbMovieURL = mysqli_real_escape_string($server, $_POST['tmdbmovie_url']);
                                        $tmdbReleaseDate = mysqli_real_escape_string($server, $_POST['tmdbreleasedate']);
                                        $current_date = date('Y-m-d h:i:s');

                                        // Check if the movie exists in the datbase
                                        $checkSerieExists = mysqli_query($server,"SELECT * from
                                            series WHERE
                                        serie_id = '$tmdbMovieId'
                                        ");
                                        if (mysqli_num_rows($checkSerieExists) < 1) {
                                            echo "dsiojio jioej";
                                    ?>
                                            <p class="alert alert-danger">
                                                Movie to update doesn't exists
                                            </p>
                                            <?php
                                        } else {
                                            // Update movie
                                            $updateMovie = mysqli_query($server, "UPDATE series
                                                set 
                                                serie_name = '$tmdbMovieName',
                                                serie_overview = '$tmdbMovieDesc',
                                                serie_categories = '$tmdbMovieCate',
                                                serie_poster = '$tmdbPosterImage',
                                                serie_url = '$tmdbMovieURL',
                                                serie_releasedate = '$tmdbReleaseDate'
                                                WHERE serie_id = '$tmdbMovieId'
                                            ");


                                            if (!$updateMovie) {
                                            ?>
                                                <p class="alert alert-danger">
                                                    Movie failed to be updated.
                                                </p>
                                            <?php
                                            } else {
                                            ?>
                                                <p class="alert alert-success">
                                                    Movie is updated successfully.
                                                </p>
                                    <?php

                                            }
                                        }
                                    }
                                    ?>
                                    <div class="row">
                                        <div class="form-group mt-2">
                                            <label for="">
                                                Serie ID
                                            </label>
                                            <input type="text" class="form-control" name="movie_id" placeholder="Movie ID.." value="<?php echo $dataVideoExists['serie_id'] ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                Serie Name
                                            </label>
                                            <input type="text" name="tmdbmovie_name" placeholder="Type..." class="form-control" value="<?php echo $dataVideoExists['serie_name'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mt-2">
                                            <label for="">
                                                Serie description
                                            </label>
                                            <textarea type="text" name="tmdbmovie_desc" placeholder="Type..." class="form-control"><?php echo $dataVideoExists['serie_overview'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                Serie Categories
                                            </label>
                                            <input type="text" name="tmdbmovie_cate" placeholder="Type..." class="form-control" value="<?php echo $dataVideoExists['serie_categories'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mt-2">
                                            <label for="">
                                                Poster Image URL
                                            </label>
                                            <input type="text" name="tmdbmovie_poster" placeholder="Type..." class="form-control" value="<?php echo $dataVideoExists['serie_poster'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                Serie URL
                                            </label>
                                            <input type="text" name="tmdbmovie_url" placeholder="Type..." class="form-control" value="<?php echo $dataVideoExists['serie_url'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mt-2">
                                            <label for="">
                                                Release date
                                            </label>
                                            <input type="text" name="tmdbreleasedate" placeholder="Type..." class="form-control" value="<?php echo $dataVideoExists['serie_releasedate'] ?>">
                                        </div>

                                    </div>
                                    <div class="form-group m-2">
                                        <button name="EditMovie" type="submit" class="btn btn-primary">
                                            <i class="fa fa-save"></i>
                                            Save
                                        </button>
                                    </div>
                                    <div class="m-3"></div>
                                </form>
                    <?php
                            }
                        }
                    }
                    ?>

                </div>
            </div>
        </section>
    </div>


    <script src="../js/loginValidation.js"></script>
</body>

</html>