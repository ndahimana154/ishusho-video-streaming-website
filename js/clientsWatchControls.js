const player = new Plyr('#my-video', {
    quality: {
        default: '720', // Set the default quality
        options: ['480', '720', '1080'] // Define available quality options
    }
});