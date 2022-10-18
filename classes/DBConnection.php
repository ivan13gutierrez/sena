<?php
if(!defined('DB_SERVER')){
    require_once("../initialize.php");
}
class DBConnection{

    private $host = babvsavzfteskc1vxzzu-mysql.services.clever-cloud.com;
    private $username = uwk72w4ytyml670b;
    private $password = nCJxiwmBR5QwXwecnm78;
    private $database = babvsavzfteskc1vxzzu;
    
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