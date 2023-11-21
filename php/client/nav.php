<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
  <button class="menu-button" id="menu-button">
    <i class="fa fa-bars"></i>
  </button>
  <div class="logo">
    <h1>ISHU<span>SHO</span></h1>
  </div>
  <div class="links">
    <div class="logo">
      <h1>ISHU<span>SHO</span></h1>
      <button class="close" id="closeLinks">
        <i class="fa fa-close"></i>
      </button>
    </div>
    <ul>
      <li>
        <a href="./index.php" class="<?php if ($current_page === 'index.php') { echo "active"; } ?>">Home</a>
      </li>
      <li>
        <a href="./movies.php"  class="<?php if ($current_page === 'movies.php') { echo "active"; } ?>"> Movies</a>
      </li>
      <li>
        <a href="./series.php" class="<?php if ($current_page === 'series.php') { echo "active"; } ?>">Series</a>
      </li>
      <li>
        <a href="./search.php" class="<?php if ($current_page === 'search.php') { echo "active"; } ?>">Search </a>
      </li>
    </ul>
  </div>
</header>