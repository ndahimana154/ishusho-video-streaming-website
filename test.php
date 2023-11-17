<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Hero Section</title>
  <style>
    /* Styles remain unchanged */
  </style>
</head>
<body>
  <div class="hero-section" id="hero-section">
    <div class="movie-info" id="movie-info">
      <h1 id="movie-title">Movie Title</h1>
      <p id="movie-genres">Genres: Action, Sci-Fi</p>
      <p id="movie-release-year">Release Year: 2023</p>
      <p id="movie-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis, urna sed cursus pretium, arcu tortor fermentum justo, ac interdum eros tortor vel erat. Sed at odio ac tellus dignissim ultrices non ac tortor.</p>
      <a href="#" class="watch-button">Watch Now</a>
    </div>
  </div>

  <script>
    // PHP script to fetch movie data from MySQL database
    <?php
      // Replace these lines with your actual PHP and MySQL database connection code
      $host = 'your_database_host';
      $username = 'your_database_username';
      $password = 'your_database_password';
      $database = 'your_database_name';

      $conn = mysqli_connect($host, $username, $password, $database);

      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $query = "SELECT * FROM movies ORDER BY RAND() LIMIT 1"; // Fetch a random movie
      $result = mysqli_query($conn, $query);
      $movieData = mysqli_fetch_assoc($result);

      echo "const movieData = " . json_encode($movieData) . ";";
    ?>
    // Function to update movie information on the page
    const updateMovieInfo = () => {
      document.getElementById('movie-title').innerText = movieData.title;
      document.getElementById('movie-genres').innerText = `Genres: ${movieData.genres}`;
      document.getElementById('movie-release-year').innerText = `Release Year: ${movieData.release_year}`;
      document.getElementById('movie-description').innerText = movieData.description;
    };

    // Initial update
    updateMovieInfo();

    // Simulate changing background image
    setInterval(() => {
      const randomImageURL = 'https://via.placeholder.com/1920x1080'; // Replace with actual image URL
      document.getElementById('hero-section').style.backgroundImage = `url(${randomImageURL})`;
    }, 5000); // Change image every 5 seconds
  </script>
</body>
</html>
