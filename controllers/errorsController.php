<?php

class Errors extends Controller{

    public function __construct(){
        parent::__construct();
        $this->view->mensaje = "This controller does not exist";
        $this->view->render('errors/index');
    }
}
