<?php
require("../application/models/database.php");
class LoginController{
    function showConnect(){
        include("../application/views/connexion.php");
        $dbh = Database::connect(); 
        $statement = $dbh->prepare("SELECT * FROM starfile");
        $statement->execute();
        $result = $statement->fetchAll();

        var_dump($result);
    }
    function showRegister(){
        include("../application/views/inscrire.php");
    }
}