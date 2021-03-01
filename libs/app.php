<?php

class App
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        var_dump($url);

        //$session = new Session($url[0]);

        if (empty($url[0])) {
            $controllerRoute = 'controllers/mainController.php';
            require_once($controllerRoute);
            $controller = new Main();
            $controller->render();
        } else {
            $controllerRoute = 'controllers/' . $url[0] . 'Controller.php';
            if (file_exists($controllerRoute)) {
                require_once $controllerRoute;
                $controller = new $url[0];
                $controller->loadModel($url[0]);
                $nparam = sizeof($url);
                if ($nparam > 2) {
                    $param = [];
                    for ($i = 2; $i < $nparam; $i++) {
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                } else if ($nparam > 1) {
                    $controller->{$url[1]}();
                }
            } else {
                $controllerRoute = 'controllers/errorsController.php';
                require_once($controllerRoute);
                new Errors();
            }
        }
    }
}
