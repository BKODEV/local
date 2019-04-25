<?php
  require("database.php");
  if(!empty($_GET['id'])){
        $id = $_GET['id'];
    }
  session_start();
  if(empty($_SESSION['id'])){
    header("location:../index.php");
  }else{
    if(!empty($_POST)){
        $statut = $_POST['statut'];
        $db = Database::connect();
        $req = $db->prepare("UPDATE projet SET statut = ? WHERE id_projet = ?");
        $req->execute(array($statut,$id));
        header("location:gestprojet.php");
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
    <link rel="stylesheet" href="../css/jquery.modal.min.css">
</head>
<body>

    <?php include('nav-admin.php');?>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h1>Modifier le statut du projet</h1>
                <form id="updatep" method="POST" action="<?php echo 'projetupdate.php?id='.$id;?> ">
                    <select form="updatep" name="statut" id="updatep" class="form-control">
                        <option value="EN ATTENTE">En attente</option>
                        <option value="EN COURS">En cours</option>
                        <option value="TERMINEE">Terminé</option>
                        <option value="ANULEE">Anulé</option>
                    </select>
                    <input style="margin-top:10px" type="submit" value="validé" class="btn btn-success form-control">
                </form>
            </div>
        </div>
    </div>




    <script src="../js/jquery.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../js/jquery.modal.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/all.js"></script>
</body>


</html><?php } ?>