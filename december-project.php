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
  <section class="container-fluid my-banner bg-12  bg-responsive activite py-5">
    <div class="row h-100">
      <div class="col my-auto">
        <h1 class="text-white text-center">Découvrir what’s ya rayh ?</h1>
      </div>
    </div>
  </section>
  <div class="container">

    <div class="row">
      <div class="col-lg-6">
        <ul>
          <li id="step-1" class="step" number="0">etape 1</li>
          <li id="step-2" class="step" number="1">etape 2</li>
          <li id="step-3" class="step" number="2">etape 3</li>
        </ul>

      </div>
      <div class="col-lg-6">
        <img class="w-100" id="step-image" src="./assets/img/activite/Trip-au-Grand- Atlas.png" alt="">
      </div>
    </div>
  </div>

  <!-- end of content -->
  <?php include "./includes/footer.php"?>
  <?php include "./includes/scripts.php"?>

  <script src="./js/December-project.js"></script>
</body>

</html>