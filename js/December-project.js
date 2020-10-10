steps = [
  {
    text: "text1",
    imageUrl: "./assets/img/activite/restaurants-de- marrakech.png"
  },
  {
    text: "text1",
    imageUrl: "./assets/img/activite/Tour-dans-le- circuit-de-la- Palmeraie.png"
  },
  {
    text: "text1",
    imageUrl: "./assets/img/activite/Trip-au-Grand- Atlas.png"
  }
];

$(document).ready(function () {
  $(".step").click(function (e) {
    e.preventDefault();
    stepNumber = $(this).attr("number");
    console.log(steps[stepNumber].imageUrl);
    $("#step-image").fadeOut(
      function () {
        $("#step-image").attr("src", `${steps[stepNumber].imageUrl}`);
        $("#step-image").fadeIn()
      }
    );


  });
});