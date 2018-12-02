<?php
class IndexController{
    function show(){
        $this->pathBigImage = "public/img/InSight.PNG";
        $this->titleBigNews = "NASA InSight sur Mars !";
        $this->contentBigNews = "Le module NASA InSight a pu prendre cette semaine une photo de la surface de Mars !<br>NASA Interior Exploration using Seismic Investigation, Geodesy and Heat Transport (InSight) va nous permettre de mieux comprendre la composition interne de Mars.";
        $this->lienBigNews = "article?id=22";

        $this->pathSmallImage1 = "public/img/kepler-planetes.jpg";
        $this->titleSmallNews1 = "1/3 des exoplanètes seraient des planètes-océans";
        $this->lienSmallNews1 = "article?id=23";

        $this->pathSmallImage2 = "public/img/super_imgburaco_negro_1_0.jpg";
        $this->titleSmallNews2 = "Les trous noirs supermassifs sur le point d'entrer en collision sont nombreux";
        $this->lienSmallNews2 = "article?id=24";

        $this->pathSmallImage3 = "public/img/psychelongshot0718b-586e.jpeg";
        $this->titleSmallNews3 = "Nasa : feu vert à une mission d'exploration des astéroïdes troyens de Jupiter";
        $this->lienSmallNews3 = "article?id=25";
        require("../application/views/accueil.php");
    }
}
