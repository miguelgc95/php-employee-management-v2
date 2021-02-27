<?php

class App
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // cuando se ingresa sin definir controlador
        if (empty($url[0])) {
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        } else {
            $archivoController = 'controllers/' . $url[0] . '.php';
            if (file_exists($archivoController)) {
                echo "ok";
            } else {
                $archivoController = 'controllers/errors.php';
                require_once $archivoController;
                new Errors();//igual no hace falta definir la variable no?
            }
        }
    }
}
