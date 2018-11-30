 <?php
class PlanetController
{
    function show()
    {
        //On ne veux pas de cache pour les checkboxs
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        require("../application/views/planetarium.php");
    }
} 