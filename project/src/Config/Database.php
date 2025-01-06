<?php
namespace App\Config;

use PDO;
use PDOException;

class Database { 
    private $dbHost = "mysql";
    private $dbUsername = "root"; 
    private $dbPassword = "root_password"; 
    private $dbName = "careerlink1"; 
    private $conn; 

    public function connect() { 
        try { 
            $this->conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);
            return $this->conn;
        } catch (PDOException $e) { 
            die("Failed to connect with MySQL: " . $e->getMessage()); 
        } 
    } 
}
?>
