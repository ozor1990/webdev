<?php include '../connection/config.php';
extract($_POST);
if (isset($_POST['check'])) {

$checkEmail = $_POST['email'];
$checkPassword = $_POST['password'];

$check = "SELECT * FROM user_register_table WHERE Email = '".$checkEmail."' AND Password = '".$checkPassword."'";
$checkResult = mysqli_query($link , $check);

if ($checkResult->num_rows > 2) {
header('location:register-error.php');

}
else {

	echo "string";
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WebDev</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">



 
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 


</head>
	<br><br>

	session_start();
	$_SESSION['fname'] = $fname;
	$_SESSION['lname'] = $lname;
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
	$_SESSION['phone'] = $phone;
	header('location:../session_on/index.php');