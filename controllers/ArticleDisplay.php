<?php
class ArticleDisplay extends Controller{
    public function performAction(){
        $articleDAO = new ArticleDAO();
        $articles = $articleDAO->getArticles();
        $this->renderView('articleDisplay',$articles);
    }
}
?>