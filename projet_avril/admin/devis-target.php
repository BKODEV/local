<?php
    require('database.php');
    if(!empty($_POST)){
        $nom = securedata($_POST['nom']);
        $email = securedata($_POST['email']);
        $secteur = securedata($_POST['secteur']);
        $typeprojet = securedata($_POST['typeprojet']);
        $libelle = securedata($_POST['libelle']);
        $description = securedata($_POST['description']);
        $valid = true;

        if(empty($nom)){
            $valid="false";
        }
        if(empty($email)){
            $valid="false";
        }
        if(empty($secteur)){
            $valid="false";
        }
        if(empty($typeprojet)){
            $valid="false";
        }
        if(empty($libelle)){
            $valid="false";
        }
        if(empty($description)){
            $valid="false";
        }
        if($valid){
            $db = Database::connect();
            $statment = $db->prepare("SELECT COUNT(*) FROM visiteur WHERE nom=? AND email=?");
            $statment->execute(array($nom,$email));
            $item= $statment->fetchColumn();
            if($item == 0){
                $req = $db->prepare("INSERT INTO visiteur (nom,email) VALUES (?,?)");
                $req->execute(array($nom,$email));
            }

            $statment = $db->prepare("SELECT id_visiteur FROM visiteur WHERE nom=? AND email=?");
            $statment->execute(array($nom,$email));
            $result= $statment->fetch();
            $id = $result['id_visiteur'];
            $req = $db->prepare("INSERT INTO devis (id_visiteur,secteur,type_projet,libelle_pro,description) VALUES (?,?,?,?,?)");
            $req->execute(array($id,$secteur,$typeprojet,$libelle,$description));
            Database::disconnect();
            header("location:../index.php?err=3");

        }else{
            header("location:../devis.php?err=1");
        }
    }

    function securedata($donne){
        $donne = trim($donne);
        $donne = stripslashes($donne);
        $donne = strip_tags($donne);
        return $donne;
    }
?>