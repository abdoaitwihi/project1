<div class="container-fluid p-0 header">
   <div class="container p-0">
      <nav class="navbar navbar-expand-lg navbar-dark">
         <!-- Brand -->

         <a class="navbar-brand" href="./index.php">
            <?php if($active == "home") { ?>
            <img src="./assets/img/home/logo-ya-ray7.png" alt="" />
            <?php }else { ?>
            <img src="./assets/img/logo.png" alt="" />
            <?php } ?>
         </a>
         <div class="ml-auto"></div>

         <!-- Toggler/collapsibe Button -->
         <div class="dropdown languge-button">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
               <img src="./assets/img/home/icon-france.png" class="mr-1" alt="" />
               FR
            </button>
            <div class="dropdown-menu">
               <a class="dropdown-item" href="#">
                  <img src="./assets/img/home/icon-english.png" class="mr-1" alt="" />
                  English</a>
               <a class="dropdown-item" href="#">
                  <img src="./assets/img/home/icon-spanish.png" class="mr-1" alt="" />
                  Español</a>
            </div>
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <img src="./assets/img/menu-icon.png" width="30px" alt="" />
         </button>

         <!-- Navbar links -->
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
               <li class="nav-item <?php  if($active == 'home') echo 'active'?>">
                  <a class="nav-link " href="./index.php">Accueil</a>
               </li>
               <li class="nav-item <?php  if($active == 'decouvrir') echo 'active'?>">
                  <a class="nav-link" href="./decouvrir.php">Découvrir</a>
               </li>
               <li class="nav-item <?php  if($active == 'activite') echo 'active'?>">
                  <a class="nav-link " href="./activite.php">Activités </a>
               </li>
               <li class="nav-item <?php  if($active == 'december-project') echo 'active'?>">
                  <a class="nav-link" href="./december-project.php">December project </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Join us </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Contact us </a>
               </li>
               <li class="nav-item d-lg-none d-xl-block">
                  <a class="nav-link" href="#">Conditions générales
                  </a>
               </li>
            </ul>
         </div>
      </nav>
   </div>
</div>