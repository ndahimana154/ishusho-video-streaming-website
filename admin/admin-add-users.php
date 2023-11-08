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
                        New Users
                    </h1>
                    <form action="" method="post" autocomplete="off">
                        <?php
                        if (isset($_POST['saveUser'])) {
                            $addUserName = $_POST['au'];
                            $addUserStatus = $_POST['as'];
                            // Check if the username doesn't exists
                            $checkUserNameExists = mysqli_query($server, "SELECT * from admins
                                    WHERE admin_un = '$addUserName'
                                ");
                            if (mysqli_num_rows($checkUserNameExists) > 0) {
                        ?>
                                <p class="alert alert-danger">
                                    Username already exists.
                                </p>
                                <?php
                            } else {
                                $saveNewUser = mysqli_query($server, "INSERT into admins
                                        VALUES(null,'$addUserName','1234','No profile','$addUserStatus')
                                    ");
                                if (!$saveNewUser) {
                                ?>
                                    <p class="alert alert-danger">
                                        Saving user has failed.
                                    </p>
                                <?php
                                } else {
                                ?>
                                    <p class="alert alert-success">
                                        User is saved successfully!
                                        <br>
                                        <b>Username:
                                            <?php echo $addUserName; ?>
                                            <br>
                                            Default Password:
                                            1234

                                        </b>
                                    </p>
                        <?php
                                }
                            }
                        }
                        ?>

                        <div class="form-group">
                            <label for="">
                                Username
                            </label>
                            <input type="text" name="au" placeholder="Type..." class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">
                                User type
                            </label>
                            <select name="as" id="" class="form-control">
                                <option>
                                    Standard
                                </option>
                            </select>
                        </div>

                        <div class="form-group m-2">
                            <button name="saveUser" type="submit" class="btn btn-primary">
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