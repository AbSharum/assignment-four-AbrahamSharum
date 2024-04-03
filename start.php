<?php
    include_once "./framework/Controller.php";
    include_once "./framework/Router.php";
    include_once "./controllers/Home.php";
    include_once "./controllers/About.php";
    include_once "./controllers/Login.php";
    include_once "./controllers/UserList.php";
    include_once "./controllers/UserAdd.php";
    include_once "./controllers/UserUpdate.php";
    include_once "./controllers/UserDelete.php";

    class MyRouter extends Router{
        public function authCheck($action){
            $controller = $this->controllers[$action];
            $access = $controller->getAuth();
            if($access!="PUBLIC"){
                if(!isset($_SESSION['loggedin'])){
                    header("Location: start.php?action=login");
                    exit;
                }
            }
        }
    }

    $router = new MyRouter();
    $router->showErrors(1);

    $router->addController('home',new Home());
    $router->addController('about',new About());
    $router->addController('login',new Login());
    $router->addController('userList',new UserList());
    $router->addController('userAdd',new UserAdd());
    $router->addController('userUpdate',new UserUpdate());
    $router->addController('userDelete',new UserDelete());

    $router->run();

?>