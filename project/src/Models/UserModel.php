<?php

namespace App\Models;
session_start();

use App\Config\Database;
use App\Classes\Role;
use App\Classes\User;
use PDO;



class UserModel{
    private $conn ;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function findUserByEmailAndPassword($email,$password){

        $query= "SELECT role.id,role.role as role_name ,users.id as user_id,users.email,users.password from users
                 join role on users.role_id = role.id 
                 WHERE  users.email = :email";
        // $hashed = password_hash($password,PASSWORD_ARGON2I);
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email",$email);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if(!$row){
   
            return null ; 

        }else 
        if(password_verify($password,$row["password"]))
        {
            $_SESSION["name"]=$row["role_name"];
            $_SESSION["id"]=$row["user_id"];

            $role = new Role($row["id"],$row["role_name"]);
            return new User($row["user_id"],$row["email"],$row["password"],$role);
            
        }
    }  

    public function AddUser($email,$password,$role){
        
        $query1 = "INSERT INTO `users` (`email`, `password`, `role_id`) VALUES
        (:email, :password, :role );";
        
    
        $hashedpass = password_hash($password,PASSWORD_ARGON2I); 
    
        $stmt = $this->conn->prepare($query1);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":password",$hashedpass);
        $stmt->bindParam(":role",$role);
        $stmt->execute();
        $lastid = $this->conn->lastInsertId();

        
        if($role == 1){
           $queryadmin = "INSERT INTO `admin` ( `user_id`) VALUES
            (:userid);";
                    $stmt1 = $this->conn->prepare($queryadmin);
                    $stmt1->bindParam(":userid",$lastid);
                    $stmt1->execute();
        }else if($role == 2){
            "INSERT INTO `recruteur` (`id`, `nomentreprise`, `user_id`) VALUES
            (:nomentreprise,:userid);";
                     $stmt1 = $this->conn->prepare($queryadmin);
                     $stmt1->bindParam(":userid",$lastid);
                     $stmt1->bindParam(":nomentreprise",$lastid);
                     $stmt1->execute();
         }
        
        


    }

    

}

?>