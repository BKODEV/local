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

    <?php include('nav-admin.php');?>


    <div class="card shadow mb-4 tb-forma">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                      <tr>
                          <th>Libelle</th>
                          <th>Client</th>
                          <th>Statut Projet</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                            $db = Database::connect();
                            $statement = $db->query('SELECT projet.id_projet,projet.libelle, projet.statut,user.nom FROM projet INNER JOIN devis ON projet.id_devis = devis.id_devis INNER JOIN user ON devis.id_user = user.id');
                            while($item = $statement->fetch()){
                                echo'<tr>';
                                echo'<td>'. $item['libelle'].'</td>';
                                echo '<td>'.$item['nom'].'</td>';
                                echo'<td>'.$item['statut'].'</td>';
                                
                                echo'<td width=350>';
                                echo '<a class="btn btn-primary" href="projetupdate.php?id='.$item['id_projet'].'"><span class="fa fa-pencil-alt"></span> Modifier</a>';
                                echo' ';
                                echo '<a class="btn btn-danger" href="projetdelete.php?id='.$item['id_projet'].'"><span class="fa fa-times"></span> Supprimer</a>';
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