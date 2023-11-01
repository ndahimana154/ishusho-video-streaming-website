<?php
session_start();
include("../php/global/server.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../php/global/cdns.php');
    ?>
    <link rel="stylesheet" href="../styles/main.css">
    <title>ISHUSHO Admin</title>
</head>

<body>
    <div class="container-fluid">
        <div class="m-3 row">
            <form action="" method="POST" class="form-control w-50 m-5 shadow" id="loginForm" onsubmit="validateLogin()">
                <h1 class="text-success  fs-3 fw-bold">
                    Admin login
                </h1>
                <?php
                $submitedAtLeast = 0;
                if (isset($_POST['signInButton'])) {
                    $submitedAtLeast = 1;
                    $userName = $_POST['un'];
                    $passWord = $_POST['pw'];
                    $checkCredentials = mysqli_query($server, "SELECT * from admins
                            WHERE admin_un = '$userName'
                            AND admin_pw = '$passWord'
                        ");

                    if (mysqli_num_rows($checkCredentials) > 0) {
                        $_SESSION['actingAdminUsername'] = $userName;
                        header("location: admin-home.php");
                    } else {
                ?>
                        <p class="alert alert-danger">
                            Credentials are incorrect!
                        </p>
                <?php
                    }
                }
                ?>
                <!-- <span id="formErrors">
                    Form
                </span> -->
                <p class="form-group">
                    <label class="">
                        Username
                    </label>
                    <input type="text" id="username" name="un" class="form-control" placeholder="type..." value="<?php if ($submitedAtLeast == 1) {
                                                                                                                        echo $userName;
                                                                                                                    } ?>">
                </p>
                <p class="form-group">
                    <label class="">
                        Password
                    </label>
                    <input type="password" id="password" name="pw" class="form-control" placeholder="type..." value="<?php if ($submitedAtLeast == 1) {
                                                                                                                            echo $passWord;
                                                                                                                        } ?>">
                </p>
                <p>
                    <button type="submit" name="signInButton" class="btn btn-primary">
                        <i class="fa fa-sign-in"></i> Sign in
                    </button>
                </p>
            </form>
        </div>
    </div>
    <script src="../js/loginValidation.js"></script>
</body>

</html>