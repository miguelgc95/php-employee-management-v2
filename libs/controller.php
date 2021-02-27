<?php

class Controller{

    function __construct(){
        //echo "<p>Controlador base</p>";
        $this->view = new View();
    }

    function loadModel($model){
        $urll = 'models/'.$model.'model.php';

        if(file_exists($urll)){
            require $urll;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
}

?>