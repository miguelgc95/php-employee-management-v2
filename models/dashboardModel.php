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
            return ["Problem with database", $e];
        }
    }

    public function getIdByEmail($email)
    {
        try {
            $getId = $this->db->connect()->prepare('SELECT id FROM employees WHERE email =:email');
            $getId->execute(['email' => $email]);
            $id = $getId->fetch();
            return $id['id'];
        } catch (PDOException $e) {
            return ["Problem with database", $e];
        }
    }

    public function update($employee)
    {
        $query = $this->db->connect()->prepare("UPDATE employees SET name = :name, lastName = :lastName, email= :email, gender= :gender, city=:city, streetAddress=:streetAddress, state=:state, age=:age, postalCode=:postalCode, phoneNumber=:phoneNumber, avatar=:avatar WHERE id = :id");
        try {
            $query->execute(['name' => $employee['name'], 'lastName' => $employee['lastName'], 'email' => $employee['email'], 'gender' => $employee['gender'], 'city' => $employee['city'], 'streetAddress' => $employee['streetAddress'], 'state' => $employee['state'], 'age' => $employee['age'], 'postalCode' => $employee['postalCode'], 'phoneNumber' => $employee['phoneNumber'], 'avatar' => $employee['avatar'], 'id' => $employee['id']]);
            return 'User updated correctly';
        } catch (PDOException $e) {
            return $e;
        }
    }

    public function getById($id)
    {
        $query = $this->db->connect()->prepare("SELECT * FROM employees WHERE id = :id");
        try {
            $query->execute(['id' => $id[0]]);
            $employee = $query->fetch();
            return $employee;
        } catch (PDOException $e) {
            return $e;
        }
    }

    function uifacesRequest($age = false, $gender = false, $limit = 8)
    {
        $partial_url = $gender ? "&gender[]=$gender&from_age=" . ($age - 5) . "&to_age=" . ($age + 10) : "";
        $url = "https://uifaces.co/api?limit=$limit$partial_url";
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'X-API-KEY: 177AEE4B-C5854FEC-AEB8531D-318C0073'
        ));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        return json_decode($result, true);
    }
}
