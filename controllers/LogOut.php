<?php
include_once "./models/UserDAO.php";

class LogOut extends Controller{
    private $userDAO;
    private $result;

    public function performAction(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $page = $_SERVER['REQUEST_URI'];
            $name = parse_url($page);
            parse_str($name['query'], $params);
            $this->renderView("logout",[]);
        }else{
            if($_POST['submit'] == 'confirm') {
                $_SESSION['loggedin']=null;
                echo 'lol';
                header('Location: start.php?action=home');
                exit;
            }else{
                header('Location: start.php?action='.$params['action']'');
                exit;
            }
            
        }
    }
}
?>