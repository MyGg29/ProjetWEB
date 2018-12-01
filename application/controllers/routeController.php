<?php 
class Route {
    private $config;
    function __construct($conf){
        $this->config = $conf;
    }

    function router($request){
        $baseUrl = $this->config["urls"]["baseUrl"];
        switch($request){
            case $baseUrl:
                require("../application/controllers/indexController.php");
                $indexController = new IndexController;
                $indexController->show();
                break;
            case $baseUrl."galerie":
                require("../application/controllers/galerieController.php");
                $galerieController = new GalerieController;
                $galerieController->show();
                break;
            case $baseUrl."wiki":
                if(array_key_exists("search",$_GET)){
                    //search query
                    require("../application/controllers/wikiController.php");
                    $wikiController = new WikiController;
                    $wikiController->findArticle($_GET["search"]);
                }
                else{
                    //normal query
                    require("../application/controllers/wikiController.php");
                    $wikiController = new WikiController;
                    $wikiController->show();
                }
                break;
            case $baseUrl."planetarium":
                require("../application/controllers/planetController.php");
                $planetController = new PlanetController;
                $planetController->show();
                break;
            case $baseUrl."connexion":
                require("../application/controllers/loginController.php");
                $loginController = new LoginController;
                if(empty($_SESSION)){
                    $loginController->showConnect();
                }
                else{
                    $loginController->showMyAccount();
                }
                break;
            case $baseUrl."inscrire":
                require("../application/controllers/loginController.php");
                $loginController = new LoginController;
                $loginController->showRegister();
                break;
            case $baseUrl."deconnexion":
                require("../application/controllers/loginController.php");
                $loginController = new LoginController;
                $loginController->disconnect();
                header("Location: ".$baseUrl."connexion");
                break;
            case $baseUrl."article":
                require("../application/controllers/articleController.php");
                $articleController = new ArticleController;
                if(empty($_GET)){
                    $articleController->showEveryArticles();
                }
                if(array_key_exists("id", $_GET)){
                    $articleController->showArticle($_GET["id"]);
                }
                if(array_key_exists("tagText",$_POST) && array_key_exists("id",$_POST)){
                    //handle ajax request to add tags
                    $articleController->addTag($_POST["id"], $_POST["tagText"]);
                }
                if(array_key_exists("fav",$_POST)){
                    //handle ajax request to add favs
                    $articleController->addFav($_POST["fav"]);
                }
                break;
            case $baseUrl."planetarium":
                require("../application/controllers/planetController.php");
                $planetController = new PlanetController;
                $planetController -> show();
                break;
        }
    }
}