$(document).ready(function() {
    $(".video").hover(hoverVideo, hideVideo);
});
function hoverVideo(e) {
    var video = $(this).find('video').get(0);
    console.log(video);
    if (video) {
        video.play();
    }
}

function hideVideo() {
    var video = $(this).find('video').get(0);
    if (video) {
        video.pause();
    }
}
