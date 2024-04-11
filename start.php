<?php
    include_once "./framework/Controller.php";
    include_once "./framework/Router.php";
    include_once "./controllers/Home.php";
    include_once "./controllers/About.php";
    include_once "./controllers/Login.php";
    include_once "./controllers/LogOut.php";
    include_once "./controllers/UserList.php";
    include_once "./controllers/UserAdd.php";
    include_once "./controllers/UserUpdate.php";
    include_once "./controllers/UserDelete.php";
    include_once "./controllers/ArticleAdd.php";
    include_once "./controllers/ArticleUpdate.php";
    include_once "./controllers/ArticleDelete.php";
    include_once "./controllers/ArticleList.php";
    include_once "./controllers/ArticleDisplay.php";
    include_once "./controllers/RestrictedAccess.php";

    class MyRouter extends Router{
        public function authCheck($action){
            $controller = $this->controllers[$action];
            $access = $controller->getAuth();
            if($access!="PUBLIC"){
                if(!isset($_SESSION['loggedin'])){
                    $controller->renderView('restrictedAccess',[]);
                    exit;
                }
            }
        }
    }
    $router = new MyRouter();
    $router->showErrors(0);

    $router->addController('home',new Home());
    $router->addController('about',new About());
    $router->addController('login',new Login());
    $router->addController('logout',new Logout());
    $router->addController('userList',new UserList());
    $router->addController('userAdd',new UserAdd());
    $router->addController('userUpdate',new UserUpdate());
    $router->addController('userDelete',new UserDelete());
    $router->addController('articleAdd',new ArticleAdd());
    $router->addController('articleUpdate',new ArticleUpdate());
    $router->addController('articleDelete', new ArticleDelete());
    $router->addController('articleList',new ArticleList());
    $router->addController('restrictedAccess',new RestrictedAccess());
    $router->addController('articleDisplay',new ArticleDisplay());

    $router->run();

?>