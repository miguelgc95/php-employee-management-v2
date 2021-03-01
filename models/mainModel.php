<?php

class MainModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUser($email, $password)
    {
        $query = $this->db->connect()->prepare("SELECT * FROM users WHERE email = :email");
        try {
            $query->execute(['email' => $email]);
            $user = $query->fetch();
            if (password_verify($password, $user["password"])) {
                return $user;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return $e;
        }
    }
}
