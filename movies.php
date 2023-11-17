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
            <a href="./movies.php" class="active"> Movies</a>
          </li>
          <li>
            <a href="">Series</a>
          </li>
          <li>
            <a href="">Search </a>
          </li>
        </ul>
      </div>
    </header>
  </main>
  <script src="./js/clientHeaderScroll.js"></script>






</body>

</html>