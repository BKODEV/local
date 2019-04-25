<?php
  if(!empty($_GET)){
    if($_GET['err'] == 1){
      ?> <script>alert("Votre connexion n'a pas pu être effectée vérifiez vos information")</script><?php
    }elseif($_GET['err'] == 2){
        ?><script>alert('Erreur inscription non éffectuée')</script><?php
    }elseif($_GET['err'] == 3){
      ?><script>alert('Votre demande de dévis à été effectuée avec succès')</script><?php
    }elseif($_GET['err'] == 5){
      ?><script>alert('Inscription éffectuée')</script><?php
    }elseif($_GET['err'] == 4){
      ?><script>alert('Vous avez été déconnecté')</script><?php
    }else{

    }
  }
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.modal.min.css">
</head>
<body>

  <!--Navbar --> <?php require("nav.php")?><!--/.Navbar -->
  <?php require("formulaire-ins-con.php");?>
        
        <!--Carousel Wrapper-->
  <div id="acceuil-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#acceuil-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#acceuil-carousel" data-slide-to="1"></li>
      <li data-target="#acceuil-carousel" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="images/bateau.jpg"
            alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Construction navale</h3>
          <p>Votre navire en quelques click</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="images/construction_site.jpeg"
            alt="Second slide">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Construction metalique</h3>
          <p>Nous contruisons vos rêve!!!</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="images/immobilier.jpeg"
            alt="Third slide">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Construction immobilière</h3>
          <p>Construction en sécurisée</p>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#acceuil-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#acceuil-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
    <!--/.Carousel Wrapper-->

  <section class="ftco-intro">
        <div class="container-wrap">
          <div class="wrap d-md-flex">
            <div class="info">
              <div class="row no-gutters">
                <div class="col-md-4 d-flex ftco-animate">
                  <div class="icon"><i class="fas fa-tty ico-social ico-social-left"></i></span></div>
                  <div class="text">
                    <h3>000 (225) 000 0000</h3>
                    <p>Build on Click</p>
                  </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                  <div class="icon"><i class="fas fa-map-marker ico-social ico-social-left"></i></div>
                  <div class="text">
                    <h3>Abidjan Cocody</h3>
                    <p>Angre 8ieme tranche</p>
                  </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                  <div class="icon"><i class="fas fa-clock ico-social ico-social-left"></i></span></div>
                  <div class="text">
                    <h3>Ouvert Lundi-Vendredi</h3>
                    <p>8:00am - 9:00pm</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="social d-md-flex pl-md-5 p-4 align-items-center">
              <ul class="social-icon">
                <li class="ftco-animate"><a href="#"><i class="fab fa-facebook-square ico-social"></i></a></li>
                <li class="ftco-animate"><a href="#"><i class="fab fa-instagram ico-social"></i></i></span></a></li>
                <li class="ftco-animate"><a href="#"><i class="fab fa-twitter-square ico-social"></i></i></span></a></li>
              </ul>
            </div>
          </div>
        </div>
  </section>

    
  <div class="container-fluid" style="margin:0 !important; padding:0 !important;">
  
          <!--section de presentation-->
      <section id="section-about">
        <div class="row">
          <div class="col-md-6" style="margin:0 !important; padding:0 !important;">
            <img  src="images/constructionnavale.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-6" style="background: url('images/bg-s1.jpeg') no-repeat">
            <p>Nous sommes</p>
          </div>
        </div>
      </section><!--section de presentation end-->


      <section class="construction" >
      <div class="row">
        <div class="col-sm-8 offset-sm-2 titre-container">
          <h1 class="titre">Construction</h1>
          <p>Construisez quelques soit l'endroit ou vous vous trouvez avec Build on Click</p>
        </div>
      </div>
                <!-- Grid row -->
        <div class="row text-center">

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <img src="images/constructionsitesmall.jpeg" class="img-fluid" alt="Sample project image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Excerpt-->
          <div class="card-body pb-0">
            <h4 class="font-weight-bold my-3">Construction navale</h4>
            <p class="grey-text">Nous disposons d'un chantier qui peut acceuillir tout sorte de projet de construction navale et d'une équipe qualifiée pour vous fournir un travail de qualité.
            </p>
            <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i>En savoir plus</a>
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <img src="images/constructionmettallique1small.jpg" class="img-fluid" alt="Sample project image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Excerpt-->
          <div class="card-body pb-0">
            <h4 class="font-weight-bold my-3">Construction metalique</h4>
            <p class="grey-text">Confiez nous toutes sortes de construction metalique, nous vous offrirons un rendement exceptionnel!!!</p>
            <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i>En savoir plus</a>
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <img src="images/maisonsmall.jpeg" class="img-fluid" alt="Sample project image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Excerpt-->
          <div class="card-body pb-0">
            <h4 class="font-weight-bold my-3">Construction immobilière</h4>
            <p class="grey-text">Vous êtes à l'exterieur? vous ne maitrisez pas le domaine de la construction? n'avez vous pas le temps? confiez nous la construction de votre maison
            </p>
            <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i>En savoir plus</a>
          </div>
        </div>
      </section> <!--end section construction-->

<!-- Projects section v.3 -->
<section class="my-5 why-us" style="padding:5px !important;">

  <!-- Section heading -->
  <div class="row">
    <div class="col-sm-8 offset-sm-2 titre-container">
      <h1 class="titre">Pourquoi-nous?</h1>
    </div>
    </div>
  <!-- Section description -->
  <p class="grey-text text-center w-responsive mx-auto mb-5">Build on Click vous facilite vos traveau de construction et vous pouvez en temps réel verifier l'évolution de votre projet.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 mb-lg-0 mb-5">
      <!--Image-->
      <img src="images/machine.jpg" alt="Sample project image" class="img-fluid rounded z-depth-1">
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Grid row -->
      <div class="row mb-3">
        <div class="col-md-1 col-2">
          <i class="fas fa-book fa-2x cyan-text"></i>
        </div>
        <div class="col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Une equipe dynamique</h5>
          <p class="grey-text">Build on Click c'est d'abord une équipe dynamique qui repond à vos exigences à n'importe quel moment.</p>
        </div>
      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">
        <div class="col-md-1 col-2">
          <i class="fas fa-code fa-2x red-text"></i>
        </div>
        <div class="col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Equipe de Professionnel</h5>
          <p class="grey-text">Des Professionnel à votre services pour transformer vos rêves en réaliatés</p>
        </div>
      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row">
        <div class="col-md-1 col-2">
          <i class="far fa-money-bill-alt fa-2x deep-purple-text"></i>
        </div>
        <div class="col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Delai d'éxecution</h5>
          <p class="grey-text mb-0">En plus de disposer une equpe dynamique et Professionnel BuiLD On Click vous livre votre travail avant la fin du delai d'éxecution</p>
        </div>
      </div>
      <!-- Grid row -->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Grid row -->
      <div class="row mb-3">
        <div class="col-md-1 col-2">
          <i class="far fa-chart-bar fa-2x indigo-text"></i>
        </div>
        <div class="col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Conseil</h5>
          <p class="grey-text">Build on Click vous donne des conseil avant et pendant votre projet de constructio afin de minimiser et prevenir les riques liés à la construction</p>
        </div>
      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">
        <div class="col-md-1 col-2">
          <i class="fas fa-music fa-2x pink-text"></i>
        </div>
        <div class="col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Paiement</h5>
          <p class="grey-text">Vos transaction sur Build On Click sont sécurisés, vous ne courrez aucin risque lors de votre paiement sur la plateforme et vous disposez d'un registre pour suivre et verifier toutes vos transaction</p>
        </div>
      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-lg-0 mb-5">
        <div class="col-md-1 col-2">
          <i class="far fa-grin fa-2x blue-text"></i>
        </div>
        <div class="col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Recrutement</h5>
          <p class="grey-text mb-0">Pour repondre au exigences de nos nimbreux clients nous recrutons des professionnel suivit et évalués que nous integrons dans notre équipe de travail/p>
        </div>
      </div>
      <!-- Grid row -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-5">
      <!--Image-->
      <img src="images/ouvrier.jpeg" alt="Sample project image" class="img-fluid rounded z-depth-1">
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>


<?php require('footer.php');?>
    <script src="js/jquery.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/jquery.modal.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/all.js"></script>
</body>


</html>