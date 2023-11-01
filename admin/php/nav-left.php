<div class="nav-controls bg-dar shadow">
    <div class="nav-parts">
        <div class="nav-part">
            <h3>
                CORE
            </h3>
            <ul>
                <li>
                    <a href="">
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
                    <a href="">
                        <i class="fas fa-house"></i>
                        <span class="text">
                            Movies list
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-house"></i>
                        <span class="text">
                            Add movies
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-house"></i>
                        <span class="text">
                            Movies list
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-part">
            <h3>
                FEEDBACKS
            </h3>
            <ul>
                <li>
                    <a href="">
                        <i class="fas fa-house"></i>
                        <span class="text">
                            Feedback lists
                        </span>
                    </a>
                </li>

            </ul>
        </div>
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