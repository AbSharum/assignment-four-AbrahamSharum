<?php
include_once "./models/UserDAO.php";

class Login extends Controller{
    private $userDAO;
    private $result;

    public function performAction(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $this->renderView("login",[]);
        }else{
            if(isset($_POST['username']) && isset($_POST['passwd'])){
                $username = $_POST['username'];
                $passwd = $_POST['passwd'];
                $userDAO = new UserDAO();
                $result=$userDAO->authenticate($username,$passwd);
                if($result==NULL){
                    //** Unsuccessful */
                    header('Location: start.php?action=login');
                    exit;
                }else{
                    //** Successful */
                    $_SESSION['loggedin']=$result;
                    header('Location: start.php?action=home');
                    exit;
                }
            }
            
        }
    }
    //*** Override renderView from Controller.php */
    public function renderView($view,$data=[]){
        include "./views/$view.php";
    }
}
?>