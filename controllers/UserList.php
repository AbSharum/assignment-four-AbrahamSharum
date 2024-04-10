<?php
include_once "./models/UserDAO.php";

class UserList extends Controller{

    public function performAction(){
        $userDAO = new UserDAO();

        $users=$userDAO->getUsers();
        if($_SESSION['loggedin']['urole'] == 'admin' and $_SESSION['loggedin'] != null) {
            $this->renderView("userList",$users);
        } else {
            $this->renderView("restrictedAccess",[]);
        }
    }

    public function getAuth(){
        return "PROTECTED";
    }

}
?>