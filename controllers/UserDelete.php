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
                $userDAO->deleteUser($userID);
            }
            header( "Location: start.php?action=userList");
            exit;
        }
    }
}
?>