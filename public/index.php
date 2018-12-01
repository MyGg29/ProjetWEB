<?php session_start();?>
<?php require("../application/configs/configs.php"); ?>
<?php require("../application/layout/header.php"); ?>
<?php require("../application/layout/navbar.php"); ?>
<?php 
    //var_dump($_SERVER['DOCUMENT_ROOT']);
    $request = strtolower($_SERVER["REQUEST_URI"]);//On met l'uri en minuscule afin d'être plus souple
    //we remove the get parameters
    $pieces = explode("?", $request);
    $request = $pieces[0];

    require("../application/controllers/routeController.php");
    $routeur = new Route($config);
    $routeur->router($request);
?>

<?php require("../application/layout/footer.php"); ?>