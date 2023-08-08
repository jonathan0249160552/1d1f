<?php

require 'config.php';
class Authenticates extends Database
{

    //Current User In Session
    public function currentAdmin($user_name)
    {
        $sql = "SELECT * FROM  admin_user WHERE user_name =:user_name AND deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_name' => $user_name]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    public function allUsers()
    {
        $sql = "SELECT * FROM  admin_user WHERE  deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    public function allCustomers()
    {
        $sql = "SELECT * FROM  users WHERE  deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    public function allExhibition()
    {
        $sql = "SELECT * FROM  exhibition WHERE  deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    public function user_admin_exist($user_name)
    {
        $sql = "SELECT user_name  FROM admin_user WHERE user_name = :user_name ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_name' => $user_name]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);


        return $result;
    }

    public function register_admin($name, $user_name, $admin_id, $email, $phone, $password)
    {
        $sql = "INSERT INTO admin_user (full_name,user_name,admin_id,email,phone,password) VALUES (:full_name,:user_name,:admin_id,:email,:phone,:password)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'full_name' => $name, 'user_name' => $user_name, 'admin_id' => $admin_id, 'email' => $email,
            'phone' => $phone, 'password' => $password
        ]);

        return true;
    }

    //login existing user 
    public function login_admin($user_name)
    {
        $sql = "SELECT user_name,password FROM admin_user WHERE user_name = :user_name AND deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_name' => $user_name]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    public function imageToDatabase($company_name, $type, $picture)
    {
        $sql = "INSERT INTO exhibition (company_name,picture,type) VALUES (:company_name,:picture,:type)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'picture' => $picture, 'type' => $type, 'company_name' => $company_name
        ]);

        return true;
    }


    public function deleteUser($id)
    {
        $sql = "UPDATE  admin_user set deleted = 1  WHERE id= $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return true;
    }

    public function deleteCustomer($id)
    {
        $sql = "UPDATE  users set deleted = 1  WHERE id= $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return true;
    }

    public function deleteExhibition($id)
    {
        $sql = "UPDATE  exhibition set deleted = 1  WHERE id= $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return true;
    }






}
