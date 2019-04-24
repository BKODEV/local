<?php
require("database.php");
    if(!empty($_POST)){
        $type = $_POST['type'];
        $nom = $_POST['nom'];
        $domaine = $_POST['profession'];
        $ville = $_POST['ville'];
        $adresse = $_POST['adresse'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $pseudo = $_POST['pseudo'];
        $mdp1 = $_POST['mdp1'];
        $mdp2 = $_POST['mdp2'];
        $valid = true;
    }
    
    if(empty($type)){
        $valid = false;
    }
    if(empty($nom)){
        $valid = false;
    }
    if(empty($profession)){
        $valid = false;
    }
    if(empty($ville)){
        $valid = false;
    }
    if(empty($adresse)){
        $valid = false;
    }
    if(empty($contact)){
        $valid = false;
    }
    if(empty($email)){
        $valid = false;
    }
    if(empty($pseudo)){
        $valid = false;
    }
    if(empty($mdp1)){
        $valid = false;
    }
    if(empty($mdp2)){
        $valid = false;
    }elseif($mdp1 <> $mdp2){
        $valid = false;
    }else{
        $mdp = $mdp1;
    }
    if($valid){
        $db = Database::connect();
        $req = $db->prepare("INSERT INTO user (type, nom, ville, adresse, contact, email, pseudo, mdp) VALUES(?,?,?,?,?,?,?,?)");
        $req->execute(array($type,$nom,$ville,$adresse,$contact,$email,$pseudo,$mdp));
        ?> <script>alert('Votre inscription à été pris en compte veuillez vous connectez dès à présent')</script><?php
    }else{
        header("location:../index.php?err=2");
    }
?>