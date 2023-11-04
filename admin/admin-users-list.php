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