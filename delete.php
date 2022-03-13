<?php
    include_once("model.php");
    if (isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        // $result = mysqli_query($conn,$sql);
       if ($del = $data->delete()) {
        header('location: index.php?msg2');
       }else {
        echo "<script>alert('Data is not deleted.')</script>";
       }
    }

?>