<?php
require('session.php');
class Database
{
    public $host  = "localhost";
    public $dbuser = "root";
    public $dbpass = "";
    public $dbname = "de_roset";

    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->dbuser, $this->dbpass, $this->dbname);
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

$databaseConnection = new Database();
$conn = $databaseConnection->getConnection();
