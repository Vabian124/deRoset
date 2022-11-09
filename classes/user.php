<?php
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
require "$rootDir\deRoset\\verwerk\session.php";

class User
{
    private $conn;


    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function login($email, $wachtwoord)
    {
        
        $sql = "select * from users where email = '$email' and password = '$wachtwoord'";
        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {            
            $_SESSION['uid'] = $row['id'];
            $_SESSION['user'] = $row;
        } else {    
            echo "Login niet gelukt. Probeer het nog een keer";
        }
    }
    public function register($voornaam, $achternaam, $email, $wachtwoord, $telefoonnummer, $geboortedatum, $adres, $postcode, $stad, $rol)
    {
        $sql = "select * from users where email = '$email'";
        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if ($count == 0) {



            $sql = "INSERT INTO users (firstname, lastname, email, password ,date_of_birth, phonenumber,adress,zipcode,city,role)
        VALUES ('$voornaam', '$achternaam','$email', '$wachtwoord','$geboortedatum', '$telefoonnummer','$adres','$postcode','$stad','$rol')";
            if (mysqli_query($this->conn, $sql)) {
            }
        }
    }
    private function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }
    public function getAll()
    {
        $sql = "SELECT * FROM `users`";
        return mysqli_fetch_all($this->query($sql), MYSQLI_ASSOC);
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM `users` WHERE id=$id";
        return mysqli_fetch_assoc($this->query($sql));
    }
    public function update($id, $voornaam, $achternaam, $email, $wachtwoord, $telefoonnummer, $geboortedatum, $adres, $postcode, $stad)
    {




        $sql = "UPDATE users SET firstname='$voornaam', lastname='$achternaam', password = '$wachtwoord' ,date_of_birth = '$geboortedatum', phonenumber = '$telefoonnummer',adress='$adres',zipcode='$postcode',city='$stad' WHERE users.id='$id'";
        if (mysqli_query($this->conn, $sql)) {
            // session_destroy();
            // session_abort();
            // session_start();

            // $user = new User($this->conn);

            // $user->login($email,$wachtwoord);
            echo "succes for " . $id;
        }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE users.id ='$id'";
        if (mysqli_query($this->conn, $sql)) {
            session_destroy();
            session_unset();
            session_abort();
            header("location: ../index.php");
        }
    }
    public function logout()
    {
        if (isset($_SESSION)) {
            session_destroy();
            session_unset();
            session_abort();
        }
    }
}