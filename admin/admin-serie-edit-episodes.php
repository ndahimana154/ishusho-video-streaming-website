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
                    <h1>
                        Edit Series Episode
                    </h1>
                    <?php
                    if (!isset($_GET['edit'])) {
                    ?>
                        <p class="alert alert-danger">
                            No thing sent to the server.
                        </p>
                        <?php
                    } else {
                        if (!isset($_GET['v'])) {
                        ?>
                            <p class="alert alert-danger">
                                No video sent to the server Or invalid video request.
                            </p>
                            <?php
                        } else {
                            $epToEdit = $_GET['v'];
                            $checkEpExists = mysqli_query($server, "SELECT * from
                                series_episodes WHERE id = '$epToEdit'
                            ");
                            if (mysqli_num_rows($checkEpExists) != 1) {
                            ?>
                                <p class="alert alert-danger">
                                    Movie episode to edit is not found.
                                </p>
                            <?php
                            } else {
                                $dataEpexists = mysqli_fetch_array($checkEpExists);
                            ?>
                                <div class="m-2">
                                    <h3 class="fs-5 fw-bold">
                                        Serie name:
                                        <?php
                                        $EpSerieId = $dataEpexists['serie'];
                                        $getSerieNames = mysqli_query($server, "SELECT * from 
                                            series WHERE serie_id = '$EpSerieId'
                                            ");
                                        $dataSerieNames = mysqli_fetch_array($getSerieNames);
                                        echo $dataSerieNames['serie_name'];
                                        ?>
                                    </h3>
                                    <?php
                                    if (isset($_POST['saveSerieSode'])) {
                                        $Eepisode_id = $epToEdit;
                                        $Eserie_id = mysqli_real_escape_string($server, $_POST['serie_id']);
                                        $Esode_name = mysqli_real_escape_string($server, $_POST['sode_name']);
                                        $E720url = mysqli_real_escape_string($server, $_POST['720_url']);
                                        $E480url = mysqli_real_escape_string($server, $_POST['480_url']);
                                        // Check duplicate names on same serie 
                                        $checkDuplNamesOnSameSerie = mysqli_query($server, "SELECT * from series_episodes 
                                            WHERE serie='$Eserie_id'
                                            AND episode_name = '$Esode_name'
                                            AND id != '$Eepisode_id'
                                        ");
                                        if (mysqli_num_rows($checkDuplNamesOnSameSerie) > 0) {
                                    ?>
                                            <p class="alert alert-danger">
                                                The serie episode name can't be duplicate.
                                            </p>
                                            <?php
                                        } else {
                                            // Update the things
                                            $UpdateTheEpisode = mysqli_query($server,"UPDATE
                                                series_episodes SET
                                                serie = '$Eserie_id'
                                                ,episode_name = '$Esode_name'
                                                ,episode_720 = '$E720url'
                                                ,episode_480 = '$E480url'
                                                WHERE id = '$Eepisode_id'
                                            ");
                                            if (!$UpdateTheEpisode) {
                                            ?>
                                                <p class="alert alert-danger">
                                                    Updating the Episode failed
                                                </p>
                                            <?php
                                            } else {
                                            ?>
                                                <p class="alert alert-success">
                                                    Episode is updated successfully.
                                                </p>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="form-group mt-2">
                                                <label for="">
                                                    Serie Name
                                                </label>
                                                <select name="serie_id" id="" class="form-control">
                                                    <option value="<?php echo $dataSerieNames['serie_id']; ?>">
                                                        <?php
                                                        echo $dataSerieNames['serie_name'];
                                                        ?>
                                                    </option>
                                                    <?php
                                                    $getOtherSeries = mysqli_query($server, "SELECT * from series
                                                    WHERE serie_id != '$EpSerieId'
                                                    ORDER BY serie_name ASC
                                                ");
                                                    while ($dataOtherSeries = mysqli_fetch_array($getOtherSeries)) {
                                                    ?>
                                                        <option value="<?php echo $dataOtherSeries['serie_id']; ?>">
                                                            <?php echo $dataOtherSeries['serie_name'] ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">
                                                    Episode name
                                                </label>
                                                <input type="text" name="sode_name" placeholder="Type..." class="form-control" value="<?php echo $dataEpexists['episode_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group mt-2">
                                                <label for="">
                                                    720 url
                                                </label>
                                                <input type="text" name="720_url" placeholder="Type..." class="form-control" value="<?php echo $dataEpexists['episode_720'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">
                                                    480 url
                                                </label>
                                                <input type="text" name="480_url" placeholder="Type..." class="form-control" value="<?php echo $dataEpexists['episode_480'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group m-2">
                                            <button name="saveSerieSode" type="submit" class="btn btn-primary">
                                                <i class="fa fa-save"></i>
                                                Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            <?php
                            }
                            ?>
                    <?php
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