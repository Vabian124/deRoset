<?php
class Order
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
        $sql = "SELECT * FROM `orders` WHERE id=$id";
        return mysqli_fetch_assoc($this->query($sql));

    }
    public function getAll()
    {
        $sql = "SELECT * FROM `orders`";
        return mysqli_fetch_all($this->query($sql),MYSQLI_ASSOC);
    }
    public function create($user_id,$product_id,$pickup,$delivery,$isRecieved,$zipcode,$adress,$city)
    {
        $sql = "INSERT INTO  orders SET  user_id='$user_id', product_id = '$product_id' ,pickup = '$pickup', delivery='$delivery',isRecieved='$isRecieved',zipcode='$zipcode',adress='$adress',city='$city'";
        if (mysqli_query($this->conn, $sql)) {echo "succes";}
    }
    public function update($id,$user_id,$product_id,$pickup,$delivery,$isRecieved,$zipcode,$adress,$city)
    {
        $sql = "select * from orders where id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        $count = mysqli_num_rows($result);
        if ($count!=0) {
    
    
    
        $sql = "UPDATE orders SET user_id='$user_id', product_id = '$product_id' ,pickup = '$pickup', delivery='$delivery', isRecieved='$isRecieved',zipcode='$zipcode',adress='$adress',city='$city' WHERE orders.id='$id'";
        if (mysqli_query($this->conn, $sql)) {
            echo "succes";
    
        }
        }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM orders WHERE orders.id ='$id'";
        if (mysqli_query($this->conn, $sql)) {
            header("location: ../index.php");
        }
    }
}




