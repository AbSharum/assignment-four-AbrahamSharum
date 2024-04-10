<?php

class RestrictedAccess extends Controller{
    public function performAction(){
            if($_POST['submit'] =='Home') {
                $this->renderView('home',[]);
            } elseif ($_POST['submit'] =='Login') {
                $this->renderView('login',[]);
        }
    }
}
?>