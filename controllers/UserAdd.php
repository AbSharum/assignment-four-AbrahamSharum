<?php
include_once "./models/UserDAO.php";

class UserAdd extends Controller{
    private $userDAO;
    private $user;

    public function performAction(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $this->renderView("userAdd",[]);
        }else{
            if($_POST['submit']=='Confirm'){
                $user = new User();
                $user->setFirstname($_POST['firstname']);
                $user->setLastname($_POST['lastname']);
                $user->setUsername($_POST['username']);
                $user->setPasswd($_POST['passwd']);
                $user->setUrole($_POST['urole']);
                $user->setEmail($_POST['email']);
                $userDAO = new UserDAO();
                $userDAO->addUser($user);
            }
            //** Next View */
            header( "Location: start.php?action=userList");
            exit;
        }
    }
}
?>