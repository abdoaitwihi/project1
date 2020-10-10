<?php 
$active = 'decouvrir';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <?php include "./includes/meta.php"?>
   </head>
   <body>
      <header class="container-fluid no-header-bg p-0 pt-3">
         <?php include "./includes/navigation.php"?>
      </header>
     <!-- content -->
     <section class="container-fluid my-banner bg-12  bg-responsive decouvrir py-5">
       <div class="row h-100">
         <div class="col my-auto">
         <h1 class="text-white text-center">Découvrir what’s ya rayh ?</h1>
         </div>
       </div>
     </section>
     <section class="container-fluid py-5 decouvrir-2  bg p-0">
         <div class="container p-0">
            <div class="text-center">
               <h2 class="line-under mx-auto ">
                  Découvrir : What’s ya rayah ??
               </h2>
            </div>
            <div class="row col-lg-8 mx-auto pt-5 postion-relative">
               <video #myvedio loop id="myVideo" class="mt-2 w-100">
                  <source src="./assets/rain.mp4" type="video/mp4" />
               </video>
               <div class="content-video">
                  <div class="text-center text-white">
                     <p class="">Présentation du concept</p>
                     <h4 class="pb-md-5">
                        What’s ya rayah ?
                     </h4>
                     <button id="myBtn" onclick="myFunction()">
                        <img src="./assets/img/home/play-video.png" alt="" />
                     </button>
                  </div>
               </div>
               <div class="pt-5 ">
                  <p>
                     Créé par des jeunes et pour les jeunes de 18 à 25 ans, nous
                     vous proposons de passer un séjour au cours duquel vous
                     pourrez découvrir la 
                      richesse culturelle de notre pays si traditionnel et
                      moderne à la fois: une seule offre et un seul prix pour
                      tellement de moments inoubliables.
                      Créé par des jeunes et pour les jeunes de 18 à 25 ans, nous vous proposons de passer un
                      séjour au cours duquel vous pourrez découvrir la richesse culturelle de notre pays si
                      traditionnel et moderne à la fois: une seule offre et un seul prix pour tellement de
                      moments inoubliables.Créé par des jeunes et pour les jeunes de 18 à 25 ans, nous vous proposons de passer un séjour au cours duquel vous pourrez découvrir la richesse culturelle de notre pays si traditionnel et moderne à la fois: une seule offre et un seul prix pour tellement de moments inoubliables.
                  </p>
               </div>
            </div>
         </div>
      </section>
     <!-- end of content -->
      <?php include "./includes/footer.php"?>
      <?php include "./includes/scripts.php"?>
      <script>
        var video = document.getElementById("myVideo");
        var btn = document.getElementById("myBtn");

        $(document).ready(function () {
           $("#myBtn").click(function (e) {
              e.preventDefault();

              if (video.paused) {
                 video.play();
                 $(".content-video").fadeOut();
              } else {
                 video.pause();
              }
           });

           $("#myVideo").hover(
              function (e) {
                 // over
                 e.preventDefault();
                 $(".content-video").fadeIn();
              },
              function () {
                 // out
                 if (!video.paused) {
                    $(".content-video").fadeOut();
                 }
              }
           );
        });
     </script>

   </body>
</html>
