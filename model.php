<?php

    class Model
    {
        private $server = "localhost";
        private $user = "root";
        private $pass = "13572468";
        private $dbname = "registration";
        private $conn;

        function __construct() {
            $this->conn = new mysqli($this->server,$this->user,$this->pass,$this->dbname);
            if ($this->conn->connect_error) {
            echo "Connection failed";
            }else {
                return $this->conn;
                // echo "Connected ";
            }
        }

    // insert data into databsae
    public function insert() {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['number'];

        $sql = "INSERT INTO `registrationform`(`firstName`, `lastName`, `gender`, `email`, `password`, `number`)
        VALUES ('$firstName','$lastName','$gender','$email','$password','$number')";
        // $insert = mysqli_query($conn,$sql);
        $result = $this->conn->query($sql);

        if (!$result) {
            echo "Error data is not inserted";
            
        }else{
            echo header("Location: index.php");
        }
       }

    // update data into databsae
    public function update() {

        $sql = "SELECT * FROM registrationform ORDER BY id DESC";
        $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($row = mysqli_fetch_assoc($result)){
                $record[] = $row;
               
            }
            return $record;
        }
    }

      // delete data into databsae
      public function delete() {
        $id=$_GET['deleteid'];
        $sql = "DELETE FROM registrationform WHERE id= $id";
        $result = $this->conn->query($sql);
        return true;
      }

     }
    $data = new Model();
  ?>