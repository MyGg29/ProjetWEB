<?php 
require("../application/models/article.php");
require("../application/models/database.php");
class ArticleController {
    function showEveryArticles(){
        echo "temp";
    }

    function showArticle($id){
        $article = new Article();
        $dbh = Database::connect();
        $article->getArticle($dbh, $id);
        $this->titreArticle = $article->titreArticle;
        $this->texteArticle = $article->texteArticle;
        $this->iframe = $article->iframe;
        $this->tags = $article->tags;
        include("../application/views/article.php");
    }

    function addTag($id,$tagText){
        $dbh = Database::connect();
        Article::addTagToArticle($dbh, $id, $tagText);
    }
}
