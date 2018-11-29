<?php
class Article {
    public $id;
    public $tags;
    public $titreArticle;
    public $texteArticle;
    public $iframe;
    
    public function getArticle($dbh,$id){
        $statement = $dbh->prepare("SELECT id, titre, pathTexte, iframe FROM articles WHERE id = :id");
        $ok = $statement->execute(["id" => $id]);
        if($ok){
            $article = $statement->fetch();
            $this->id = $id;
            $this->titreArticle = $article["titre"];
            $this->texteArticle = file_get_contents($article["pathTexte"]);
            $this->iframe = $article["iframe"];
            $tagsStatement = $dbh->prepare("SELECT texte, occurence FROM tags WHERE idArticle = :id");
            $ok = $tagsStatement->execute(["id" => $id]);
            if($ok){
                $this->tags = $tagsStatement->fetchAll();
            }
            return true;
        }
        else{
            echo "error";
            return false;
        }
    }

    public static function addTagToArticle($dbh, $id, $tag){
        $statement = $dbh->prepare("SELECT COUNT(*) FROM tags WHERE texte = :tag AND idArticle = :id");
        $res = $statement->execute(["tag" => $tag, "id" => $id]);
        if($res){
            if($statement->fetchColumn() > 0){
                //the tag exists in the database
                $statement = $dbh->prepare("UPDATE tags SET occurence = occurence+1 WHERE texte = :tag");
                $statement->execute(["tag" => $tag]);
            }
            else{
                //the tag doesn't exist in the database
                $statement = $dbh->prepare("INSERT INTO tags (idArticle, texte) VALUES (:id, :texte)");
                $ok = $statement->execute(["id" => $id, "texte" => $tag]);
            }
        }
    }
}