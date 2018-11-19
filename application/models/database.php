<?php 
class Database {
    static function connect(){
        $dsn = "mysql:host=localhost;dbname=stellarisen";
        $username = "root";
        $password = "";
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );
        return new PDO($dsn, $username, $password, $options);
        
    }
}