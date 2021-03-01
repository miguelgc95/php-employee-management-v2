<?php

require_once("./models/dashboardModel.php");

class Main extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        if ($user = $this->model->getUser($_POST["email"], $_POST["password"])) {
            $this->saveSession($user);
            header('Location: ' . URL . 'dashboard');
        }
    }
    public function render()
    {
        $this->view->render('main/index');
    }
    public function logout()
    {
    }
    private function saveSession($user)
    {
        session_start(); //App instanciado
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['init'] = time();
        $_SESSION['life'] = 600;
    }
}
