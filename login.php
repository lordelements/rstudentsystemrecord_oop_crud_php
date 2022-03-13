<?php



include_once("connection/connection.php");

if (isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student_users WHERE username = '$username' AND password = '$password '";
    $user = $conn->query($sql) or die ($conn->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;

if ($total > 0) {
    $_SESSION['UserLogin'] = $row['username'];
    $_SESSION['Access'] = $row['access'];
     echo header("Location: index.php");
}else{
    echo "No user found.";
}



}
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
<header>
        <h1>LOGIN PAGE</h1>
    </header></br></br>
    <div class="container">
    <div class="container-2">
    </div>
        <div class="container-3">
            <form action="" method="post">
                <label>Username</label>
                <input type="text" name="username" id="username" required></br></br>
                <label>Password</label>
                <input type="password" name="password" id="password" required></br></br>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
            <div class="panel-footer text-right">
         <small>&copy; LORDEMENT'Z</small>
     </div>
     </div>
</body>
</html>