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

    <?php include('nav.php');?>


<div class="container-fluid" style="margin-top:50px;">
    <div class="row m-y-2">
        <div class="col-lg-4 pull-lg-8 text-xs-center">
            <img src="../images/abstract.jpg" class="m-x-auto img-fluid img-circle" alt="avatar">
        </div>
        <div class="col-lg-6 push-lg-3">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profil</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#Devis" data-toggle="tab" class="nav-link">Devis</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                </li>
            </ul>
            <div class="tab-content p-b-3">
                <div class="tab-pane active" id="profile">
                    <?php
                        $db = Database::connect();
                        $req = $db->prepare("SELECT * FROM user WHERE id=?");
                        $req->execute(array($_SESSION['id']));
                        $item = $req->fetch();
                    ?>
                    <h4 class="m-y-2"><?php echo $item['nom']?></h4>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>
                                <?php
                                    if($item['type'] == 'particulier'){
                                        echo "Profession";
                                    }else{
                                        echo "domaine";
                                    }
                                ?>
                            </h6>
                            <p>
                                <?php echo $item["domaine"];?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Projet Achevés</h6>
                            <p></p>
                            <hr>
                            <span class="tag tag-success"><i class="fa fa-cog"></i> 43 Forks</span>
                            <span class="tag tag-danger"><i class="fa fa-eye"></i> 245 Views</span>
                        </div>
                        <div class="col-md-12">
                            <h4 class="m-t-2"><span class="fa fa-clock fa-spin ion-clock pull-xs-right"></span>Projet en cours</h4>
                            <table class="table table-hover table-striped">
                                
                                <tbody> 
                                <?php
                                    $req = $db->query("SELECT * FROM projet INNER JOIN devis ON projet.id_devis = devis.id_devis INNER JOIN user ON devis.id_user = user.id");
                                    while($item = $req->fetch()){
                                        echo"<tr>";
                                        echo"<td>";
                                        echo"<strong>Projet de ".$item['libelle']." statut : ".$item['statut'];
                                        echo"</td>";
                                        echo"</tr>";
                                    }
                                    ?>                           
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="Devis">
                    <h4 class="m-y-2">Dévis</h4>
                    <table class="table table-hover table-striped">
                        <tbody>
                        <?php
                            $req = $db->query("SELECT * FROM devis INNER JOIN user ON devis.id_user = user.id");
                            while($item = $req->fetch()){
                                echo"<tr>";
                                echo"<td>";
                                echo $item['libelle_pro']." </strong> coût : ".$item['cout']. "<a href='' class='btn btn-light'><i class='fas fa-eye'></i>Voir</a>   <a href='../admin/projet.php?id=".$item['id_devis']."' class='btn btn-success'><i class='fas fa-dollar-sign'></i> demarer le projet</a>";
                                echo"</td>";
                                echo"</tr>";
                            }
                            if(empty($item)){?>
                                <tr>
                                    <td>
                                    <span class="pull-xs-right font-weight-bold">Vous n'avez pas encore demandé un dévis</span>
                                    </td>
                                </tr>
                            <?php }?>                                       
                        </tbody> 
                    </table>
                </div>
                <div class="tab-pane" id="messages">
                    <h4 class="m-y-2">Recent Messages &amp; Notifications</h4>
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a>Cette section sera bienôt<strong>Disponible</strong>
                    </div>
                    
                </div>
                <div class="tab-pane" id="edit">
                    <h4 class="m-y-2">Modifier son profil</h4>
                    <form role="form">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Jane">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Bishop">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="email@gmail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Company</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Website</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Street">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" value="" placeholder="City">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="State">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
                            <div class="col-lg-9">
                                <select id="user_time_zone" class="form-control" size="0">
                                    <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                    <option value="Alaska">(GMT-09:00) Alaska</option>
                                    <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                    <option value="Arizona">(GMT-07:00) Arizona</option>
                                    <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                    <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                    <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                    <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="janeuser">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <a class="btn btn-outline-primary btn-lg btn-rounded waves-effect">Demander un devis</a>
        </div>
        
    </div>
</div>
<hr>


<?php require('footer.php');?>
    <script src="../js/jquery.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../js/jquery.modal.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/all.js"></script>
</body>


</html>
  <?php }?>