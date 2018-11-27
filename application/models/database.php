<?php 
class Database {
    public static function connect(){
        include("../application/configs/configs.php");
        $dsn = "mysql:host=".$config["db"]["host"].";dbname=".$config["db"]["dbname"];
        $username = $config["db"]["username"];
        $password = $config["db"]["password"];
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );
        return new PDO($dsn, $username, $password, $options);
        
    }

    //**create a user if it exists in the database*/
    public static function getUser($dbh, $mail, $password){
       $passwordSha256 = hash("sha256", $password);
       $statement = $dbh->prepare("SELECT id,nom, prenom, pseudo, mail, sex, datenaissance,avatar FROM users WHERE mail = :mail AND passwordSha256 = :passwordSha256"); 
       $ok = $statement->execute(["mail" => $mail, "passwordSha256" => $passwordSha256]);
       if($ok){
         $user = $statement->fetchAll(PDO::FETCH_CLASS, "User");
         if(isset($user[0])){
            return $user[0];
         }
       }
       return false;
    }
}