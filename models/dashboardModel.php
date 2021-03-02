<?php

class DashboardModel extends Model{
    function __construct()
    {
        parent::__construct();
    }

    public function get(){
        try {
            $query = $this->db->connect()->prepare("SELECT * FROM employees");
            $query->execute();
            $employees = $query->fetchAll();
            return $employees;
        } catch (PDOException $e) {
            return $e;
        }

    }
}