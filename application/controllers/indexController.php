<?php
class IndexController{
    function show(){
        $this->pathBigImage = "public/img/jupiter.jpg";
        $this->titleBigNews = "Custom Title";
        $this->contentBigNews = "Custom content for the news ! Fun fact and stuff";

        $this->pathSmallImage1 = "public/img/jupiter.jpg";
        $this->titleSmallNews1 = "Custom title 1";

        $this->pathSmallImage2 = "public/img/jupiter.jpg";
        $this->titleSmallNews2 = "Custom title 2";

        $this->pathSmallImage3 = "public/img/jupiter.jpg";
        $this->titleSmallNews3 = "Custom title 3";
        require("../application/views/accueil.php");
    }
}
