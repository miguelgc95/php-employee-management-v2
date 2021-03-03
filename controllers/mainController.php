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
        } else {
            $this->view->message = 'Incorrect e-mail or password';
            $this->view->render('main/index');
        }
    }

    public function render()
    {
        $this->view->render('main/index');
    }

    private function saveSession($user)
    {
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['init'] = time();
        $_SESSION['life'] = 600;
    }

    function logout()
    {
        session_destroy();
        $this->view->message = "Logout correctly";
        $this->view->render('main/index');
    }

    function logoutByTime()
    {
        session_destroy();
        $this->view->message = "Your session has expired";
        $this->view->render('main/index');
    }
}
