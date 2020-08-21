<?php
    require('db.php');

    $id=$_REQUEST['id'];
    $query = "DELETE FROM programmer_record WHERE id=$id"; 
    $result = mysqli_query($con,$query) or die ( mysqli_error());
    header("Location: view-PROGRAMMER.php"); 
?>