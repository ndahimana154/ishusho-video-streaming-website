<footer>
    <div class="flexer">

        <div class="about">
            <a href="index.php" class="navbar-brand text-dark fs-3 fw-bold me-auto" href="#">IS<span class="text-danger">HUS</span>HO</a>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto tenetur consequatur accusamus ullam libero rerum, quidem esse nemo aspernatur optio corporis officia culpa ratione aliquid at voluptates, laboriosam velit incidunt!
            </p>
        </div>
        <!-- <div class="important">
            <h2>
                Important Links
            </h2>
            <ul>
                <li>
                    <a href="">
                        <i class="fas fa-x"></i>
                        <span>
                            Twitter
                        </span>
                    </a>
                </li>

            </ul>
        </div> -->
        <div class="social-medias">
            <h2>
                Our Social media
            </h2>
            <ul>
                <li>
                    <a href="">
                       <img src="./images/youtube.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="./images/instagram.png" alt="">
                    </a>
                </li>
            </ul>
            <div class="copy">
                &copy;ISHUSHO
                <?php
                if (date('Y') > 2023) {
                    echo "2022 - " . date('Y');
                } else {
                    echo date('Y');
                }
                ?>
            </div>
        </div>
    </div>
    <?php
        include("./php/client/dev.php");
    ?>
</footer>