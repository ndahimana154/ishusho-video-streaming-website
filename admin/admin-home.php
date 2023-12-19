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
                    <div class="box" onclick="window.location.href='./admin-movies-list.php'">
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
                
                    <div class="box" onclick="window.location.href='admin-users-list.php'">
                        <?php
                        $getTotalUsers = mysqli_query($server, "SELECT * from admins");

                        ?>
                        <i class="fa fa-user"></i>
                        <span>
                            <?php echo mysqli_num_rows($getTotalUsers); ?>
                        </span>
                        <p>
                            Total users
                        </p>
                    </div>
                </div>

            </div>
        </section>
    </div>


    <script src="../js/loginValidation.js"></script>
</body>

</html>