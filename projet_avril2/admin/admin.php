<?php
require("../admin/database.php");
session_start();
if(!empty($_GET['err'])){
  if($_GET['err'] == 1){
    ?> <script>alert("Vous etes connecté")</script><?php
  }
}
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

    <?php include('nav-admin.php');?>


    <div class="card shadow mb-4 tb-forma">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">Liste des Utilisateur <a href="insert.php" class="btn btn-primary btn-md"><span class ="fas fa-plus"></span> Ajouter</a></h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                      <tr>
                          <th>Type</th>
                          <th>Nom & Prenom</th>
                          <th>Ville</th>
                          <th>Adresse</th>
                          <th>contact</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                            $db = Database::connect();
                            $statement = $db->query('SELECT id,type,nom,ville,adresse,contact FROM user ORDER BY id DESC');
                            while($item = $statement->fetch()){
                                echo'<tr>';
                                echo'<td>'. $item['type'].'</td>';
                                echo '<td>'.$item['nom'].'</td>';
                                echo'<td>'.$item['ville'].'</td>';
                                echo '<td>'.$item['adresse'].'</td>';
                                echo '<td>'.$item['contact'].'</td>';
                                
                                echo'<td width=350>';
                                
                                echo '<a class="btn btn-danger" href="delete.php?id='.$item['id'].'"><span class="fa fa-times"></span> Supprimer</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>




















    <script src="../js/jquery.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../js/jquery.modal.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/all.js"></script>
</body>


  </html>
  <?php }?>