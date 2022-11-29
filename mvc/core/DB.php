<?php
class DB{
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'webbandt';
    public $conn;

    function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if($this->conn->connect_errno){
            die('Kết nối thất bại');
        }
        else{
            mysqli_query($this->conn, "set names 'utf8'");
        }
    }
}