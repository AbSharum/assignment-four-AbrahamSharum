<?php

class RestrictedAccess extends Controller{
    public function performAction(){
            if(isset($_POST['submit']) =='Home'){
            header( "Location: start.php?action=home");
            exit;
        }
    }
}
?>