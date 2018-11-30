<?php 
require("../application/models/database.php");
class WikiController{
    function show(){
        $dbh = Database::connect();
        $wiki = $dbh->query("SELECT id, titre, description, image FROM wiki");
        $this->showCards($wiki->fetchAll());
    }

    function findArticle($tag){
        $dbh = Database::connect();
        $statement = $dbh->prepare("SELECT wiki.id, wiki.titre, wiki.description, wiki.image  FROM wiki INNER JOIN tags ON tags.idArticle = wiki.id WHERE tags.texte LIKE :tag");
        $statement->execute(["tag" => "%".$tag."%"]);
        $this->showCards($statement->fetchAll());
    }

    function showCards($databaseTable){
        foreach($databaseTable as $key=>$value){
            $this->donneeCarte[$value["id"]]["titre"] = $value["titre"];
            $this->donneeCarte[$value["id"]]["description"] = $value["description"];
            $this->donneeCarte[$value["id"]]["image"] = $value["image"];
        }
        require("../application/views/wiki.php");
    }

}