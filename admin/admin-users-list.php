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
                        USERS LIST
                    </h1>
                    <?php
                    if (isset($_GET['ban'])) {
                        $userToBan = $_GET['ban'];
                        // Check if he/she is on the list
                        $checkOnUserList = mysqli_query($server, "SELECT * from admins
                                WHERE admin_id = '$userToBan'
                                AND admin_status != 'Disabled'
                            ");
                        if ($userToBan === $actingAdminId) {
                    ?>
                            <p class="alert alert-danger">
                                Error! You can't ban the User. Try again or call System support.
                            </p>
                        <?php
                        } elseif (mysqli_num_rows($checkOnUserList) < 1) {
                        ?>
                            <p class="alert alert-danger">
                                Maybe the user is already disabled.
                            </p>
                            <?php
                        } else {
                            $banUser = mysqli_query($server, "UPDATE admins
                                    SET admin_status = 'Disabled'
                                    WHERE admin_id = '$userToBan' 
                                ");
                            if (!$banUser) {
                            ?>
                                <p class="alert alert-danger">
                                    Disabling the User failed.
                                </p>
                            <?php
                            } else {
                            ?>
                                <p class="alert alert-success">
                                    The user is disabled successfully.
                                </p>
                            <?php
                            }
                        }
                    }
                    if (isset($_GET['unban'])) {
                        $userToUnban = $_GET['unban'];
                        //Check if the user is on the enabled list
                        $checkDisabledList = mysqli_query($server,"SELECT * from 
                            admins
                            WHERE admin_id = '$userToUnban'
                            AND admin_status = 'Disabled'
                        ");
                        if ($userToUnban === '$actingAdminId ') {
                            ?>
                            <p class="alert alert-danger">
                                Error enabling the user.
                            </p>
                    <?php
                        } elseif (mysqli_num_rows($checkDisabledList) < 1) {
                            ?>
                            <p class="alert alert-danger">
                                Maybe the user is already enabled.
                            </p>
                            <?php
                        }
                        else {
                            $Enable = mysqli_query($server,"UPDATE admins
                                SET admin_status = 'Standard'
                                WHERE admin_id = '$userToUnban'
                            ");
                            if (!$Enable) {
                                ?>
                                <p class="alert alert-danger">
                                    Enabling the user failed.
                                </p>
                                <?php
                            }
                            else {
                                ?>
                                <p class="alert alert-success">
                                    User is enabled successfully.
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
                                    Username
                                </th>
                                <th>
                                    Profile Picture
                                </th>
                                <th>UserType
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $getUsers = mysqli_query($server, "SELECT * from admins
                                    WHERE admin_id != '$actingAdminId'
                                ");
                            if (mysqli_num_rows($getUsers) < 1) {
                            ?>
                                <tr>
                                    <td colspan="10">
                                        No values found.
                                    </td>
                                </tr>
                            <?php
                            }
                            $counter = 1;
                            while ($dataUsers = mysqli_fetch_array($getUsers)) {
                            ?>

                                <tr>
                                    <td>
                                        <?php
                                        echo $counter++;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $dataUsers['admin_un'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $dataUsers['admin_profile_pic'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $dataUsers['admin_status'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($dataUsers['admin_status'] === 'Disabled') {
                                        ?>
                                            <a href="?unban=<?php echo $dataUsers['admin_id']; ?>" onclick="return confirm('Are you sure to Enable this User?')" title="Enable user.">
                                                <i class="fa fa-user-check text-primary"></i>
                                            </a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="?ban=<?php echo $dataUsers['admin_id']; ?>" onclick="return confirm('Are you sure to ban this user?')" title="Disable user.">
                                                <i class="fa fa-user-alt-slash text-danger"></i>
                                            </a>
                                        <?php
                                        }
                                        ?>

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