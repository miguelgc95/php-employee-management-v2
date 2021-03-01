<?php

class Dashboard extends Controller{
    function __construct()
    {
        parent::__construct();
        
    }

    public function render()
    {
        $this->view->render('dashboard/index');
    }
}