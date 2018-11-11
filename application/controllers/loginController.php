<?php
class LoginController{
    function showConnect(){
        include("../application/views/connexion.php");
    }
    function showRegister(){
        include("../application/views/inscrire.php");
    }
}