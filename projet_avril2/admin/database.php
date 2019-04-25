<?php

    class Database{
        private static $server = "localhost";
        private static $login = "root";
        private static $mdp ="";
        private static $connexion = null;

        public static function connect(){
          try{
                self::$connexion = new PDO("mysql:host=".self::$server.";dbname=construction",self::$login, self::$mdp);
                self::$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            
            catch(PDOException $e){
                echo 'Probleme de connexion à la base de donnée :'. $e->getMessage();
            }
            return self::$connexion;
        }  
        public static function disconnect(){
            self::$connexion = null;
        }
        
    }
    Database::connect();
?>