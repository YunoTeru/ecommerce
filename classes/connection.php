<?php

class Database{
    //member of variables
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $database = "product";

    public $conn;

    //Constructer
    //This will construct the cnnection

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if($this->conn->connect_error){
            die("Connection Error:".$this->conn->connect_error);
        }else{
            return $this->conn;
        }
    }

}

?>