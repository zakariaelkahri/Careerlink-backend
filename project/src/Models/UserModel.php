<?php

namespace App\Models;

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

        $query= "SELECT role.id,role.role,users.id as user_id,users.email,users.password from users
                 join role on users.role_id = role.id 
                 WHERE  users.email = :email and users.password = :password ";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":password",$password);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if(!$row){
   
            return null ; 

        }else{

            $role = new Role($row["id"],$row["role"]);
            return new User($row["user_id"],$row["email"],$row["password"],$role);

        }
    }  

    public function AddUser($email,$password,$role){

        $query1 = "INSERT INTO `users` (`email`, `password`, `role_id`) VALUES
        (:email, :password, :role )";

        $stmt = $this->conn->prepare($query1);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":password",$password);
        $stmt->bindParam(":role",$role);
        $stmt->execute();


    }

    

}

?>