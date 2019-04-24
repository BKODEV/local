<?php
    require("database.php");
    session_start();
    if(empty($_SESSION['id'])){
      header("location:../index.php");
    }else{
        if(!empty($_GET)){
            $id = $_GET['id'];
        }
        $db = Database::connect();
        $req = $db->prepare('SELECT * FROM devis WHERE id_devis = ?');
        $req->execute(array($id));
        $item = $req->fetch();
        $devi_id = $item['id_devis'];
        $libelle = $item['libelle_pro'];
        $statement = $db->prepare("INSERT INTO projet(id_devis,libelle) VALUES(?,?)");
        $statement->execute(array($devi_id,$libelle));
        Database::disconnect();
        header("location:../session/profil.php?err=1");

}

?>