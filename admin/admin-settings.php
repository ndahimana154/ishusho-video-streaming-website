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
                <div class="settings-cont">
                    <h1>
                        User account settings
                    </h1>
                    <div class="settings-box">
                        <form action="" method="POST" class="form-control">
                            <h3>
                                Change username
                            </h3>
                            <?php
                            if (isset($_POST['save_Username'])) {
                                $username = $_POST['usern'];
                                $passWord = $_POST['passw'];

                                $checkUsernameExists = mysqli_query($server, "SELECT * from
                                    admins WHERE admin_un = '$username'
                                    -- AND admin_pw = '$passWord'
                                ");
                                if (mysqli_num_rows($checkUsernameExists) > 0) {
                            ?>
                                    <p class="alert alert-danger">
                                        Username already exists.
                                    </p>
                                <?php
                                } elseif ($passWord !== $actingPassword) {
                                ?>
                                    <p class="alert alert-danger">Invalid Password..</p>
                            <?php
                                } else {
                                    $updateUsername = mysqli_query($server, "UPDATE admins set 
                                        admin_un = '$username'
                                        WHERE admin_id = '$actingAdminId'
                                    ");
                                    ?>
                                    <p class="alert alert-success">
                                        Username is updated successfully.
                                    </p>
                                    <?php
                                }
                            }
                            ?>
                            <div class="form-group">
                                <label for="">
                                    New Username
                                </label>
                                <input type="text" name="usern" class="form-control" value="<?php echo $actingAdminUN ?>" placeholder="...">
                            </div>
                            <div class="form-group">
                                <label for="">
                                    Password
                                </label>
                                <input type="password" name="passw" class="form-control" placeholder="...">
                            </div>
                            <div class="form-group mt-2">
                                <button class="btn btn-primary" name="save_Username">
                                    <i class=" fa fa-save"></i>
                                    Save
                                </button>
                            </div>
                        </form>
                        <form action="" method="POST" class="form-control">
                            <h3>
                                Change Password
                            </h3>
                            <?php
                            if (isset($_POST['chngPwdBTN'])) {
                                $currentPassword = $_POST['currentpw'];
                                $newPassword = $_POST['newpw'];
                                $confirmPassword = $_POST['cfnpw'];
                                if ($confirmPassword !== $newPassword) {
                            ?>
                                    <p class="alert alert-danger">
                                        New passwords doesn't match.
                                    </p>
                                <?php
                                }
                                elseif ($currentPassword !== $actingPassword) {
                                ?><p class="alert alert-danger">
                                        Current password is incorrect.
                                    </p>
                            <?php
                                }
                                else {
                                    $changePassword = mysqli_query($server,"UPDATE admins 
                                        SET admin_pw = '$newPassword'
                                        WHERE admin_id = '$actingAdminId'
                                        AND admin_un = '$actingAdminUN'
                                    ");
                                    if(!$changePassword) {
                                        ?>
                                        <p class="alert alert-danger">
                                            Changing password failed. Please don't rush
                                            we are handling the error.
                                        </p>
                                        <?php
                                    }
                                    else {
                                        session_destroy();
                                        ?>
                                        <p class="alert alert-success">
                                            Password is changed successfully. login again to continue.
                                        </p>
                                        <?php
                                    }
                                }

                              
                            }
                            ?>
                            <div class="form-group">
                                <label for="">
                                    Current password
                                </label>
                                <input type="password" placeholder="..." name="currentpw" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">
                                    New password
                                </label>
                                <input type="password" placeholder="..." name="newpw" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">
                                    Confirm new password
                                </label>
                                <input type="password" placeholder="..." name="cfnpw" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <button type="submit" name="chngPwdBTN" class="btn btn-primary">
                                    <i class="fa fa-save"></i>
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <script src="../js/loginValidation.js"></script>
</body>

</html>