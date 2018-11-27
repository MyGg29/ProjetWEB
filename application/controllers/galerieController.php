<?php
class GalerieController{
    public $imgLinks;
    public $legends;

    function __construct(){
        $this->set("1", "public/img/jupiter.jpg", "legende !!");
        $this->set("2", "https://picsum.photos/200/300", "legendeeee");
        $this->set("3", "https://picsum.photos/200/250", "legenddeeee");
        $this->set("4", "https://picsum.photos/200/333", "legende");
        $this->set("5", "https://picsum.photos/200/333", "legendaire");
        $this->set("6", "https://picsum.photos/200/450", "hello");
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