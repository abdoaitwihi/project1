<?php 
$active = 'join-us';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "./includes/meta.php"?>
  <link rel="stylesheet" href="./css/stepper.css">
</head>

<body>
  <header class="container-fluid no-header-bg p-0 pt-3">
    <?php include "./includes/navigation.php"?>
  </header>
  <!-- content -->
  <section class="container-fluid my-banner bg-16  bg-responsive activite py-5">
    <div class="row h-100">
      <div class="col my-auto">
        <h1 class="text-white text-center">Let’s get started/ Join us</h1>
      </div>
    </div>
  </section>
  <section id="elementtoScrollToID" class="container-fluid py-5">
    <div class="container">
      <div class="text-center">
        <h2 class="line-under mx-auto ">
          Let’s get started / Join us
        </h2>
      </div>
      <!-- MultiStep Form -->
      <div class="container p-0 mt-5">
        <div class="stepwizard">
          <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-4">
              <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
            </div>
            <div class="stepwizard-step col-xs-4">
              <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            </div>
            <div class="stepwizard-step col-xs-4">
              <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            </div>
            <div class="stepwizard-step d-none col-xs-3">
              <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            </div>
          </div>
        </div>
        <form role="form">
          <div class="panel panel-primary setup-content px-0 contact-left-side" id="step-1">
            <h4 class="pt-5">Vos informations personnels</h4>
            <div class="row pt-3">
              <div class="col-lg-4">
                <input type="text" name="name" id="name" class="costum-input" placeholder=" Nom Complet" />
                <input type="text" name="nPass" id="nPass" class="costum-input"
                  placeholder="Numéro de passeport ou DNI" />
                <input type="text" name="country" id="country" class="costum-input" placeholder="Lieu de résidence" />
              </div>
              <div class="col-lg-4">
                <input type="text" name="number" id="number" class="costum-input" placeholder="telephone" />
                <input type="email" name="email" id="email" class="costum-input" placeholder="E-mail" />
                <select name="desiredDate" id="desiredDate">
                  <option value="" selected> Date souhaitée</option>
                  <option value="de 01 december à 15 december"> de 01 december à 15 december</option>
                  <option value="de 15 december à 30 december"> de 15 december à 30 december</option>
                </select>
              </div>
              <div class="col-12">
                <label for="terms" class="d-block mb-0">
                  <input type="checkbox" name="terms" class="mb-0" id="terms">
                  Accepter termes et conditions
                </label>
                <span id="must-check" class="d-none text-danger">You must accept the terms</span>
              </div>
            </div>
            <button class="btn get-data nextBtn float-right" type="button">Continuez <img
                src="./assets/img/join-us/flesh-suivant.png" class="d-inline ml-2" height="15px" alt=""></button>
          </div>
          <div class="panel panel-primary setup-content" id="step-2">
            <h4 class="pt-5">Vos informations personnels confoemtation</h4>
            <h4>please confirm</h4>
            <table class="mt-4">
              <tr>
                <td>Full name : </td>
                <td id="tr-name"><span class='text-danger'>you must provied your name</span></td>

              </tr>
              <tr>
                <td>Phone number</td>
                <td id="tr-number"><span class='text-danger'>you must provied your phone number</span></td>
              </tr>
              <tr>
                <td>Email</td>
                <td id="tr-email"><span class='text-danger'>you must provied your phone number</span></td>
              </tr>
              <tr>
                <td>Numéro de passeport ou DNI</td>
                <td id="tr-nPass"><span class='text-danger'>you must provied your passport number or or your DNI</span>
                </td>
              </tr>
              <tr>
                <td>Lieu de résidence</td>
                <td id="tr-country"><span class='text-danger'>you must provied your country name</span></td>
              </tr>
              <tr>
                <td>Date souhaitée</td>
                <td id="tr-desiredDate"><span class='text-danger'>you must select a date</span></td>
              </tr>
            </table>
            <hr>
            <div class="container py-3">
              <h4>Documents nécessaires </h4>
              <div class="py-2">
                <img src="./assets/img/join-us/icon-passport.png" class="d-inline mr-3" alt="">Passport
              </div>
              <div class="py-2">
                <img src="./assets/img/conditions-generales/icon-assurance-voyage.png" alt="" class="mr-3 d-inline">
                Assurance de voyage
              </div>
              <div class="py-2">
                <img src="./assets/img/conditions-generales/icon-certificat.png" alt="" class="mr-3 d-inline">
                Certificat médicale (pour réalisations d'activités sportives)
              </div>
              <div class="py-2">
                <img src="./assets/img/conditions-generales/icon-photo-passport.png" alt="" class="mr-3 d-inline">
                Photo type carte nationale ou passeport
              </div>
            </div>

            <button class="btn  prevBtn float-left" type="button"><img src="./assets/img/join-us/flesh-precedent.png"
                class="d-inline mr-2" height="15px" alt="">Precedent</button>
            <button class="btn  nextBtn float-right" type="button">Continuez <img
                src="./assets/img/join-us/flesh-suivant.png" class="d-inline ml-2" height="15px" alt=""></button>
          </div>
          <div class="panel panel-primary setup-content" id="step-3">
            <div class="container">
              <h4 class="py-4">Paiment details</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At, ut. Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Ipsa voluptatum et quos.
              </p>
              <p class="py-3 text-danger">Paiment is made via lankey</p>
            </div>

            <button class="btn  prevBtn float-left" type="button"><img src="./assets/img/join-us/flesh-precedent.png"
                class="d-inline mr-2" height="15px" alt="">Precedent</button>
            <button class="btn nextBtn float-right" type="button" name="submit-form">Envoyer <img
                src="./assets/img/join-us/flesh-suivant.png" class="d-inline ml-2" height="15px" alt=""></button>

          </div>
          <div class="panel panel-primary setup-content" id="step-4">
            <div class="container text-center py-5">
              <div class="col md-6 d-none mx-auto text-center" id="success-message">
                <h2>thank you</h2>
                <p>your demande is succssefully sent </p>
                <img src="./assets/img/join-us/btn-validation.png" width="70px" alt="">
              </div>
              <div class="col md-6 mx-auto d-none text-center text-danger" id="error-message">
                <h2>something is wrong</h2>
                <p> </p>
              </div>
              <div class="col md-6 mx-auto text-center text-success" id="loading">
                <p>plesae wait ... </p>
              </div>
              <div class="col md-6 mx-auto text-center text-danger" id="help-block">

              </div>
            </div>
          </div>
        </form>
      </div>

    </div>
  </section>
  <!-- end of content -->
  <?php include "./includes/footer.php"?>
  <?php include "./includes/scripts.php"?>
  <script src="./js/stepper.js"></script>


</body>

</html>