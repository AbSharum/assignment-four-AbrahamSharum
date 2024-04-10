<?php
include_once "./models/ArticleDAO.php";

class ArticleAdd extends Controller{
    private $articleDAO;
    private $article;

    public function performAction(){
        if($_SESSION['loggedin']['urole'] == 'author' and $_SESSION['loggedin'] != null) {
            if($_SERVER['REQUEST_METHOD']=='GET'){
                $this->renderView("articleAdd",[]);
            }else{
                if($_POST['submit']=='Confirm'){
                    $article = new Article();
                    $article->setTitle($_POST['title']);
                    $article->setImgPath("images/".$_POST['imgPath']);
                    $article->setContent($_POST['content']);
                    $article->setUserID($_SESSION['loggedin']['userID']);
                    $articleDAO = new ArticleDAO();
                    $articleDAO->addArticle($article);
                }
                //** Next View */
                header( "Location: start.php?action=articleList");
                exit;
            }
        } else {
            $this->renderView("restrictedAccess",[]);
        }
    }
}
?>