<?php

namespace App\Classes;


class User
{

    private  $id;
    private  $email;
    private  $password;
    private  $role;

    public function __construct($id,$email,$password,$role)
    {
     
        $this->id=$id;
        $this->email=$email;
        $this->password=$password;
        $this->role=$role;


    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function setRole($role){
        $this->role=$role;
    
    }
    

    public function getId(){

        return $this->id;

    }
    public function getEmail(){

        return $this->email;

    }
    public function getPassword(){

        return $this->password;

    }
    public function getRole(){

        return $this->role;

    }
}
