<?php
if (!isset($_SESSION)) {
    session_start();

}

if (isset($_SESSION['Access']) && $_SESSION['Access'] == "administrator") {
    echo "Welcome ".$_SESSION['Access'];
}else{
    echo header("Location: index.php");
}

include_once("connection/connection.php");

$ID = $_GET['id'];

$sql = "SELECT * FROM registrationform WHERE id = '$ID'";
$register = $conn->query($sql) or die ($conn->connect_error);
$row = $register->fetch_assoc();

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h2><?php echo $row['firstName'];?> <?php echo $row['lastName'];?> <?php echo $row['gender'];?>
     <?php echo $row['email'];?>
      <?php echo $row['password'];?> 
      <?php echo $row['number'];?></h2>

</body>
</html>