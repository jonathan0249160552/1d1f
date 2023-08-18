<?php

require 'conn.php';
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

    public function allApplication()
    {
        $sql = "SELECT * FROM  job_applicants WHERE  deleted IS NULL";
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

    public function allGallery()
    {
        $sql = "SELECT * FROM  gallery WHERE  deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    public function allContact()
    {
        $sql = "SELECT * FROM  contact WHERE  deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }



    public function allGalleryDetails($val)
    {
        $sql = "SELECT * FROM  gallery WHERE id=$val AND deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }




    public function allJob()
    {
        $sql = "SELECT * FROM  job WHERE  deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    public function allJobDetails($val)
    {
        $sql = "SELECT * FROM  job WHERE id=$val AND  deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }


    public function allBlog()
    {
        $sql = "SELECT * FROM  blog WHERE   deleted IS NULL";
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

    public function postBlog($title, $content, $picture)
    {
        $sql = "INSERT INTO blog (title,content,picture) VALUES (:title,:content,:picture)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'title' => $title, 'content' => $content, 'picture' => $picture
        ]);

        return true;
    }

    public function postJob($company_name, $title, $des, $email, $contact, $pic)
    {
        $sql = "INSERT INTO job (company_name,job_title,job_des,email,contact,pic) VALUES (:company_name,:job_title,:job_des,:email,:contact,:pic)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'company_name' => $company_name, 'job_title' => $title, 'job_des' => $des, 'email' => $email, 'contact' => $contact, 'pic' => $pic
        ]);

        return true;
    }

    public function postGallery($title, $content, $pic)
    {
        $sql = "INSERT INTO gallery (title,text,pic) VALUES (:title,:text,:pic)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'title' => $title, 'text' => $content, 'pic' => $pic
        ]);

        return true;
    }

    public function postProductImage($post_code, $file_name)
    {
        $sql = "INSERT INTO product_image (post_code,file_name) VALUES (:post_code,:file_name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'post_code' => $post_code, 'file_name' => $file_name
        ]);

        return true;
    }

    public function postProduct($product_name, $product_price, $instruction, $dimension, $package_contain, $warranty,$color, $post_code, $cid, $file_name)
    {
        $sql = "INSERT INTO product_name (product_name,product_price,instruction,dimension,package_contain,warranty,color, post_code,cid,file_name) 
        VALUES (:product_name,:product_price,:instruction,:dimension,:package_contain,:warranty,:color,:post_code,:cid,:file_name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'product_name' => $product_name, 'product_price' => $product_price, 'instruction' => $instruction,
            'dimension' => $dimension, 'package_contain' => $package_contain, 'warranty' => $warranty,'color'=>$color, 'post_code' => $post_code, 'cid' => $cid, 'file_name' => $file_name
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

    public function deleteJob($id)
    {
        $sql = "UPDATE  job set deleted = 1  WHERE id= $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return true;
    }

    public function deleteGallery($id)
    {
        $sql = "UPDATE  gallery set deleted = 1  WHERE id= $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return true;
    }

    public function deleteApplication($id)
    {
        $sql = "UPDATE  job_applicants set deleted = 1  WHERE id= $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return true;
    }

    public function deleteBlog($id)
    {
        $sql = "UPDATE  blog set deleted = 1  WHERE id= $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return true;
    }

    public function count($val)
    {
        $sql = "SELECT * FROM $val WHERE  deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowCount();
        return $count;
    }
}
