<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Player</title>
</head>

<body>
    <video id="myVideo" width="640" height="360">
        <source src="./Videos/video-low.mp4" type="video/mp4" data-size="480">
        <source src="./Videos/video-medium.mp4" type="video/mp4" data-size="720">
        Your browser does not support the video tag.
    </video>

    <button id="playBtn">Play/Pause</button>
    <button id="rewindBtn">Rewind</button>
    <button id="forwardBtn">Fast Forward</button>
    <input type="range" id="volumeRange" min="0" max="100">
    <input type="range" id="progressRange" min="0" max="100" value="0" step="0.1">
    <div id="timeDisplay">0:00 / 0:00</div>
    <button id="fullscreenBtn">Fullscreen</button>
    <select id="qualitySelect">
        <option value="./Videos/video-low.mp4">480p</option>
        <option value="./Videos/video-medium.mp4">720p</option>
    </select>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const video = document.getElementById("myVideo");

            // Play/Pause functionality
            const playButton = document.getElementById("playBtn");
            playButton.addEventListener("click", function() {
                if (video.paused) {
                    video.play();
                } else {
                    video.pause();
                }
            });

            // Update progress bar as the video plays
            video.addEventListener('timeupdate', function() {
                const progress = (video.currentTime / video.duration) * 100;
                document.getElementById("progressRange").value = progress;

                // Display elapsed and remaining time
                const timeDisplay = document.getElementById("timeDisplay");
                const elapsedMinutes = Math.floor(video.currentTime / 60);
                const elapsedSeconds = Math.floor(video.currentTime - elapsedMinutes * 60);
                const totalMinutes = Math.floor(video.duration / 60);
                const totalSeconds = Math.floor(video.duration - totalMinutes * 60);
                timeDisplay.textContent = `${elapsedMinutes}:${(elapsedSeconds < 10 ? '0' : '') + elapsedSeconds} / ${totalMinutes}:${(totalSeconds < 10 ? '0' : '') + totalSeconds}`;
            });

            // Rewind functionality
            const rewindButton = document.getElementById("rewindBtn");
            rewindButton.addEventListener("click", function() {
                video.currentTime -= 10; // Go back 10 seconds
            });

            // Fast-Forward functionality
            const forwardButton = document.getElementById("forwardBtn");
            forwardButton.addEventListener("click", function() {
                video.currentTime += 10; // Skip ahead 10 seconds
            });

            // Volume control
            const volumeSlider = document.getElementById("volumeRange");
            volumeSlider.addEventListener("input", function() {
                video.volume = volumeSlider.value / 100;
            });

            // Fullscreen mode
            const fullscreenButton = document.getElementById("fullscreenBtn");
            fullscreenButton.addEventListener("click", function() {
                if (video.requestFullscreen) {
                    video.requestFullscreen();
                } else if (video.mozRequestFullScreen) {
                    video.mozRequestFullScreen();
                } else if (video.webkitRequestFullscreen) {
                    video.webkitRequestFullscreen();
                }
            });

            // Quality switch
            const qualitySelect = document.getElementById("qualitySelect");
            qualitySelect.addEventListener("change", function() {
                const selectedSource = qualitySelect.value;
                video.src = selectedSource;
                video.load();
                video.play();
            });
        });
    </script>
</body>

</html>