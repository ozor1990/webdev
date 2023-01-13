<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WebDev</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">



 
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 


</head>

<?php 
include '../connection/config.php';



extract($_POST);
if (isset($_POST['registerbutton'])) {
$fname = $_POST['fname'];

$lname = $_POST['lname'];

$email = $_POST['email'];

$password = $_POST['pass'];

$phone = $_POST['phone'];

$selectqry = "SELECT * FROM user_register_table WHERE Email = '".$email."'";
$qry = mysqli_query($link , $selectqry);


if (mysqli_num_rows($qry)){
header('location:duplicate-entry-register-again.php');
}

else {

$InsertQ = "INSERT INTO user_register_table(FirstName   , LastName , Email ,  Password , Phone, Date) values ('$fname' , '$lname ' ,  '$email'  , '$pass' , '$phone', Now())";
$InsertResult = mysqli_query($link , $InsertQ);

}


if ($InsertResult) {
	session_start();
	$_SESSION['fname'] = $fname;
	$_SESSION['lname'] = $lname;
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $pass;
	$_SESSION['phone'] = $phone;
	header('location:../session_on/index.php');
}
else
{

	echo "error".mysqli_error($link);
}




}
?>


<body>



</body>