<?php
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
require "$rootDir\deRoset\\verwerk\session.php";
class Product
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
        $databaseConnection = new Database();
$conn = $databaseConnection->getConnection();
    }

    private function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM `products` WHERE id=$id";
        return mysqli_fetch_assoc($this->query($sql));

    }
    public function getAll()
    {
        $sql = "SELECT * FROM `products`";
        return mysqli_fetch_all($this->query($sql),MYSQLI_ASSOC);
    }
    public function getAllNFK()
    {
        $sql = "SELECT * FROM `orders` 
        INNER JOIN orders on orders.product_id = products.id
        INNER JOIN user s on s.ProductID = p.ProductID  

        
        ";
        
        return mysqli_fetch_all($this->query($sql),MYSQLI_ASSOC);
    }

    public function create($name,$price_per_kg,$is_flavor_of_week,$category)
    {
        $sql = "INSERT INTO  products SET name='$name', price_per_kg='$price_per_kg', is_flavor_of_week = '$is_flavor_of_week' ,category = '$category'";
        if (mysqli_query($this->conn, $sql)) {
            header("location: ../index.php");
    
        
    }
    }
    public function update($id,$name,$price_per_kg,$is_flavor_of_week,$category)
    {
        $sql = "select * from products where id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        $count = mysqli_num_rows($result);
        if ($count!=0) {
    
    
    
        $sql = "UPDATE products SET name='$name', price_per_kg='$price_per_kg', is_flavor_of_week = '$is_flavor_of_week' ,category = '$category' WHERE products.id='$id'";
        if (mysqli_query($this->conn, $sql)) {
            echo "succes";
    
        }
    }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE products.id ='$id'";
        if (mysqli_query($this->conn, $sql)) {
            header("location: ./index.php");
        }
    }
}