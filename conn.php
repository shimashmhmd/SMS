<?php

$con = mysqli_connect('localhost','root','','sms');

if (mysqli_connect_errno()){
die('Database connection failed'  . mysqli_connect_errno());
} else{
	echo "";
}
?>

<? mysqli_close($con);?>