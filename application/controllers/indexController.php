<?php
class IndexController{
    function __construct($conf){
        $this->config = $conf;
    }

    function show(){
        $this->pathBigImage = "public/img/InSight.PNG";
        $this->titleBigNews = "NASA InSight sur Mars !";
        $this->contentBigNews = "Le module NASA InSight a pu prendre cette semaine une photo de la surface de Mars !<br>NASA Interior Exploration using Seismic Investigation, Geodesy and Heat Transport (InSight) va nous permettre de mieux comprendre la composition interne de Mars.";

        $this->pathSmallImage1 = "public/img/jupiter.jpg";
        $this->titleSmallNews1 = "Custom title 1";

        $this->pathSmallImage2 = "public/img/jupiter.jpg";
        $this->titleSmallNews2 = "Custom title 2";

        $this->pathSmallImage3 = "public/img/jupiter.jpg";
        $this->titleSmallNews3 = "Custom title 3";
        require("../application/views/accueil.php");
    }
}
