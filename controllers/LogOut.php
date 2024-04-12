<?php
include_once "./models/UserDAO.php";

class LogOut extends Controller{
    private $userDAO;
    private $result;

    public function performAction(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            if($_SESSION['loggedin'] != null) {
                $userDAO = new UserDAO();
                $user = $userDAO->getUser($_SESSION['loggedin']['userID']);
                $this->renderView("logout",$user);
            } else {
                $this->renderView("logout",[]);
            }
        }else{
            if($_POST['submit'] == 'Confirm') {
                $_SESSION['loggedin']=null;
                header('Location: start.php?action=home');
                exit;
            }else{
                header('Location: start.php?action='.$_SESSION['currentPage']);
                exit;
            }
            
        }
    }
}
?>