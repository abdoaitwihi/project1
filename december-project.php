<?php 
$active = 'december-project';
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
  <section class="container-fluid my-banner bg-14  bg-responsive activite py-5">
    <div class="row h-100">
      <div class="col my-auto">
        <h1 class="text-white text-center">December project</h1>
      </div>
    </div>
  </section>
  <section class="container-fluid dec-pro py-5">
    <div class="container p-0">
      <div class="text-center">
        <h2 class="line-under mx-auto ">
          December Project
        </h2>
      </div>
      <div class="row mt-5">
        <div class="col-lg-6 second">
          <div number="0" class="p-3 back-orange step">
            <h3>1er jour</h3>
            <p class="m-0">
              Arrivée en fin d'après midi à l'aéroport de Marrakech.
              Installation des voyageurs au sein du Riyad.
              Un premier groupe de 14 personnes ira dîner à Jamaa El Fna. Irentreront ensuite au Riyad
            </p>
          </div>
          <div number="1" class="p-3 step">
            <h3>2ème Jour</h3>
            <p class="m-0">
              En dehors de Marrakech (seront géré par des moniteurs spéciaux)
              et comprendront des activités d’aventures diverses
            </p>
          </div>
          <div number="2" class="p-3 step">
            <h3>3ème Jour</h3>
            <p class="m-0">
              sortie en chameau à la Palmeraie tôt le matin, visite de village et trip au Grand Atlas).
            </p>
          </div>
          <div number="3" class="p-3 step">
            <h3>4ème Jour</h3>
            <p class="m-0">
              Même programme que celui du premier jour, mais les groupes s’inversent.
              Un groupe de 14 personnes ira dîner à Jamaa El Fna.
            </p>
          </div>
          <div number="4" class="p-3 step">
            <h3>5ème jour</h3>
            <p class="m-0">
              Tour en Montgolfière le matin.
              Finalement, accompagnement des voyageurs à l'aéroport.
            </p>
          </div>
        </div>
        <div class="col-lg-6 first">
          <div class="div-step-image">
            <img class="w-100" id="step-image" src="./assets/img/december-project/img-1-jours-restau.jpg" alt="">
            <div class="sec-image-container">
              <div class="row p-2">
                <div class="col-4 h-100">
                  <img id="sec-img-0" src="./assets/img/december-project/img-1-jours-aeroport.jpg" alt="" class="w-100">
                </div>
                <div class="col-4 h-100">
                  <img id="sec-img-1" src="./assets/img/december-project/img-1-jours-riyad.jpg" alt="" class="w-100">
                </div>
                <div class="col-4 h-100">
                  <img id="sec-img-2" src="./assets/img/december-project/img-1-jours-restau.jpg" alt=""
                    class="w-100 orange-border">
                </div>

              </div>
            </div>
          </div>
          <p class="mt-3 mb-0" id="step-text">
            Arrivée en fin d'après midi à l'aéroport de Marrakech.
            Installation des voyageurs au sein du Riyad.
            Un premier groupe de 14 personnes ira dîner à Jamaa El Fna. Ils rentreront ensuite au Riyad
            ou ils passeront une soirée traditionnelle avec ambiance marocaine (Dekka Marrakchia)
            Un deuxième groupe ira passer une soirée dans un restaurant chic (animation comprise) de Marrakech.

          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid pb-5 join-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <h3 class="pt-5 mt-md-3">réserver en 3 étapes</h3>
          <p class="mb-4">
            Inpendio indignitatis formidatam haut extrusis inopiam
            dudum est paucis ab id totidemque veri disciplinarum
            sectatoribus milia dudum sine ab interpellata dudum quidem
            ut ad peregrini tenerentur magistris ad cum choris.
          </p>
          <a href="./join-us.php" class="primary-btn">Réserver</a>
        </div>
      </div>
    </div>
  </section>

  <!-- end of content -->
  <?php include "./includes/footer.php"?>
  <?php include "./includes/scripts.php"?>

  <script src="./js/December-project.js"></script>
</body>

</html>