<?php 
$active = 'condition-generales';
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
  <section class="container-fluid my-banner bg-15  bg-responsive activite py-5">
    <div class="row h-100">
      <div class="col my-auto">
        <h1 class="text-white text-center">Conditions générales</h1>
      </div>
    </div>
  </section>
  <section class="container-fluid py-5">
    <div class="text-center">
      <h2 class="line-under mx-auto ">
        Conditions générales
      </h2>
    </div>
    <div class="container p-0 mt-5 my-tabs">

      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link px-0 mx-3" data-toggle="tab" href="#menu1">Paiments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-0 mx-3" data-toggle="tab" href="#menu2">Remboursements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-0 mx-3 active" data-toggle="tab" href="#menu3">Conditions pour réaliser le voyage</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content pt-4">
        <div class="tab-pane container" id="menu1">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, possimus doloribus facere expedita
            fugiat repellendus quidem natus obcaecati, beatae, fuga architecto. Deleniti distinctio numquam blanditiis
            quod id ipsam expedita illo.</p>
        </div>
        <div class="tab-pane container" id="menu2">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis nam iure quo facilis ea ex, alias
            aliquam neque laborum vero eaque dolorum! Et tenetur magnam, sunt voluptatem vitae corporis eos cupiditate
            eum nesciunt ex mollitia rem dicta. Aperiam, recusandae nostrum.</p>
        </div>
        <div class="tab-pane active container" id="menu3">
          <ul>
            <li>
              Il faut rassembler un minimum de 14 personnes par voyage pour pouvoir mener à bout l'événement.
            </li>
            <li>
              Chaque voyageur sera doté d'une réservation du Riad, pour être autorisé à effectuere voyage au Maroc
              (réglementation Covid-19), ainsi que:
            </li>
          </ul>
          <div class="row">
            <div class="col-lg-6">
              <div class="py-3">
                <img src="./assets/img/conditions-generales/icon-passport.png" alt="" class="mr-3 d-inline"> Passport
              </div>
              <div class="py-3">
                <img src="./assets/img/conditions-generales/icon-assurance-voyage.png" alt="" class="mr-3 d-inline">
                Assurance de voyage
              </div>
            </div>
            <div class="col-lg-6">
              <div class="py-3">
                <img src="./assets/img/conditions-generales/icon-certificat.png" alt="" class="mr-3 d-inline">
                Certificat médicale (pour réalisations d'activités sportives)
              </div>
              <div class="py-3">
                <img src="./assets/img/conditions-generales/icon-photo-passport.png" alt="" class="mr-3 d-inline">
                Photo type carte nationale ou passeport
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end of content -->
  <?php include "./includes/footer.php"?>
  <?php include "./includes/scripts.php"?>


</body>

</html>