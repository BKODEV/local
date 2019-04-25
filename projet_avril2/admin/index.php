<?php
require("database.php");
if(!empty($_POST)){
    $utilisateur = securedata($_POST['utilisateur']);
    $mdp = securedata($_POST['mdp']);

    $db = Database::connect();
    $req = $db->prepare("SELECT * FROM admin WHERE utilisateur=? AND mdp = ?");
    $req->execute(array($utilisateur,$mdp));
    if($item = $req->fetch()){
        ?> <script> alert('parfait')</script><?php
        session_start();
        $_SESSION['id'] = $item['id'];
        Database::disconnect();
        header("location:admin.php?err=1");
    }else{
        header("location:admin.php?err=2");
    } 
}


function securedata($donne){
    $donne = trim($donne);
    $donne = stripslashes($donne);
    $donne = strip_tags($donne);
    return $donne;
}
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
</head>
<body>



  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('../images/ouvrier.jpeg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="defis">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4 text-danger text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Bienvenue dans l'espace administration <br> Cet espace est réservé au administrateurs du site</h1>


          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <form action="index.php" method="POST">
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Connectez-vous:</strong>
                  </h3>
                  <hr>

                  <div class="md-form">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="form3" class="form-control" name="utilisateur">
                    <label for="form3">Votre nom d'utilisateur</label>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" id="form2" class="form-control" name="mdp">
                    <label for="form2">Password</label>
                  </div>


                  <input type="submit" class="btb btn-success rounded form-control">
                </form>
                <!-- Form -->

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->


    <script src="../js/jquery.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/all.js"></script>
</body>


</html>