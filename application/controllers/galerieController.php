<?php
require("../application/models/database.php");
class GalerieController{
    public $imgLinks;
    public $legends;

    function __construct(){
        $dbh = Database::connect();
        $galerie = $dbh->query("SELECT ordre, pathImage, legende FROM galerie");
        foreach($galerie as $row){
            $this->set($row["ordre"], $row["pathImage"], $row["legende"]);
        }
    }

    function show(){
        //utilise en argument un tableau de liens ainsi qu'un de légende
        require("../application/views/galerie.php");
    }

    function set($key, $imgLink, $legend){
        $this->imgLinks[$key] = $imgLink;
        $this->legends[$key] = $legend;
    }
    function get($key){
        return array("imgLink" => $this->imglinks[$key], 
                     "legend" => $this->legends[$key]);
    }
}