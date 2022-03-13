<?php
// if (!isset($_SESSION)) {
//     session_start();

// }

//     if (isset($_SESSION['UserLogin'])) {
//         echo "Welcome ".$_SESSION['UserLogin'];
//     }else{
//         echo "Welcome Admin";
//     }

//     include_once("connection/connection.php");

//     $sql = "SELECT * FROM registrationform ORDER BY id DESC";
//     $register = $conn->query($sql) or die ($conn->connect_error);
//     $row = $register->fetch_assoc();

//    

include_once("model.php");

?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <?php
            if (isset($_GET['msg1']) == "delete") {
                echo "<div class='alert alert-success' role='alert'>
                Your email is already exist!
            </div>";
            }
            if (isset($_GET['msg2']) == "delete") {
                echo "<div class='alert alert-danger' role='alert'>
               Your data is deleted successfully
            </div>";
            }
            ?>
    <header>
        <h1>Students Records System</h1>
    </header><br>
            
            <?php if (isset($_SESSION['UserLogin'])) {?>
            <a href="logout.php">Logout</a>
            <?php } else{ ?>

                <a href="login.php">Login</a>
            <?php } ?>
            <a href="add.php">Add New</a>
            <table>
            <tr>
                 
                  <th>Student-ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Number</th>
                  <th>Actions</th>
              </tr>
                        <?php $record = $data->update();
                         $studno=1;
                        
                           foreach($record as $row)
                                // while ($row = mysqli_fetch_assoc($result))
                               { ?>
                                   
                                    
                                    <tr>
                                           
                                            <td><?php echo $studno++ ?></td>
                                            <!-- <td><?php echo $row['id'] ?></td> -->
                                            <td><?php echo  $row['firstName'] ?></td>
                                            <td><?php echo  $row['lastName'] ?></td>
                                            <td><?php echo  $row['gender'] ?></td>
                                            <td><?php echo  $row['email'] ?></td>
                                            <td><?php echo  $row['password'] ?></td>
                                            <td><?php echo  $row['number'] ?></td>

                                    <td>
                                        <a class="btn btn-success"  href="update.php? updateid= <?php echo  $row['id'] ?>">edit</a>
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')"
                                         href="delete.php? deleteid= <?php echo  $row['id'] ?>">Delete</a>
                                    </td>
                                        </tr>
                               

                                <?php } ?>
                                <div>
                                          
                                </div>
            </table>

            <div class="panel-footer text-right">
         <small>&copy; LORDEMENT'Z</small>
     </div>
</body>
</html>

