<?php
$actingAdminUN = $_SESSION['actingAdminUsername'];
$getAdminInformations = mysqli_query($server, "SELECT * from admins WHERE admin_un = '$actingAdminUN'");
if (mysqli_num_rows($getAdminInformations) < 1) {
    header("location: index.php");
} else {
    $dataAdminInformations = mysqli_fetch_array($getAdminInformations);
    $actingAdminId = $dataAdminInformations['admin_id'];
    $actingPassword = $dataAdminInformations['admin_pw'];
    $actingAdminProfile = $dataAdminInformations['admin_profile_pic'];
}
