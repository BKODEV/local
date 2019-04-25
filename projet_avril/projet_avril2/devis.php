<?php
  if(!empty($_GET)){
    if($_GET['err'] == 1){
      ?> <script>alert("Votre demande de dévis n'a pas pu être effectée vérifiez vos information renseignés")</script><?php
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
        
<div class="container">
        <!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Demander un dévis</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Le remplissage des champs doit se fiare de manière professionnelle. Si nous rencontrons des problemes de comprehension dans votre demande nous vous enverrons une fiche numerique dans par e-amil que vous renseignerai pour plus de precision dans votre dévis.</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-10 offset-1 mb-md-0 mb-5">
        <form id="devis-form" action="admin/devis-target.php" method="POST">

            <!--Grid row-->
            <div class="row" style="margin-bottom:15px !important;">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="nom" class="">Votre nom et prenom</label>
                        <input type="text" id="nom" name="nom" class="form-control">
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="email" class="">Vodre adresse email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row" style="margin-bottom:15px !important;">
                <div class="col-md-6">
                    <label for="secteur">Secteur : </label>
                    <select id="secteur" form="devis-form" class="md-form mb-0 form-control" name="secteur">
                        <option value="Construction immobilière">Construction immobilière</option>
                        <option value="Construction metallique">Construction metallique</option>
                        <option value="Construction Navale">Construction Navale</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="typeprojet">Type de projet :</label>
                    <select id="typeprojet" form="devis-form" class="md-form mb-0 form-control" name="typeprojet">
                        <option value="personnel">Projet Personnel</option>
                        <option value="entreprise">Projet d'entreprise</option>
                    </select>
                </div>
            </div>
            <!--Grid row-->
            <div class="col-md-12">
                    <div class="md-form">
                        <label for="libelle">Libelle du projet</label>
                        <input type="text" id="libelle" name="libelle" class="form-control" placeholder="EX : Construction d'immeuble R+3">
                    </div>

                </div>
            <!--Grid row-->
            <div class="row" style="margin-bottom:15px !important;">
                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <label for="message">Description de votre projet</label>
                        <textarea type="text" id="message" name="description" rows="5" class="form-control md-textarea" placeholder="decrivez votre projet dans tous ses contours pour plus de précision dans le dévis"></textarea>
                    </div>

                </div>
            </div>
            <!--Grid row-->
            <div class="row">
                <input type="submit" class="btn btn-success form-control" value="soumettre">
            </div>

        </form>

    </div>
    <!--Grid column-->


    </div>

    </section>
    <!--Section: Contact v.2-->
</div>








    


<?php require('footer.php');?>
    <script src="js/jquery.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/jquery.modal.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/all.js"></script>
</body>


</html>