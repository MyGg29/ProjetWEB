<?php 
require("../application/models/article.php");
require("../application/models/database.php");
require("../application/models/user.php");
class ArticleController {
    private $dbh;

    function showEveryArticles(){
        $this->showArticle(rand(1,10));
    }

    function showArticle($id){
        $article = new Article();
        $dbh = Database::connect();
        $article->getArticle($dbh, $id);
        $this->titreArticle = $article->titreArticle;
        $this->texteArticle = $article->texteArticle;
        $this->iframe = $article->iframe;
        $this->tags = $article->tags;
        $this->isFav = false;
        //is the user is logged in
        if(isset($_SESSION["id"])){
            $isFav = User::isArticleFav($dbh,$id, $_SESSION["id"]);
            $this->isFav = $isFav;
        }

        include("../application/views/article.php");
    }

    function addTag($id,$tagText){
        $dbh = Database::connect();
        Article::addTagToArticle($dbh, $id, $tagText);
    }

    function addFav($id){
        $dbh = Database::connect();
        User::addFavToUser($dbh, $id, $_SESSION["id"]);
    }

}
