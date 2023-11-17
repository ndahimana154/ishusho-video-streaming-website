<?php
session_start();
include('./php/global/server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISHUSHO Movies</title>
    <link rel="stylesheet" href="./styles/new-main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ISHUSHO MOVIES</title>
</head>

<body>

    <main class="container">
        <header>
            <div class="logo">
                <h1>ISHU<span>SHO</span></h1>
            </div>
            <div class="links">
                <ul>
                    <li>
                        <a href="./index.php"> Home</a>
                    </li>
                    <li>
                        <a href="./movies.php"> Movies</a>
                    </li>
                    <li>
                        <a href="./series.php">Series</a>
                    </li>
                    <li>
                        <a href="./search.php" class="active">Search </a>
                    </li>
                </ul>
            </div>
        </header>
        <section class="search">
            <div class="search-cont">
                <div class="form">
                    <ul>
                        <li>
                            <button id="movie" class="live-search">
                                Movies
                            </button>
                        </li>
                        <li>
                            <button id="series">
                                Series
                            </button>
                        </li>
                    </ul>
                    <input type="search" id="searchField" placeholder="Type...">
                </div>
                <div id="searchResults"></div>

            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/clientHeaderScroll.js"></script>
    <script src="./js/search.js"></script>





</body>

</html>