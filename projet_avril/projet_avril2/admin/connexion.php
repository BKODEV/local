<?php
require("database.php");
if(!empty($_POST)){
    $utilisateur = securedata($_POST['utilisateur']);
    $mdp = securedata($_POST['mdp']);

    $db = Database::connect();
    $req = $db->prepare("SELECT * FROM user WHERE pseudo=? AND mdp = ?");
    $req->execute(array($utilisateur,$mdp));
    if($item = $req->fetch()){
        ?> <script> alert('parfait')</script><?php
        session_start();
        $_SESSION['id'] = $item['id'];
        Database::disconnect();
        header("location:../session/index.php?err=1");
    }else{
        header("location:../index.php?err=1");
    } 
}


function securedata($donne){
    $donne = trim($donne);
    $donne = stripslashes($donne);
    $donne = strip_tags($donne);
    return $donne;
}
?>