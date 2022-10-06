<?php
include 'conn.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "delete from studentreg where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        echo "<script> alert('Deleted Successfully'); </script>";
        header('location:display.php');

    }else{
        die('Database connection failed'  . mysqli_connect_errno());
    }
}
?>