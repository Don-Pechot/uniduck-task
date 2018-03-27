import YouTubePlayer from 'youtube-player';

// Video Component
(function playVideo() {

  function getYTVideoID( url ) {
    var videoID = url.split('v=')[1];
    var ampersandPosition = videoID.indexOf('&');
    if(ampersandPosition != -1) {
      videoID = videoID.substring(0, ampersandPosition);
    }
    return videoID;
  }

  var videoTrigger = $('.video .video__thumbnail');
  videoTrigger.click(function() {
    var vID = getYTVideoID($(this).data('video'));
    var uniq = $(this).data('uniq');
    var options = {
      width: '640',
      height: '360',
      autoplay: 1,
      modestbranding: 1,
      showinfo: 0,
    };
    let player;
    player = YouTubePlayer(uniq, options);
    player.loadVideoById(vID);
  });
})();
