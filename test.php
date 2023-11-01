<?php
// Your TMDb API key
$api_key = '7d283fea76fe291d82e6391d7e60fd25';

// Movie ID for the movie you want to retrieve information about
$movie_id = 951491; // Change this to the desired movie ID

// Base URL for TMDb API
$base_url = 'https://api.themoviedb.org/3/movie/';

// Fetching movie details
$movie_url = $base_url . $movie_id . '?api_key=' . $api_key . '&append_to_response=videos,credits';

// Initialize cURL session
$curl = curl_init();

// Set cURL options
curl_setopt($curl, CURLOPT_URL, $movie_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session
$response = curl_exec($curl);

// Close cURL session
curl_close($curl);

// Decode the JSON response
$data = json_decode($response, true);

// Check if the request was successful
if ($data) {
    // Display movie details
    echo 'Title: ' . $data['title'] . '<br>';
    echo 'Overview: ' . $data['overview'] . '<br>';

    // Get categories
    $genres = array();
    foreach ($data['genres'] as $genre) {
        $genres[] = $genre['name'];
    }
    echo 'Categories: ' . implode(', ', $genres) . '<br>';

    // Get poster location
    echo 'Poster URL: https://image.tmdb.org/t/p/w500' . $data['poster_path'] . '<br>';

    // Get video link
    if (isset($data['videos']['results'][0]['key'])) {
        echo 'Video Link: https://www.themoviedb.org/video/play?key=' . $data['videos']['results'][0]['key'] . '<br>';
    }

    // Get major actors
    echo 'Major Actors:<br>';
    foreach (array_slice($data['credits']['cast'], 0, 5) as $actor) {
        echo $actor['name'] . ' as ' . $actor['character'] . '<br>';
    }

    // Display more information as needed
    // Example: Release date, runtime, etc.
} else {
    echo 'Failed to retrieve movie details.';
}
?>
