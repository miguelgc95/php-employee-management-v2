<?php

class Users extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  public function render()
  {
    $this->view->render('users/index');
  }

  public function getAllUsers()
  {
    header('Content-Type: application/json');
    echo json_encode($this->model->get());
  }

  public function newUser()
  {
    $this->view->render("users/user");
  }

  public function deleteUser()
  {
    $query = getQueryStringParameters();
    $query = $query['data'];
    echo $query == 1 ? 'You are root.' : $this->model->delete($query)[0];
  }
  public function addUser()
  {
    $response = $this->model->add($_POST);
    $this->view->message = $response[0];
    $this->view->render('users/user');
  }
}
