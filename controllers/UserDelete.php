<?php
include_once "./models/UserDAO.php";

class UserDelete extends Controller{
    public function performAction(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $userID = $_GET['userID'];
            $userDAO = new UserDAO();
            $user = $userDAO->getUser($userID);
            $this->renderView("userDelete",$user);
        }else{
            if($_POST['submit']=='Confirm'){
                $userID=$_POST['userID'];
                $userDAO = new UserDAO();
                $ArticleDAO = new ArticleDAO();
                $ArticleDAO->deleteArticleUserID($userID);
                if($_SESSION['loggedin']['userID'] == $userID) {
                    $userDAO->deleteUser($userID);
                    $_SESSION['loggedin'] = null;
                    header( "Location: start.php?action=home");
                } else {
                    $userDAO->deleteUser($userID);
                    header( "Location: start.php?action=userList");
                }
            } else {
                header( "Location: start.php?action=userList");
            }
            exit;
        }
    }
}
?>