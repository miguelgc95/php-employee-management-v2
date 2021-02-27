<?php

class App
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        var_dump($url);

        // cuando se ingresa sin definir controlador
        if (empty($url[0])) {
            $archivoController = 'controllers/main.php';
            require_once($archivoController);
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        } else {
            $archivoController = 'controllers/' . $url[0] . '.php';
            if (file_exists($archivoController)) {
                require_once($archivoController);
                $controller = new $url[0];
                $controller->loadModel($url[0]);
                $controller->render();
            } else {
                $archivoController = 'controllers/errors.php';
                require_once($archivoController);
                new Errors();
            }
        }
    }
}
