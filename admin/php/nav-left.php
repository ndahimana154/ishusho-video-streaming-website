<div class="nav-controls bg-dar shadow">
    <div class="nav-parts">
        <div class="nav-part">
            <h3>
                CORE
            </h3>
            <ul>
                <li>
                    <a href="admin-home.php">
                        <i class="fas fa-house"></i>
                        <span class="text">
                            Dashboard
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-part">
            <h3>
                MOVIES
            </h3>
            <ul>
                <li>
                    <a href="admin-movies-list.php">
                        <i class="fas fa-film"></i>
                        <span class="text">
                            Movies list
                        </span>
                    </a>
                </li>
                <li>
                    <a href="admin-add-movie.php">
                        <i class="fas fa-plus-circle"></i>
                        <span class="text">
                            Add movies
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        
        <?php
        if ($actingAdminStatus == 'Administrator') {
        ?>
            <div class="nav-part">
                <h3>
                    Users
                </h3>
                <ul>
                    <li>
                        <a href="admin-users-list.php">
                            <i class="fas fa-user-group"></i>
                            <span class="text">
                                Users List
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="admin-add-users.php">
                            <i class="fa fa-plus-circle"></i>
                            <span>
                                Add users
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        <?php
        }
        ?>

    </div>
    <div class="nav-copy">
        &copy; ISHUSHO
        <?php
        if (date('Y') > 2023) {
            echo "2023 - " . date('Y');
        } else {
            echo date('Y');
        }
        ?>
    </div>
</div>