<?php

class DashboardModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        try {
            $query = $this->db->connect()->prepare("SELECT * FROM employees");
            $query->execute();
            $employees = $query->fetchAll();
            return $employees;
        } catch (PDOException $e) {
            return $e;
        }
    }

    public function delete($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM employees WHERE id = :id");
        try {
            $query->execute(['id' => $id]);
            return "Deleted correctly";
        } catch (PDOException $e) {
            return $e;
        }
    }

    public function add($employee)
    {
        $query = $this->db->connect()->prepare("INSERT INTO employees (id, name, lastName, email, gender, city, streetAddress, state, age, postalCode, phoneNumber, avatar) VALUES (null, :name , :lastName, :email, :gender, :city, :streetAddress, :state, :age, :postalCode, :phoneNumber, :avatar)");
        try {
            $query->execute(['name' => $employee['name'], 'lastName' => $employee['lastName'], 'email' => $employee['email'], 'gender' => $employee['gender'], 'city' => $employee['city'], 'streetAddress' => $employee['streetAddress'], 'state' => $employee['state'], 'age' => $employee['age'], 'postalCode' => $employee['postalCode'], 'phoneNumber' => $employee['phoneNumber'], 'avatar' => $employee['avatar']]);
            return 'User added correctly';
        } catch (PDOException $e) {
            return $e;
        }
    }

    public function update($employee)
    {
        $query = $this->db->connect()->prepare("UPDATE employees SET name = :name , lastName = :lastName, email= :email, gender= :gender, city=:city, streetAddress=:streetAddress, state=:state, age=:age, postalCode=:postalCode, phoneNumber=:phoneNumber, avatar=:avatar WHERE id = :id");
        try {
            $query->execute(['name' => $employee['name'], 'lastName' => $employee['lastName'], 'email' => $employee['email'], 'gender' => $employee['gender'], 'city' => $employee['city'], 'streetAddress' => $employee['streetAddress'], 'state' => $employee['state'], 'age' => $employee['age'], 'postalCode' => $employee['postalCode'], 'phoneNumber' => $employee['phoneNumber'], 'avatar' => $employee['avatar'], 'id' => $employee['id']]);
            return 'User updated correctly';
        } catch (PDOException $e) {
            return $e;
        }
    }

    public function getById($id){
        $query = $this->db->connect()->prepare("SELECT * FROM employees WHERE id = :id");
        try {
            $query->execute(['id' => $id[0]]);
            $employee = $query->fetch();
            return $employee;
        } catch (PDOException $e) {
            return $e;
        }
    }
}
