<?php

require 'config.php';
class Authenticates extends Database
{



    //Current User In Session
    public function currentUsers($user_name)
    {
        $sql = "SELECT * FROM  users WHERE user_name =:user_name AND deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_name' => $user_name]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

   

    public function user_exist($user_name)
    {
        $sql = "SELECT user_name  FROM users WHERE user_name = :user_name ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_name' => $user_name]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);


        return $result;
    }

    
  

    public function register_user($name, $user_name,$user_id, $email, $phone, $password)
    {
        $sql = "INSERT INTO users (full_name,user_name,user_id,email,phone,password) VALUES (:full_name,:user_name,:user_id,:email,:phone,:password)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'full_name' => $name, 'user_name' => $user_name,'user_id'=>$user_id, 'email' => $email,
            'phone' => $phone, 'password' => $password
        ]);

        return true;
    }

    public function login_user($user_name)
    {
        $sql = "SELECT user_name,password FROM users WHERE user_name = :user_name AND deleted IS NULL" ;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_name' => $user_name]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

  

    public function post_application($email, $name, $phone, $letter)
    {
        $sql = "INSERT INTO job_applicants (email,name,contact,letter) VALUES (:email,:name,:contact,:letter)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'email' => $email, 'name' => $name, 'contact' => $phone,
            'letter' => $letter
        ]);

        return true;
    }

    public function contactUs($name, $email, $phone, $subject,$message)
    {
        $sql = "INSERT INTO contact (name,email,phone,subject,message) VALUES (:name,:email,:phone,:subject,:message)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'email' => $email, 'name' => $name, 'phone' => $phone,
            'subject' => $subject,'message'=> $message
        ]);

        return true;
    }










}
