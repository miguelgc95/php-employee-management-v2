<?php

class Dashboard extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        $this->view->render('dashboard/index');
    }

    public function getAllEmployees()
    {
        header('Content-Type: application/json');
        echo json_encode($this->model->get());
    }

    public function newEmployee(){
        $this->view->render("dashboard/employee");
    }

    public function deleteEmployee(){
        $this->view->render("dashboard/employee");
    }
    public function addEmployee(){
        $this->view->render("dashboard/employee");
    }
    public function updateEmployee(){
        $this->view->render("dashboard/employee");
    }
    public function employee($id){
        $this->view->render("dashboard/employee");
    }
}
