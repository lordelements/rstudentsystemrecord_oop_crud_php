<?php
include_once("model.php");


if (isset($_POST['submit'])) {
    $ins = $data->insert();
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
   
    <div class="form">
        <form action="" method="post">
            <div class="form-group">
                <label for="first name">First Name</label>
                <input type="text" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="last name">Last Name</label>
                <input type="text" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                   <select name="gender" id="" required>
                       <option value="male">Male</option>
                       <option value="female">Female</option>
                       <option value="others">Others</option>
                   </select>
                </div>
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" name="password"required>
            </div>
            <div class="form-group">
                <label >Phone Number</label>
                <input type="tel" name="number" required>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit to record">
        </form>

     
    </div>
</body>
</html>