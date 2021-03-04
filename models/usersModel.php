<?php

class usersModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function get()
  {
    try {
      $query = $this->db->connect()->prepare("SELECT * FROM users");
      $query->execute();
      $users = $query->fetchAll();
      return $users;
    } catch (PDOException $e) {
      return $e;
    }
  }

  public function delete($id)
  {
    $query = $this->db->connect()->prepare("DELETE FROM users WHERE id = :id");
    try {
      $query->execute(['id' => $id]);
      return ['Deleted correctly', true];
    } catch (PDOException $e) {
      return ["Problem with database", $e];
    }
  }

  public function add($user)
  {
    $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
    $query = $this->db->connect()->prepare("INSERT INTO users (id, name, email, password) VALUES (null, :name , :email, :password)");
    try {
      $query->execute(['name' => $user['name'], 'email' => $user['email'], 'password' => $user['password']]);
      return ['User added correctly', true];
    } catch (PDOException $e) {
      return ["Problem with database", $e];
    }
  }
}
