<?php
class Controller{
    public $model;

    public function performAction(){
        return;
    }

    public function renderView($view,$data=[]){
        
        include "./template/template.php";
    }

    public function view($view,$data=[],$type){
        if ($type == "head") {
            include "./template/noFoot.php";
        } else if ($type == "foot") {
            include "./template/noHead.php";
        }
    }

    public function getAuth(){
        return "PUBLIC";
    }
}
?>