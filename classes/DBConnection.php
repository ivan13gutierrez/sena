<?php
if(!defined('DB_SERVER')){
    require_once("../initialize.php");
}
class DBConnection{

    private $host = "bhhfrot5fnuyytk5xhq6-mysql.services.clever-cloud.com";
    private $username = "usc52f0tmhrafirw";
    private $password = "6toWNLU7CnkKYvs2yG1v";
    private $database = "bhhfrot5fnuyytk5xhq6";
    
    public $conn;
    
    public function __construct(){

        if (!isset($this->conn)) {
            
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
    }
    public function __destruct(){
        $this->conn->close();
    }
}
?>