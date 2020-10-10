var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

$(document).ready(function () {
  $("#myBtn").click(function (e) {
    e.preventDefault();

    if (video.paused) {
      video.play();
      $(".content-video").fadeOut();
      $("#myVideo").attr("controls", "true");
    } else {
      video.pause();
    }
  });


});