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
                    if (isset($_GET['delete'])) {
                    ?>
                        <h1>
                            Delete Episode
                        </h1>
                        <div class="m-2">
                            <a href="?view-sodes&v=<?php echo $_GET['sv']; ?>" class="btn btn-primary">
                                <i class="fa fa-arrow-left"></i> View episodes
                            </a>
                        </div>
                        <?php
                        if (!isset($_GET['v'])) {
                        ?>

                            <p class="alert alert-danger">
                                Invalid video request
                            </p>
                            <?php
                        } else {
                            $serieTHing = $_GET['sv'];
                            $videoToDelete = $_GET['v'];
                            $checkVideoTODelete = mysqli_query($server, "SELECT * from
            series_episodes WHERE id='$videoToDelete'
            AND serie = $serieTHing
        ");
                            if (mysqli_num_rows($checkVideoTODelete) != 1) {
                            ?>
                                <p class="alert alert-danger">
                                    Movie series is not found
                                </p>
                                <?php
                            } else {
                                $DeleteSode = mysqli_query($server, "DELETE from series_episodes
                                 WHERE id='$videoToDelete'
            AND serie = '$serieTHing'
                                ");
                                if (!$DeleteSode) {
                                ?>
                                    <p class="alert alert-danger">
                                        Deleting the episode failed
                                    </p>
                                <?php
                                } else {
                                ?>
                                    <p class="alert alert-success">
                                        Deleting episode succed
                                    </p>
                            <?php
                                }
                            }
                        }
                    } elseif (isset($_GET['add-sode'])) {
                        if (!isset($_GET['nv'])) {
                            ?>
                            <p class="alert alert-danger">
                                Nothing sent to the server!
                            </p>
                            <?php
                        } else {
                            $videoToSode = $_GET['nv'];
                            $checkSodeExists = mysqli_query($server, "SELECT * from series
                                WHERE serie_id = '$videoToSode'
                            ");
                            if (mysqli_num_rows($checkSodeExists) != 1) {
                            ?>
                                <p class="alert alert-danger">
                                    Series is not found in the database.
                                </p>
                            <?php
                            } else {
                                $dataSodesExists = mysqli_fetch_array($checkSodeExists);
                            ?>
                                <h1>
                                    Add new episodes '<?php echo $dataSodesExists['serie_name']; ?>'
                                </h1>
                                <div class="m-2">
                                    <a href="?view-sodes&v=<?php echo $_GET['nv']; ?>" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i> View episodes
                                    </a>
                                </div>
                                <form action="" method="post" autocomplete="off">
                                    <?php
                                    if (isset($_POST['saveSerieSode'])) {
                                        $Eserie_id = mysqli_real_escape_string($server, $_POST['serie_id']);
                                        $Esode_name = mysqli_real_escape_string($server, $_POST['sode_name']);
                                        $E720url = mysqli_real_escape_string($server, $_POST['720_url']);
                                        $E480url = mysqli_real_escape_string($server, $_POST['480_url']);
                                        $current_date = date('Y-m-d h:i:s');

                                        // Check if the movie exists in the datbase
                                        $checkSerieExists = mysqli_query($server, "SELECT * from
                                                    series WHERE
                                                serie_id = '$Eserie_id'
                                                ");
                                        if (mysqli_num_rows($checkSerieExists) != 1) {
                                    ?>
                                            <p class="alert alert-danger">
                                                Movie series doesn't exists or Try again later.
                                            </p>
                                            <?php
                                        } else {
                                            $saveSode = mysqli_query($server, "INSERT into
                                                series_episodes 
                                                values(null,'$Eserie_id','$Esode_name','$E720url','$E480url','$current_date',$actingAdminId)
                                            ");
                                            if (!$saveSode) {
                                            ?>
                                                <p class="alert alert-danger">
                                                    Saving the sode have failed.
                                                </p>
                                            <?php
                                            } else {
                                            ?>
                                                <p class="alert alert-success">
                                                    The episode is saved successfully.
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
                                            <input type="text" class="form-control" name="serie_id" placeholder="Movie ID.." value="<?php echo $dataSodesExists['serie_id'] ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                Episode name
                                            </label>
                                            <input type="text" name="sode_name" placeholder="Type..." class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mt-2">
                                            <label for="">
                                                720 url
                                            </label>
                                            <input type="text" name="720_url" placeholder="Type..." class="form-control" value="<?php echo $dataVideoExists['serie_overview'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                480 url
                                            </label>
                                            <input type="text" name="480_url" placeholder="Type..." class="form-control" value="<?php echo $dataVideoExists['serie_categories'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group m-2">
                                        <button name="saveSerieSode" type="submit" class="btn btn-primary">
                                            <i class="fa fa-save"></i>
                                            Save
                                        </button>
                                    </div>
                                    <div class="m-3"></div>
                                </form>
                            <?php
                            }
                        }
                    } elseif (isset($_GET['view-sodes'])) {

                        if (!isset($_GET['v'])) { ?>
                            <p class="alert alert-danger">
                                No video sent to the server!
                            </p>
                            <?php
                        } else {
                            $videoToEdit = $_GET['v'];
                            $checkIfVideoExists = mysqli_query($server, "SELECT * from  series WHERE serie_id= '$videoToEdit'");
                            if (mysqli_num_rows($checkIfVideoExists) !== 1) {
                            ?>
                                <p class="alert alert-danger">
                                    Video doesn't exists in the database.
                                </p>
                            <?php
                            } else {
                                $dataVideoExists = mysqli_fetch_array($checkIfVideoExists);
                                $serie_id = $dataVideoExists['serie_id'];

                            ?>
                                <h1>
                                    Episodes for "<?php echo $dataVideoExists['serie_name']; ?>"
                                </h1>
                                <div class="m-2">
                                    <a href="?add-sode&nv=<?php echo $serie_id; ?>" class="btn btn-primary">
                                        <i class="fa fa-plus-square"></i> New Episode
                                    </a>
                                </div>
                                <table class="table table-responsive table-hover">
                                    <thead>
                                        <tr class="bg-success text-light">
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Episode name
                                            </th>
                                            <th>
                                                url 720
                                            </th>
                                            <th>
                                                url 480
                                            </th>
                                            <th>
                                                Addition Date
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $getMovies = mysqli_query($server, "SELECT * from
                                    series_episodes WHERE serie = '$serie_id'
                                    ORDER BY
                                    addition_date ASC
                                ");
                                        $count = 1;
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
                                                    <?php echo $count++; ?>
                                                </td>

                                                <td>
                                                <?php echo $dataMovies['id']; ?>

                                                    <?php echo $dataMovies['episode_name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $dataMovies['episode_720']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $dataMovies['episode_480']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $dataMovies['addition_date']; ?>
                                                </td>
                                                <td>

                                                    <a href="admin-serie-edit-episodes.php?edit&v=<?php echo $dataMovies['id']; ?>" class="">
                                                        <i class="fa fa-edit text-primary"></i>
                                                    </a>
                                                    <a href="?delete&v=<?php echo $dataMovies['id']; ?>&sv=<?php echo $dataMovies['serie']; ?>" onclick="return confirm('Are you sure to delete?');">
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

                        <?php
                            }
                        }
                    } else {
                        ?>
                        <p class="alert alert-danger">
                            Nothing sent to the server.
                        </p>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </section>
    </div>


    <script src="../js/loginValidation.js"></script>
</body>

</html>