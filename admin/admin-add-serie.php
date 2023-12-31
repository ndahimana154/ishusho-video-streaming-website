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
    <title>ISHUSHO Admin: Add new Series</title>
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
                    <h1>
                        New Series Movie
                    </h1>
                    <form action="" method="post" autocomplete="off" class="form-control">
                        <?php
                        if (isset($_POST['fetch_movie'])) {
                            $movie_id = $_POST['movie_id'];

                            $movie_url = $tv_base_url . $movie_id . '?api_key=' . $api_key . '&append_to_response=videos,credits';

                            // Initialize CURL session
                            $curl = curl_init();

                            // Setting Curl options
                            curl_setopt($curl, CURLOPT_URL, $movie_url);
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                            // Execute the curl session
                            $response = curl_exec($curl);

                            // Clode CURL session
                            curl_close($curl);

                            // Decode the JSON response
                            $data = json_decode($response, true);

                            // echo $data['title'];
                            if (!$data) {
                        ?>
                                <p class="alert alert-danger">
                                    Failed to fetch movie.
                                </p>
                            <?php
                            } else {
                            ?>
                                <p class="alert alert-success">Movies is found.</p>
                            <?php
                            }
                        }
                        if (isset($_POST['saveMovie'])) {
                            $tmdbMovieId = mysqli_real_escape_string($server, $_POST['movie_id']);
                            $tmdbMovieName = mysqli_real_escape_string($server, $_POST['tmdbmovie_name']);
                            $tmdbMovieDesc = mysqli_real_escape_string($server, $_POST['tmdbmovie_desc']);
                            $tmdbMovieCate = mysqli_real_escape_string($server, $_POST['tmdbmovie_cate']);
                            $tmdbPosterImage = mysqli_real_escape_string($server, $_POST['tmdbmovie_poster']);
                            $tmdbMovieURL = mysqli_real_escape_string($server, $_POST['tmdbmovie_url']);
                            $tmdbReleaseDate = mysqli_real_escape_string($server, $_POST['tmdbreleasedate']);
                            $current_date = date('Y-m-d h:i:s');

                            // Check if the movie already exists in the datbase
                            $checkMovieExists = mysqli_query($server, "SELECT * from 
                                series
                                WHERE serie_id = '$tmdbMovieId'
                            ");
                            if (mysqli_num_rows($checkMovieExists) == 1) {
                            ?>
                                <p class="alert alert-danger">
                                    Serie already exists.
                                </p>
                                <?php
                            } else {
                                $createMovie = mysqli_query($server, "INSERT INTO 
                                series
                                    VALUES ('$tmdbMovieId', '$tmdbMovieName', '$tmdbMovieDesc', '$tmdbMovieCate', '$tmdbPosterImage', '$tmdbMovieURL', '$tmdbReleaseDate', '$current_date', '$actingAdminId') 
                                ");
                                if (!$createMovie) {
                                ?>
                                    <p class="alert alert-danger">
                                        Series failed to be created.
                                    </p>
                                <?php
                                } else {
                                ?>
                                    <p class="alert alert-success">
                                        Serie is created successfully
                                    </p>
                        <?php

                                }
                            }
                        }
                        ?>
                        <div class="row">
                            <div class="form-group mt-2">
                                <label for="">
                                    Movie ID
                                </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="movie_id" placeholder="Movie ID.." value="<?php
                                                                                                                            if (isset($_POST['fetch_movie'])) {
                                                                                                                                echo $movie_id;
                                                                                                                            }
                                                                                                                            ?>">
                                    <button class="input-group-text" type="submit" name="fetch_movie" id="basic-addon2">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">
                                    Movie Name
                                </label>
                                <input type="text" name="tmdbmovie_name" placeholder="Type..." class="form-control" value="<?php
                                                                                                                            if (isset($data['name'])) {
                                                                                                                                echo $data['name'];
                                                                                                                            }
                                                                                                                            ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mt-2">
                                <label for="">
                                    Movie description
                                </label>
                                <textarea type="text" name="tmdbmovie_desc" placeholder="Type..." class="form-control"><?php
                                                                                                                        if (isset($data['genres'])) {
                                                                                                                            echo $data['overview'];
                                                                                                                        }
                                                                                                                        ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">
                                    Movie Categories
                                </label>
                                <input type="text" name="tmdbmovie_cate" placeholder="Type..." class="form-control" value="<?php
                                                                                                                            if (isset($data['genres'])) {
                                                                                                                                foreach ($data['genres'] as $genre) {
                                                                                                                                    $genres[] = $genre['name'];
                                                                                                                                }
                                                                                                                                echo implode(', ', $genres);
                                                                                                                            }
                                                                                                                            ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mt-2">
                                <label for="">
                                    Poster Image URL
                                </label>
                                <input type="text" name="tmdbmovie_poster" placeholder="Type..." class="form-control" value="<?php
                                                                                                                                if (isset($data['poster_path'])) {
                                                                                                                                    echo 'https://image.tmdb.org/t/p/w500' . $data['poster_path'];
                                                                                                                                }
                                                                                                                                ?>">
                            </div>
                            <div class="form-group">
                                <label for="">
                                    Movie URL
                                </label>
                                <input type="text" name="tmdbmovie_url" placeholder="Type..." class="form-control" value="<?php
                                                                                                                            if (isset($data['videos']['results'][0]['key'])) {
                                                                                                                                echo 'https://www.youtube.com/watch?v=' . $data['videos']['results'][0]['key'];
                                                                                                                            }
                                                                                                                            ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mt-2">
                                <label for="">
                                    Release date
                                </label>
                                <input type="text" name="tmdbreleasedate" placeholder="Type..." class="form-control" value="<?php
                                                                                                                            if (isset($data['first_air_date'])) {
                                                                                                                                echo $data['first_air_date'];
                                                                                                                            }
                                                                                                                            ?>">
                            </div>

                        </div>
                        <div class="form-group m-2">
                            <button name="saveMovie" type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i>
                                Save
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>


    <script src="../js/loginValidation.js"></script>
</body>

</html>