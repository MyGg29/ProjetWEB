<?php session_start();?>
<?php require("../application/layout/header.php"); ?>
<?php include("../application/layout/navbar.php"); ?>

<?php 
    //var_dump($_SERVER['DOCUMENT_ROOT']);
    $request = strtolower($_SERVER["REQUEST_URI"]);//On met l'uri en minuscule afin d'être plus souple
    //we remove the get parameters
    $pieces = explode("?", $request);
    $request = $pieces[0];

    switch($request){
        case "/edsa-stellarisen/":
            require("../application/controllers/indexController.php");
            $indexController = new IndexController;
            $indexController->show();
            break;
        case "/edsa-stellarisen/galerie":
            require("../application/controllers/galerieController.php");
            $galerieController = new GalerieController;
            $galerieController->show();
            break;
        case "/edsa-stellarisen/wiki":
            if(array_key_exists("search",$_GET)){
                //search que
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
        case "/edsa-stellarisen/planetarium":
            require("../application/controllers/planetController.php");
            $planetController = new PlanetController;
            $planetController->show();
            break;
        case "/edsa-stellarisen/connexion":
            require("../application/controllers/loginController.php");
            $loginController = new LoginController;
            if(empty($_SESSION)){
                $loginController->showConnect();
            }
            else{
                $loginController->showMyAccount();
            }
            break;
        case "/edsa-stellarisen/inscrire":
            require("../application/controllers/loginController.php");
            $loginController = new LoginController;
            $loginController->showRegister();
            break;
        case "/edsa-stellarisen/deconnexion":
            require("../application/controllers/loginController.php");
            $loginController = new LoginController;
            $loginController->disconnect();
            header("Location: /edsa-stellarisen/connexion");
            break;
        case "/edsa-stellarisen/article":
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
            break;
        case "/edsa-stellarisen/planetarium":
            require("../application/controllers/planetController.php");
            $planetController = new PlanetController;
            $planetController -> show();
            break;
    }

?>

<?php require("../application/layout/footer.php"); ?>