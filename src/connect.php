<?php
class Database
{
    private $servername = "localhost";
    private $username = "yasser";
    private $password = "yasser";
    private $dbname = "shopping";
    private $conn = null;


    public function connect()
    {
        if ($this->conn == null) {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            if ($this->conn->connect_error) {
                die("connection failed" . $this->conn->connect_error);
            }
        }
        return $this->conn;
    }
}
//for users list onlyy!!!!!