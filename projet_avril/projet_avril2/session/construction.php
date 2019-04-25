<?php
  require("../admin/database.php");
  session_start();
  if(empty($_SESSION['id'])){
    header("location:../index.php");
  }else{
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/jquery.modal.min.css">
</head>
<body>

  <!--Navbar --> <?php require("nav.php")?><!--/.Navbar -->

    <!-- Popup d'inscription -->
    <div id="inscription" class="modal">
      <p>Thanks for clicking. That felt good.</p>
      <a href="#" rel="modal:close">Close</a>
    </div>
    
    <div id="ex1" class="modal">
  <p>Thanks for clicking. That felt good.</p>
  <a href="#" rel="modal:close">Close</a>
</div>

<!-- Link to open the modal -->
<p><a href="#ex1" rel="modal:open">Open Modal</a></p>



        
  <div id="acceuil-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../images/constructionimmeuble.jpg" alt="image de construction chantier">
      </div>
    </div>
  </div>

      <section id="section-navale">
        <div class="row">
          <div class="col-sm-8 offset-sm-2 titre-container">
            <h1 class="titre">Construction navale</h1>
            <p>Construisez votre navire ou investissez dans la construction d'un navire en toutes securite.</p>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <img class="img-fluid" src="../images/constructionsite.jpeg" alt="image construction navire">
            </div>
            <div class="col-sm-7">
              <div class="sect-description">
                <p style="font-size:20px;">Chantiers de la Haute-Seine <br>
                  Vous avez des travaux à réaliser sur un équipement flottant en acier ? Vous souhaitez faire construire un bateau, une barge ou un ponton mais vous ne savez pas à qui confier votre projet ? Découvrez dans cet article, 10 bonnes raisons de faire appel aux Chantiers de la Haute-Seine pour vos besoins en construction ou réparation navale ! <br>
                  1. Une entreprise centenaire appartenant à un groupe de renommée internationale (CEMEX). Vous avez donc la garantie du bon achèvement de vos travaux dans le respect des délais donnés, en accord avec les réglementations applicables dans le fluvial.<br> 
                  2. Des infrastructures dimensionnées pour accueillir des ouvrages coques aciers jusqu’à 800 tonnes. Entre autres, nous disposons :

                  – De moyens de halage et de manutention adaptés : 4 voies de tirage à terre, avec un pousseur de manœuvre permettant de déplacer les bateaux à la demande en optimisant le temps d’immobilisation,

                  – De hangars couverts pour protéger votre bateau des intempéries en cas de travaux exposant les parties habituellement abritées
                </p>
                <div class="text-center">
                  <div class="divider"></div> Lire la suite <div class="divider"></div>
                </div>
              </div>
          </div>
        </div>

      <section id="section-navale">
      <div class="row">
        <div class="col-sm-8 offset-sm-2 titre-container">
          <h1 class="titre">Construction navale</h1>
          <p>Construisez votre navire ou investissez dans la construction d'un navire en toutes securite.</p>
        </div>
        <div class="row">
          <div class="col-sm-7">
            <div class="sect-description">
              <p style="font-size:20px;">Chantiers de la Haute-Seine <br>
                Vous avez des travaux à réaliser sur un équipement flottant en acier ? Vous souhaitez faire construire un bateau, une barge ou un ponton mais vous ne savez pas à qui confier votre projet ? Découvrez dans cet article, 10 bonnes raisons de faire appel aux Chantiers de la Haute-Seine pour vos besoins en construction ou réparation navale ! <br>
                1. Une entreprise centenaire appartenant à un groupe de renommée internationale (CEMEX). Vous avez donc la garantie du bon achèvement de vos travaux dans le respect des délais donnés, en accord avec les réglementations applicables dans le fluvial.<br> 
                2. Des infrastructures dimensionnées pour accueillir des ouvrages coques aciers jusqu’à 800 tonnes. Entre autres, nous disposons :

                – De moyens de halage et de manutention adaptés : 4 voies de tirage à terre, avec un pousseur de manœuvre permettant de déplacer les bateaux à la demande en optimisant le temps d’immobilisation,

                – De hangars couverts pour protéger votre bateau des intempéries en cas de travaux exposant les parties habituellement abritées
              </p>
              <div class="text-center">
                <div class="divider"></div> Lire la suite <div class="divider"></div>
              </div>
            </div>
        </div>
        <div class="col-sm-5">
          <img class="img-fluid" src="../images/constructionsite.jpeg" alt="image construction navire">
        </div>
      </div>
    </section>
  </div>


    <?php require("footer.php")?>

    <script src="../js/jquery.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/all.js"></script>
    <script src="../js/jquery.modal.min.js"></script>
</body>
</html>
  <?php }?>