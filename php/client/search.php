<?php
include('../global/server.php');
if (isset($_POST['s'])) {
    $searchValue = $_POST['s'];
    if ($searchValue !== '') {
?>
        <div class="searchResults">
            <h2 class="p-2">
                Search results "<span><?php echo $searchValue; ?></span>"
            </h2>
            <div class="results-boxes">
                <?php
                $getSearchResults = mysqli_query($server, "SELECT * from
                        movies WHERE movie_name LIKE '%$searchValue%'
                        ORDER BY movie_name
                    ");
                if (mysqli_num_rows($getSearchResults) < 1) {
                ?>
                    <div class="box">
                        <a href="">
                            <p>
                                0 results found!
                            </p>
                        </a>
                    </div>
                <?php
                }
                while ($dataSearchResults = mysqli_fetch_array($getSearchResults)) {
                ?>
                    <div class="box">
                        <a href="watch.php?v=<?php echo $dataSearchResults['movie_id'] ?>">
                            <i class="fa fa-film"></i>
                            <p>
                                <span>
                                    <?php echo $dataSearchResults['movie_name']; ?>
                                </span>
                                <span>(<?php echo $dataSearchResults['release_date']; ?>)</span>
                            </p>

                        </a>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
<?php
    }
}
?>