<header class="bg-dark shadow">
    <div class="logo">
        <!-- <a href="admin-home.php">
            ISHUSHO
        </a> -->
        <a href="admin-home.php" class="navbar-brand text-light fs-3 fw-bold me-auto">IS<span class="text-danger fs-3">HUS</span>HO</a>
    </div>
    <div class="profile">
        <button class="">
            <i class="fas fa-sort-down"></i>
            <?php
            if ($actingAdminProfile == "No profile") {
            ?>
                <img src="../images/profile-user.png" alt="">

            <?php
            } else {
            ?>
                <img src="./images/profiles/<?php echo $actingAdminProfile ?>" alt="">
            <?php
            }
            ?>
            <ul class="bg-success shadow">
                <li>
                    <a href="./admin-settings.php">@<?php echo $actingAdminUN; ?></a>
                </li>
                <li>
                    <a href="./php/sign-out.php"><i class="fas fa-sign-out-alt text-white"></i>Logout</a>
                </li>
            </ul>
        </button>
    </div>
</header>