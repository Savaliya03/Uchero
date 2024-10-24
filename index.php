<!-- header -->
<?php include('header/header.php'); ?>

<!-- Video Container -->
<iframe id="videoFrame" class="w-full aspect-video" src="https://www.youtube.com/embed/1QhRqM5sRNA?rel=0"
    allow="autoplay; encrypted-media" allowfullscreen></iframe>

<!-- Load YouTube Iframe API -->
<script src="https://www.youtube.com/iframe_api"></script>

<script>
    let player;

    // This function is called by the YouTube IFrame API when it's ready
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('videoFrame', {
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // This function is called when the player state changes
    function onPlayerStateChange(event) {
        if (event.data === YT.PlayerState.ENDED) {
            resetVideo();
        }
    }

    // Reset the video by seeking to the beginning
    function resetVideo() {
        player.seekTo(0);
        player.stopVideo(); // Stop the video after resetting to the beginning
    }

    // Ensure API is globally accessible
    window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;
</script>

<!-- about us -->
<?php include('footer/about.php'); ?>

<!-- footer -->
<?php include('footer/footer.php'); ?>



<!-- 
green colors

#0C3823
#25523B
#30694B
#358856
#5AAB61
#62BD69 

-->