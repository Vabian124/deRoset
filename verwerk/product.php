<?php
require('database.php');
class Product
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    private function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM `product` WHERE id=$id";
        return mysqli_fetch_assoc($this->query($sql));
    }
    public function getAll()
    {
        $sql = "SELECT `id`, `name`, `cost_price`, `selling_price`, `category` FROM `product`";
        return mysqli_fetch_all($this->query($sql),MYSQLI_ASSOC);
    }
}

$databaseConnection = new Database();
$conn = $databaseConnection->getConnection();
