<?php

class MVCconnect {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "studybuddy";
    public $conn;

    public function connect() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
        
        return $this->conn;
    }
}

