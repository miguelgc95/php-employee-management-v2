<?php

class Errors extends Controller{

    public function __construct(){
        parent::__construct();
        $this->view->mensaje = "Hubo un error en la solicitud o no existe la página";
        $this->view->render('errors/index');
    }
}

?>