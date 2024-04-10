<?php
include_once "./models/ArticleDAO.php";

class ArticleDelete extends Controller{
    public function performAction(){
        if(($_SESSION['loggedin']['urole'] == 'author' or $_SESSION['loggedin']['urole'] == 'admin') and $_SESSION['loggedin'] != null) {
            if($_SERVER['REQUEST_METHOD']=='GET'){
                $articleID = $_GET['articleID'];
                $articleDAO = new ArticleDAO();
                $article = $articleDAO->getArticle($articleID);
                if($article->getUserId() == $_SESSION['loggedin']['userID'] or $_SESSION['loggedin']['urole'] == 'admin') {
                    $this->renderView("articleDelete",$article);
                } else {
                    $this->renderView("restrictedAccess",[]);
                }
            }else{
                if($_POST['submit']=='Confirm'){
                    $articleID=$_POST['articleID'];
                    $articleDAO = new ArticleDAO();
                    $articleDAO->deleteArticle($articleID);
                }
                header( "Location: start.php?action=articleList");
                exit;
            }
        } else {
            $this->renderView("restrictedAccess",[]);
        }
    }
}
?>