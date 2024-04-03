<?php
include_once "./models/UserDAO.php";

class UserList extends Controller{

    public function performAction(){
        $userDAO = new UserDAO();

        $users=$userDAO->getUsers();
        $this->renderView("userList",$users);
    }

    public function getAuth(){
        return "PROTECTED";
    }

}
?>