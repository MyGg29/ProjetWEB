<?php
require("../application/models/database.php");
require("../application/models/user.php");
class LoginController{

    function showConnect(){
        include("../application/views/connexion.php");
        $dbh = Database::connect(); 
        $statement = $dbh->prepare("SELECT * FROM starfile");
        $statement->execute();
        $result = $statement->fetchAll();
        $hash = hash("sha256","aja");
        var_dump($hash);

    }
    function showRegister(){
        include("../application/views/inscrire.php");
        if(isset($_POST)){
            $dbh = Database::connect();
            $user = new User($_POST);
            $user->insert($dbh);
        }
    }
}