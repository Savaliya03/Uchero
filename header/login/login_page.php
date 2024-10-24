<!-- login header -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/Uchhero/Project/header/login/login_header.php'); ?>

<!-- Video Container -->
<iframe id="videoFrame" class="w-full aspect-video" src="https://www.youtube.com/embed/1QhRqM5sRNA?rel=0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<script>
    // Load the IFrame Player API code asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Create an <iframe> (and YouTube player) after the API code downloads.
    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('videoFrame', {
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // When the video ends, reset the video by reloading the iframe
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.ENDED) {
            resetVideo();
        }
    }

    function resetVideo() {
        player.seekTo(0);
        player.playVideo();
    }
</script>

<!-- About Us -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/Uchhero/Project/footer/about.php'); ?>

<!-- Footer -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/Uchhero/Project/footer/footer.php'); ?>