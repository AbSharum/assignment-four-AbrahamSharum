<?php
include_once "./models/UserDAO.php";

class UserUpdate extends Controller{
    private $userDAO;
    private $user;

    public function performAction(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $userID = $_GET['userID'];
            $userDAO = new UserDAO();
            $user = $userDAO->getUser($userID);
            $this->renderView("userUpdate",$user);
        }else{
            if($_POST['submit']=='Confirm'){
                $user = new User();
                $user->setUserID($_POST['userID']);
                $user->setFirstname($_POST['firstname']);
                $user->setLastname($_POST['lastname']);
                $user->setUsername($_POST['username']);
                $user->setPasswd($_POST['passwd']);
                $user->setUrole($_POST['urole']);
                $user->setEmail($_POST['email']);
                //** Update Model */
                $userDAO = new UserDAO();
                $userDAO->updateUser($user);
            }
            //** Next View */
            header( "Location: start.php?action=userList");
            exit;
        }
    }
}
?>