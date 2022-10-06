<?php

$con = mysqli_connect('localhost','root','','sms');

if (mysqli_connect_errno()){
die('Database connection failed'  . mysqli_connect_errno());
} else{
	echo "";
}

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $add = $_POST['add'];
    $email = $_POST['email'];

    $query = "INSERT INTO studentreg(id, firstname, lastname, phone, address, email) VALUES ('', '$fname', '$lname', '$phone', '$add', '$email');";
    $result = mysqli_query($con, $query);
    if($result){
        header('location:display.php');
    }else{
        die('Database connection failed'  . mysqli_connect_errno());
    }
}

mysqli_close($con);

?>