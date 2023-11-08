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