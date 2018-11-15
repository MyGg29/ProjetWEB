<?php 
class ArticleController {
    function showEveryArticles(){
        echo "temp";
    }

    function showArticle($id){
        include("../application/views/article.php");
    }
}