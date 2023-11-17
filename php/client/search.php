<?php
include('../global/server.php');
if (isset($_POST['s'])) {
    $searchValue = $_POST['s'];
    $searchType = $_POST['st'];
    if ($searchValue !== '' && $searchType === 'movie') {
?>
        <section class="move">
            <div class="move-cont">
                <h1>
                    MOVIES RESULTS
                    '<b><?php echo $searchValue ?></b>'
                    <span></span>
                </h1>
                <div class="move-row">
                    <?php
                    $getMovies = mysqli_query($server, "SELECT * from 
            movies 
            WHERE movie_name LIKE '%$searchValue%'
            ORDER BY 
            movie_name ASC
            LIMIT 20
          ");
                    if (mysqli_num_rows($getMovies) < 1) {
                    ?>
                        <div class="box">
                            :) Results found
                        </div>
                    <?php
                    }
                    while ($dataGetMovies = mysqli_fetch_array($getMovies)) {
                    ?>
                        <div class="box">
                            <img src="<?php echo $dataGetMovies['movie_poster']; ?>" alt="" />
                            <a href="watch.php?v=<?php echo $dataGetMovies['movie_id']; ?>">
                                <div class="box-info">
                                    <img src="./images/youtube.png" alt="" />
                                    <div class="others">
                                        <p>
                                            <?php echo $dataGetMovies['movie_categories'] ?>
                                        </p>
                                        <span>
                                            <i class="fa fa-calendar"></i>
                                            <?php
                                            echo date('Y', strtotime($dataGetMovies['release_date']))
                                            ?>
                                        </span>
                                        <h4><?php echo $dataGetMovies['movie_name']; ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    <?php
    } elseif ($searchValue !== '' && $searchType === 'serie') {
    ?>

        <section class="move">
            <div class="move-cont">
                <h1>
                    NOT YET RELEASED
                    '<b><?php echo $searchValue ?></b>'
                    <span></span>
                </h1>
                <div class="move-row">
                    <?php
                    $getMovies = mysqli_query($server, "SELECT * from 
            movies 
            WHERE movie_name LIKE '%$searchValue%'
            ORDER BY 
            movie_name ASC
            LIMIT 20
          ");
                    if (mysqli_num_rows($getMovies) < 100000000000000) {
                    ?>
                        <div class="box">
                            :) Results found
                        </div>
                        <?php
                    } else {

                        while ($dataGetMovies = mysqli_fetch_array($getMovies)) {
                        ?>
                            <div class="box">
                                <img src="<?php echo $dataGetMovies['movie_poster']; ?>" alt="" />
                                <a href="watch.php?v=<?php echo $dataGetMovies['movie_id']; ?>">
                                    <div class="box-info">
                                        <img src="./images/youtube.png" alt="" />
                                        <div class="others">
                                            <p>
                                                <?php echo $dataGetMovies['movie_categories'] ?>
                                            </p>
                                            <span>
                                                <i class="fa fa-calendar"></i>
                                                <?php
                                                echo date('Y', strtotime($dataGetMovies['release_date']))
                                                ?>
                                            </span>
                                            <h4><?php echo $dataGetMovies['movie_name']; ?></h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
<?php
    }
}
?>