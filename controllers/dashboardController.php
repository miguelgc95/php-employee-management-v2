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

    public function newEmployee()
    {
        $this->view->render("dashboard/employee");
    }

    public function deleteEmployee()
    {
        $query = getQueryStringParameters();
        echo $this->model->delete($query['data']);
    }
    public function addEmployee()
    {
        $_POST['lastName'] = isset($_POST['lastName']) ? $_POST['lastName'] :  null;
        $_POST['gender'] = isset($_POST['gender']) ? $_POST['gender'] :  null;
        $_POST['avatar'] = isset($_POST['avatar']) ? $_POST['avatar'] :  null;
        $this->view->message = $this->model->add($_POST);
        if (isset($_POST['employeePage'])) {
            $this->view->render('dashboard/index');
        } else {
            header('Content-Type: application/json');
            echo json_encode($_POST['id']);
        } //TODO: return id
    }
    public function updateEmployee()
    {
        $query = isset($_POST['lastName']) ? $_POST : getQueryStringParameters();
        $query['avatar'] = isset($query['avatar']) ? $query['avatar'] :  null;
        $this->view->message = $this->model->update($query);
        if (isset($query['employeePage'])) {
            $this->view->employee = $_POST;
            $this->view->render('dashboard/employee');
        } else {
            echo $this->view->message;
        }
    }

    public function employee($id)
    {
        $this->view->employee = $this->model->getById($id);
        $this->view->render("dashboard/employee");
    }
}
