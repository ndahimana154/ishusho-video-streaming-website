<?php
session_start();
include("../php/global/server.php");
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
    <title>ISHUSHO Admin</title>
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
                        Movies list
                    </h1>
                    <?php
                    if (isset($_GET['delete'])) {
                        if (!isset($_GET['v'])) {
                    ?>
                            <p class="alert alert-danger">
                                No video sent to the server!
                            </p>
                            <?php
                        } else {
                            $videoToDelete = $_GET['v'];
                            $deleteVideo = mysqli_query($server, "DELETE from movies
                                    WHERE movie_id = '$videoToDelete'
                                ");
                            if (!$deleteVideo) {
                            ?>
                                <p class="alert alert-danger">
                                    Video is not deleted.
                                </p>
                            <?php
                            } else {
                            ?>
                                <p class="alert alert-success">
                                    Video is deleted successfully
                                </p>
                    <?php
                            }
                        }
                    }
                    ?>
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr class="bg-success text-light">
                                <th>
                                    #
                                </th>
                                <th>
                                    Movie name
                                </th>
                                <th>
                                    Movie description
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $getMovies = mysqli_query($server, "SELECT * from
                                    movies ORDER BY CAST(movie_id AS UNSIGNED)
                                ");
                            if (mysqli_num_rows($getMovies) < 1) {
                            ?>
                                <tr>
                                    <td colspan="10">
                                        no values...
                                    </td>
                                </tr>
                            <?php
                            }
                            while ($dataMovies = mysqli_fetch_array($getMovies)) {
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $video = $dataMovies['movie_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $dataMovies['movie_name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $dataMovies['movie_description']; ?>
                                    </td>
                                   
                                    <td>
                                        <a href="admin-edit-movie.php?edit&v=<?php echo $video; ?>" class="">
                                            <i class="fa fa-edit text-primary"></i>
                                        </a>
                                        <a href="?delete&v=<?php echo $video; ?>" onclick="return confirm('Are you sure to delete?');">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>
                                        <a href="../watch.php?v=<?php echo $video; ?>" target="_blank">
                                            <i class="fa fa-external-link text-dark"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>


    <script src="../js/loginValidation.js"></script>
</body>

</html>