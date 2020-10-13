steps = [
  {
    text: `Arrivée en fin d'après midi à l'aéroport de Marrakech.
    Installation des voyageurs au sein du Riyad. <br>
    Un premier groupe de 14 personnes ira dîner à Jamaa El Fna.Ils rentreront ensuite au Riyad
    ou ils passeront une soirée traditionnelle avec ambiance marocaine(Dekka Marrakchia)
    Un deuxième groupe ira passer une soirée dans un restaurant chic(animation comprise) de Marrakech.
    `,
    imageUrl: "./assets/img/december-project/img-1-jours-restau.jpg",
    secImage: [
      "./assets/img/december-project/img-1-jours-aeroport.jpg",
      "./assets/img/december-project/img-1-jours-riyad.jpg",
      "./assets/img/december-project/img-1-jours-restau.jpg"
    ]
  }
  ,
  {
    text: `Arrivée en fin d'après midi à l'aéroport de Marrakech.
    Installation des voyageurs au sein du Riyad. <br>
    Un premier groupe de 14 personnes ira dîner à Jamaa El Fna.Ils rentreront e`,
    imageUrl: "./assets/img/december-project/img-2-jours-atlas.jpg",
    secImage: [
      "./assets/img/december-project/img-2-jours-quad.jpg",
      "./assets/img/december-project/img-2-jours-palm.jpg",
      "./assets/img/december-project/img-2-jours-atlas.jpg"
    ]
  }
  ,
  {
    text: `Arrivée en fin d'après midi à l'aéroport de Marrakech.
    Installation des voyageurs au sein du Riyad. <br>
    Un premier groupe de 14 personnes ira dîner à Jamaa El Fna.Ils rentreront e`,
    imageUrl: "./assets/img/december-project/img-3-jours-sahara.jpg",
    secImage: [
      "./assets/img/december-project/img-3-jours-village.jpg",
      "./assets/img/december-project/img-3-jours-sahara-nuit.jpg",
      "./assets/img/december-project/img-3-jours-sahara.jpg"
    ]
  }
  ,
  {
    text: `Arrivée en fin d'après midi à l'aéroport de Marrakech.
    Installation des voyageurs au sein du Riyad. <br>
    Un premier groupe de 14 personnes ira dîner à Jamaa El Fna.Ils rentreront ensuite au Riyad
    ou ils passeront une soirée traditionnelle avec ambiance marocaine(Dekka Marrakchia)
    Un deuxième groupe ira passer une soirée dans un restaurant chic(animation comprise) de Marrakech.
    `,
    imageUrl: "./assets/img/december-project/img-1-jours-restau.jpg",
    secImage: [
      "./assets/img/december-project/img-1-jours-aeroport.jpg",
      "./assets/img/december-project/img-1-jours-riyad.jpg",
      "./assets/img/december-project/img-1-jours-restau.jpg"
    ]
  }
  ,
  {
    text: `Arrivée en fin d'après midi à l'aéroport de Marrakech.
    Installation des voyageurs au sein du Riyad. <br>
    Un premier groupe de 14 personnes ira dîner à Jamaa El Fna.Ils rentreront e`,
    imageUrl: "./assets/img/december-project/img-5-jours-aeroport.jpg",
    secImage: [
      "./assets/img/december-project/img-5-jours-montogolfier.jpg",
      "./assets/img/december-project/img-5-jours-montogo.jpg",
      "./assets/img/december-project/img-5-jours-aeroport.jpg"
    ]
  }
];

$(document).ready(function () {
  $(".step").click(function (e) {
    $([document.documentElement, document.body]).animate({
      scrollTop: $("#step-image").offset().top - 100
    }, 500);
    e.preventDefault();
    $(".sec-image-container img").removeClass("orange-border");
    $("#sec-img-2").addClass("orange-border");
    $(".step").removeClass('back-orange');
    $(this).addClass('back-orange');
    stepNumber = $(this).attr("number");
    console.log(steps[stepNumber].imageUrl);
    $("#step-image").fadeOut(
      function () {
        $("#step-image").attr("src", `${steps[stepNumber].imageUrl}`);
        $("#step-image").fadeIn()
      }
    );
    $("#step-text").fadeOut(
      function () {
        $("#step-text").html(`${steps[stepNumber].text}`);
        $("#step-text").fadeIn()
      }
    );
    $(".sec-image-container img").fadeOut();
    for (let i = 0; i < 3; i++) {
      $(`#sec-img-${i}`).fadeOut(
        function () {
          $(`#sec-img-${i}`).attr("src", `${steps[stepNumber].secImage[i]}`);
          $(`#sec-img-${i}`).fadeIn()
        }
      );
    }


  });
  $(".sec-image-container img").click(function (e) {
    e.preventDefault();
    src = $(this).attr("src");
    console.log(src)
    $(".sec-image-container img").removeClass("orange-border");
    $(this).addClass("orange-border");
    $("#step-image").attr("src", `${src}`);
  });
});