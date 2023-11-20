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
    <title>ISHUSHO Admin: Series List</title>
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
                        Series list
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
                            $deleteVideo = mysqli_query($server, "DELETE from series
                                    WHERE serie_id = '$videoToDelete'
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
                                    Name
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Episodes Count
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $getMovies = mysqli_query($server, "SELECT * from
                                    series ORDER BY CAST(`serie_id` AS UNSIGNED)
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
                                        <?php echo $video = $dataMovies['serie_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $dataMovies['serie_name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $dataMovies['serie_overview']; ?>
                                    </td>
                                    <td>
                                        <?php

                                        $getEpisodesCount = mysqli_query($server, "SELECT * from series_episodes
                                                WHERE serie = '$video' 
                                            ");
                                        echo mysqli_num_rows($getEpisodesCount);
                                        ?>
                                    </td>
                                    <td>
                                        <a href="admin-serie-view-episodes.php?view-sodes&v=<?php echo $video; ?>" title="View episodes: <?php echo $dataMovies['serie_name']; ?>">
                                            <i class="fa fa-list text-success"></i>
                                        </a>
                                        <a href="admin-edit-serie.php?edit&v=<?php echo $video; ?>" class="">
                                            <i class="fa fa-edit text-primary"></i>
                                        </a>
                                        <a href="?delete&v=<?php echo $video; ?>" onclick="return confirm('Are you sure to delete?');">
                                            <i class="fa fa-trash text-danger"></i>
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