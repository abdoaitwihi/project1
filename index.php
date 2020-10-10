<?php 
$active = 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include "./includes/meta.php"?>

</head>

<body>
   <header class="container-fluid p-0 pt-3">
      <?php include "./includes/navigation.php"?>
      <?php include "./includes/header.php"?>
   </header>
   <section class="container-fluid py-5 bg-1 home-sec-1 bg p-0">
      <div class="container p-0">
         <div class="text-center">
            <h2 class="line-under mx-auto text-white">
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
            <div class="pt-5 text-white">
               <p>
                  Créé par des jeunes et pour les jeunes de 18 à 25 ans, nous
                  vous proposons de passer un séjour au cours duquel vous
                  pourrez découvrir la
                  <span>
                     richesse culturelle de notre pays si traditionnel et
                     moderne à la fois: une seule offre et un seul prix pour
                     tellement de moments inoubliables.
                  </span>
               </p>

               <a href="./decouvrir.php" class="lire-suite text-white">
                  <span> Lire la suite</span>
               </a>
            </div>
         </div>
      </div>
   </section>
   <section class="container-fluid pt-5 activite">
      <div class="container">
         <div class="text-center">
            <h2 class="line-under">Activités que nous offrons</h2>
         </div>
      </div>
      <div class="container-fluid mt-5">
         <div class="row">
            <div class="col-lg-12">
               <div class="nos-offres owl-carousel">
                  <div class="single-offre bg-7 bg">
                     <div class="overlay"></div>
                     <div class="row h-100">
                        <div class="col mt-auto pl-4 pb-2 text-white position-relative">
                           <p>haut atlas</p>
                           <h3>Trip au grand atlas</h3>
                           <a href="" class="clean-a">
                              <img src="./assets/img/home/btn-play-video.png" width="" alt="" />
                              Explorer
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="single-offre bg-8 bg">
                     <div class="overlay"></div>
                     <div class="row h-100">
                        <div class="col mt-auto pl-4 pb-2 text-white position-relative">
                           <p>haut atlas</p>
                           <h3>Trip au grand atlas</h3>
                           <a href="" class="clean-a">
                              <img src="./assets/img/home/btn-play-video.png" width="" alt="" />
                              Explorer
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="single-offre bg-9 bg">
                     <div class="overlay"></div>
                     <div class="row h-100">
                        <div class="col mt-auto pl-4 pb-2 text-white position-relative">
                           <p>haut atlas</p>
                           <h3>Trip au grand atlas</h3>
                           <a href="" class="clean-a">
                              <img src="./assets/img/home/btn-play-video.png" width="" alt="" />
                              Explorer
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="single-offre bg-10 bg">
                     <div class="overlay"></div>
                     <div class="row h-100">
                        <div class="col mt-auto pl-4 pb-2 text-white position-relative">
                           <p>haut atlas</p>
                           <h3>Trip au grand atlas</h3>
                           <a href="" class="clean-a">
                              <img src="./assets/img/home/btn-play-video.png" width="" alt="" />
                              Explorer
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="single-offre bg-11 bg">
                     <div class="overlay"></div>
                     <div class="row h-100">
                        <div class="col mt-auto pl-4 pb-2 text-white position-relative">
                           <p>haut atlas</p>
                           <h3>Trip au grand atlas</h3>
                           <a href="" class="clean-a">
                              <img src="./assets/img/home/btn-play-video.png" width="" alt="" />
                              Explorer
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="single-offre bg-7 bg">
                     <div class="overlay"></div>
                     <div class="row h-100">
                        <div class="col mt-auto pl-4 pb-2 text-white position-relative">
                           <p>haut atlas</p>
                           <h3>Trip au grand atlas</h3>
                           <a href="" class="clean-a">
                              <img src="./assets/img/home/btn-play-video.png" width="" alt="" />
                              Explorer
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="container-fluid py-5 join-us">
      <div class="container">
         <div class="text-center">
            <h2 class="line-under">Let’s get started / Join us</h2>
         </div>
         <h3 class="pt-5 mt-md-3">Comment réserver ? en 3 étapes</h3>
         <div class="row">
            <div class="col-md-5 my-3">
               <p>
                  Inpendio indignitatis formidatam haut extrusis inopiam
                  dudum est paucis ab id totidemque veri disciplinarum
                  sectatoribus milia dudum sine ab interpellata dudum quidem
                  ut ad peregrini tenerentur magistris ad cum choris.
               </p>
            </div>
         </div>
         <a href="" class="primary-btn">Réserver</a>
      </div>
   </section>
   <section class="container-fluid py-5 confiance bg">
      <div class="container">
         <div class="text-center pb-3">
            <h2 class="line-under text-white">Ils nous font confiance</h2>
         </div>
         <div class="row pt-5">
            <div class="col-lg-12">
               <div class="font-confiance owl-carousel">
                  <div class="font-confiance-inner bg">
                     <div class="">
                        <img class="quet-image mx-auto" src="./assets/img/home/quote-icon.png" width="30px" alt="" />
                        <p class="text-white pt-5 pb-4">
                           Inpendio indignitatis formidatam haut extrusis
                           inopiam dudum est paucis ab id totidemque veri
                           disciplinarum sectatoribus milia dudum sine ab
                           interpellata dudum quidem ut ad peregrini
                           tenerentur magistris ad cum choris.
                        </p>
                        <img class="face-image mx-auto mb-3" src="./assets/img/home/img-notre-programe.jpg" alt="" />
                        <h4 class="text-center text-uppercase mb-0">
                           emma louise
                        </h4>
                        <p class="text-center text-white">professeur</p>
                     </div>
                  </div>
                  <div class="font-confiance-inner bg">
                     <div class="">
                        <img class="quet-image mx-auto" src="./assets/img/home/quote-icon.png" width="30px" alt="" />
                        <p class="text-white pt-5 pb-4">
                           Inpendio indignitatis formidatam haut extrusis
                           inopiam dudum est paucis ab id totidemque veri
                           disciplinarum sectatoribus milia dudum sine ab
                           interpellata dudum quidem ut ad peregrini
                           tenerentur magistris ad cum choris.
                        </p>
                        <img class="face-image mx-auto mb-3" src="./assets/img/home/img-notre-programe.jpg" alt="" />
                        <h4 class="text-center text-uppercase mb-0">
                           emma louise
                        </h4>
                        <p class="text-center text-white">professeur</p>
                     </div>
                  </div>
                  <div class="font-confiance-inner bg">
                     <div class="">
                        <img class="quet-image mx-auto" src="./assets/img/home/quote-icon.png" width="30px" alt="" />
                        <p class="text-white pt-5 pb-4">
                           Inpendio indignitatis formidatam haut extrusis
                           inopiam dudum est paucis ab id totidemque veri
                           disciplinarum sectatoribus milia dudum sine ab
                           interpellata dudum quidem ut ad peregrini
                           tenerentur magistris ad cum choris.
                        </p>
                        <img class="face-image mx-auto mb-3" src="./assets/img/home/img-notre-programe.jpg" alt="" />
                        <h4 class="text-center text-uppercase mb-0">
                           emma louise
                        </h4>
                        <p class="text-center text-white">professeur</p>
                     </div>
                  </div>
                  <div class="font-confiance-inner bg">
                     <div class="">
                        <img class="quet-image mx-auto" src="./assets/img/home/quote-icon.png" width="30px" alt="" />
                        <p class="text-white pt-5 pb-4">
                           Inpendio indignitatis formidatam haut extrusis
                           inopiam dudum est paucis ab id totidemque veri
                           disciplinarum sectatoribus milia dudum sine ab
                           interpellata dudum quidem ut ad peregrini
                           tenerentur magistris ad cum choris.
                        </p>
                        <img class="face-image mx-auto mb-3" src="./assets/img/home/img-notre-programe.jpg" alt="" />
                        <h4 class="text-center text-uppercase mb-0">
                           emma louise
                        </h4>
                        <p class="text-center text-white">professeur</p>
                     </div>
                  </div>
                  <div class="font-confiance-inner bg">
                     <div class="">
                        <img class="quet-image mx-auto" src="./assets/img/home/quote-icon.png" width="30px" alt="" />
                        <p class="text-white pt-5 pb-4">
                           Inpendio indignitatis formidatam haut extrusis
                           inopiam dudum est paucis ab id totidemque veri
                           disciplinarum sectatoribus milia dudum sine ab
                           interpellata dudum quidem ut ad peregrini
                           tenerentur magistris ad cum choris.
                        </p>
                        <img class="face-image mx-auto mb-3" src="./assets/img/home/img-notre-programe.jpg" alt="" />
                        <h4 class="text-center text-uppercase mb-0">
                           emma louise
                        </h4>
                        <p class="text-center text-white">professeur</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container pt-4">
            <button class="lire-suite text-white mx-auto">
               <span> Voir tous les avis</span>
            </button>
         </div>
      </div>
   </section>
   <section class="container-fluid bg py-5 notre-programme">
      <div class="container p-0 px-2">
         <div class="text-center pb-3">
            <h2 class="line-under">Notre programe</h2>
         </div>
         <div class="row mt-5">
            <div class="col-lg-6">
               <div class="trip-image h-100 bg">
                  <div class="row h-100">
                     <div class="col my-auto text-center trip py-5 px-3">
                        <h3>Voyager au meilleur prix</h3>
                        <a href=""> 949 euros </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 pb-3 pt-4 pt-lg-0">
               <h2 class="text-uppercase pb-3">NOTRE PROGRAME</h2>
               <p>
                  <strong>en cas de voyage de 2 groupes de 14 personnes= 28
                     personnes</strong>
               </p>
               <p class="pb-4">
                  Utque aegrum corpus quassari etiam levibus solet offensis,
                  ita animus eius angustus et tener, quicquid increpuisset,
                  ad salutis suae dispendium existimans factum aut cogitatum,
                  insontium caedibus fecit victoriam luctuosam. Utque aegrum
                  corpus quassari etiam levibus solet offensis, ita animus
                  eius angustus et tener, quicquid increpuisset, ad salutis
                  suae dispendium existimans factum aut cogitatum, insontium
                  caedibus fecit victoriam luctuosam.
               </p>
               <div class="row">
                  <a href="" class="primary-btn mx-3 my-1">Télécharger la brochure</a>

                  <a href="" class="primary-btn mx-3 my-1">Télécharger la brochure</a>
               </div>
            </div>
         </div>
         <div class="py-4"></div>
         <div class="text-center pb-3">
            <h2 class="line-under">Contact Us</h2>
         </div>
         <div class="row contact-sec">
            <div class="col-lg-7 contact-left-side py-3 pb-1">
               <h3>Contanct form</h3>
               <form action="">
                  <div class="row">
                     <div class="col-md-6">
                        <input type="text" name="fname" class="costum-input" placeholder="Nom" />
                     </div>
                     <div class="col-md-6">
                        <input type="text" name="email" class="costum-input" placeholder="Email" />
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <input type="text" name="subject" class="costum-input" placeholder="Sujet" />
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <textarea class="costum-text-area" name="message" id="" cols="30" rows="10"
                           placeholder="Message"></textarea>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <button type="submit" class="primary-btn">
                           Envoyez le message
                        </button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-lg-5 row mx-0 contact-right-side bg p-4 text-white">
               <div class="col-12">
                  <h3 class="mb-4">Contact Information</h3>
                  <img src="./assets/img/home/icon-adresse.png" class="d-inline" alt="" />
                  Adresse
                  <p class="mt-2 mb-4 pl-4">
                     Ut his mulier vel locata exultans nocendum ut locata ei
                     exultans paria Constantina alios emisit ad quae.
                  </p>
                  <img src="./assets/img/home/icon-adresse.png" class="d-inline" alt="" />
                  Téléphone
                  <p class="mt-2 mb-4 pl-4">
                     +212 000 000 000 <br />
                     +212 000 000 000
                  </p>
                  <img src="./assets/img/home/icon-adresse.png" class="d-inline" alt="" />
                  E-mail
                  <p class="mt-2 mb-4 pl-4">Contact@yaray7.com</p>
               </div>
               <div class="col-12 mt-auto">
                  <p class="mb-0 d-inline float-right">
                     Suivez nous :
                     <a href="">
                        <img class="ml-3" src="./assets/img/home/icon-facebook.png" alt="" />
                     </a>
                     <a href="">
                        <img src="./assets/img/home/icon-instagram.png" alt="" />
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php include "./includes/footer.php"?>
   <?php include "./includes/scripts.php"?>


   <script src="./js/video.js"></script>

</body>

</html>