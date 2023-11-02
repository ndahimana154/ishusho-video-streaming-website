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
                <div class="total-boxes">
                    <div class="box">
                        <?php
                        $getTotalMovies = mysqli_query($server, "SELECT
                                * from movies
                            ");
                        ?>
                        <i class="fa fa-tv"></i>
                        <span>
                            <?php echo mysqli_num_rows($getTotalMovies); ?>
                        </span>
                        <p>
                            Total movies
                        </p>
                    </div>
                    <div class="box">
                        <?php
                        $getTotalViews = mysqli_query($server, "SELECT 
                                * from
                                movie_views 
                            ");
                        ?>
                        <i class="fa fa-eye"></i>
                        <span>
                            <?php echo mysqli_num_rows($getTotalViews); ?>
                        </span>
                        <p>
                            Total views
                        </p>
                    </div>
                </div>
                <div class="recent-movies">
                    <h1>
                        Recent movies
                    </h1>
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
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
                            <tr>
                                <td colspan="10">
                                    no values...
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>


    <script src="../js/loginValidation.js"></script>
</body>

</html>