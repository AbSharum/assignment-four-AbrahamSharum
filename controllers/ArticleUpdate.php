<?php
include_once "./models/ArticleDAO.php";

class ArticleUpdate extends Controller{
    private $ArticleDAO;
    private $article;

    public function performAction(){
        if(($_SESSION['loggedin']['urole'] == 'author' or $_SESSION['loggedin']['urole'] == 'admin') and $_SESSION['loggedin'] != null) {
            if($_SERVER['REQUEST_METHOD']=='GET'){
                $articleID = $_GET['articleID'];
                $articleDAO = new ArticleDAO();
                $article = $articleDAO->getArticle($articleID);
                if(($_SESSION['loggedin']['urole'] == 'author' and $_SESSION['loggedin']['userID'] == $article->getUserID()) or $_SESSION['loggedin']['urole'] == 'admin') {
                    $this->renderView("articleUpdate",$article);
                } else {
                    $this->renderView("restrictedAccess",[]);
                }
            }else{
                if($_POST['submit']=='Confirm'){
                    $article = new Article();
                    $article->setArticleID($_POST['articleID']);
                    $article->setTitle($_POST['title']);
                    $article->setContent($_POST['content']);
                    $article->setImgPath($_POST['imgPath']);
                    //** Update Model */
                    $articleDAO = new articleDAO();
                    $articleDAO->updateArticle($article);
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