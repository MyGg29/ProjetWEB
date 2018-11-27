<?php 
require("../application/models/database.php");
class WikiController{
    function show(){
        $dbh = Database::connect();
        $wiki = $dbh->query("SELECT id, titre, description, image FROM wiki");
        foreach($wiki->fetchAll() as $key=>$value){
            $this->donneeCarte[$value["id"]]["titre"] = $value["titre"];
            $this->donneeCarte[$value["id"]]["description"] = $value["description"];
            $this->donneeCarte[$value["id"]]["image"] = $value["image"];
        }
        require("../application/views/wiki.php");
    }
}