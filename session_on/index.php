<?php include '../connection/config.php'; 
session_start();

if (!isset($_SESSION['email']) and (!isset($_SESSION['pass']))) {

die("Access Denied");
}
else {
  echo "ok";
}
$userFname = $_SESSION['fname'];
$userLname = $_SESSION['lname'];
$userEmail = $_SESSION['email'];
$Select1 = "SELECT * FROM user_register_table";
$ResultSelect1 = mysqli_query($link , $Select1);


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WebDev</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">



<link href="../bootstrap/css2/animation.css" rel="stylesheet">  
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 


</head>
<style type="text/css">

body {background-image: url("../webimages/background-1.jpg");
background-position: center;
background-repeat: no-repeat;
color: white;
font-weight: bold;}

.navbar-toggler-icon {
    background-image: url("webimages/toggle-icon.jpg");
    background-repeat: no-repeat;
    background-position: center;
}

.navbar {border:4px inset black; margin-top:2%;
color: #000080;}

.navbar a {color: #000000 ; font-family: sans-serif;}

#username {font-size: smaller;
          font-weight: bold; font-style: italic;
            text-shadow:1px 1px 1px blue;
            border-bottom:1px dashed blue;
            border-left:1px dashed blue;
            border-radius: 50px;
            padding: 10px;}



</style>
<body>
<div class="container"> <!-- first container div  -->
<div  class="wrap1">	
<div class="row">

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a id="username" class="navbar-brand" href="#"><?php echo "$userLname $userLname"; ?></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
          <button class="btn btn-danger" onclick="loadDoc()" id="login">LogOut</button>
        </li>


      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



</div>

<div class="row">
<div class="login-form">    
<div class="col-sm-10 col-md-10 col-lg-10" id="login-form-col">

</div>
</div>

</div> <!-- end of first container div   -->
<!-- break break break break break break break break break  -->
<!-- break break break break break break break break break  -->


</body>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>







