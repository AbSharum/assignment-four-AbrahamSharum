<?php

class RestrictedAccess extends Controller{
    public function performAction(){
            if($_POST['submit'] =='Home') {
                header( "Location: start.php?action=home");
                exit;
            } elseif ($_POST['submit'] =='Login') {
                header( "Location: start.php?action=login");
                exit;
            } elseif ($_POST['submit'] =='Back') {
                if ($_SESSION['currentPage'] == null) {
                    $_SESSION['currentPage'] = 'home';
                }
                header( "Location: start.php?action=".$_SESSION['currentPage']);
                exit;
        }
    }
}
?>