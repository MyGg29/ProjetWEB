<?php require("../application/layout/header.php"); ?>
<?php include("../application/layout/navbar.php") ?>

<?php 

var_dump($_SERVER['DOCUMENT_ROOT']);
    $request = $_SERVER["REQUEST_URI"];
    echo $request;
    switch($request){
        case "/edsa-stellarisen/":
            require("../application/controllers/indexController.php");
            $indexController = new IndexController;
            $indexController->show();
            break;
    }




?>

<?php require("../application/layout/footer.php"); ?>