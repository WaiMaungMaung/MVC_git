<?php

class UserModel{

    public function __construct()
    {
        $this->db=new database();
    }
    public function getAllUser(){
        $this->db->query("SELECT * FROM user");
       return $this->db->multipleset();
    }
    public function checkEmail($email='',$password=''){

            $this->db->query("SELECT * FROM user WHERE email=:email");
            $this->db->bind(':email',$email);

            if($password){
                return $this->db->singleset();
            }
            else{
                return $this->db->rowCount();
            }
    }


    public function register($name,$email,$password){
        $password=password_hash($password,PASSWORD_BCRYPT);
        $this->db->query("INSERT INTO user (name,email,password) VALUES (:name,:email,:password)");
        $this->db->bind(':name',$name);
        $this->db->bind(':email',$email);
        $this->db->bind(':password',$password);
        return $this->db->execute();
    }
}
