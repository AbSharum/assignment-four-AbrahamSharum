<?php
include_once "./models/ArticleDAO.php";

class ArticleList extends Controller{

    public function performAction(){
        $articleDAO = new articleDAO();

        $articles=$articleDAO->getArticles();
        $this->renderView("articleList",$articles);
    }

    public function getAuth(){
        return "PUBLIC";
    }

}
?>