<?php
require_once("../application/models/database.php");
require("../application/models/user.php");
require("../application/controllers/wikiController.php");
class LoginController{

    public $missingfields = array();
    public $reussie = false;
    public function showConnect(){
        if(isset($_POST["submit"])){
            $dbh = Database::connect();
            $user = Database::getUser($dbh, $_POST["mail"], $_POST["password"]);
            if($user){
                $_SESSION["id"] = $user->id;
                $_SESSION["usermail"] = $user->mail;
                $_SESSION["pseudo"] = $user->pseudo;
                $_SESSION["nom"] = $user->nom;
                $_SESSION["prenom"] = $user->prenom;
                $_SESSION["avatar"] = $user->avatar;
                header("Refresh:0");
            }
            else{
                echo "Mauvais mot de passe ou nom d'utilisateur";
            }
        }
        include("../application/views/connexion.php");
    }

    public function showMyAccount(){
        $dbh = Database::connect(); 
        if(isset($_POST["submit"])){ 
            //handle avatar
            $user = new User($_POST); 
            $user->modify($dbh,$_SESSION["id"]);
            if($_FILES["img-upload"]["name"] != ""){
                $this->uploadImage();
            }
        }
        //we add a rand() to trick the browser into reloading the cached image
        $this->avatarPath = "public/userImages/".$_SESSION["avatar"]."?=".rand();

        $favs = $dbh->prepare("SELECT id, titre, description, image FROM wiki INNER JOIN userfavoritesfile AS Ufavs ON wiki.id = Ufavs.idStarFile WHERE Ufavs.idUser = :idUser");
        $favs->execute(["idUser" => $_SESSION["id"]]);
        foreach($favs->fetchAll() as $key=>$value){
            $this->donneeCarte[$value["id"]]["titre"] = $value["titre"];
            $this->donneeCarte[$value["id"]]["description"] = $value["description"];
            $this->donneeCarte[$value["id"]]["image"] = $value["image"];
        }

        include("../application/views/moncompte.php");
    }

    public function showRegister(){
        if(isset($_POST["submit"])){
                $dbh = Database::connect();
                $user = new User($_POST);
                try{
                    $user->insert($dbh);
                    $this->reussie = true;
                }
                catch(Exception $e){
                    $this->missingfields = $user->missingfields;
                }
        }
        include("../application/views/inscrire.php");
    }

    public function disconnect(){
        session_destroy();
        session_unset();
    }

    private function uploadImage(){
        $target_dir = "userImages/";
        $target_file = $target_dir . $_SESSION["id"] .".". pathinfo($_FILES["img-upload"]["name"], PATHINFO_EXTENSION);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["img-upload"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["img-upload"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["img-upload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["img-upload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

}