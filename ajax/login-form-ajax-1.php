<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WebDev</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">



 
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 


</head>

<style type="text/css">

.myform1 {text-align: center;
}

.myform1 div {text-align: center;
margin: 0 auto;}

.login-form {   width: 100%;
                max-height: 300px;
                margin: 0 auto;
                text-align: center; background-color: lightgrey;
                display: flex; justify-content:center;
                 top: 20%;
                 position: fixed;
                 right: 0; left: 0;
                 overflow-y: scroll;
                 padding:0 2%;
                 border: 1px dashed black;
                }
 .login-form::-webkit-scrollbar{
  width: 15px;
  background-color: yellow;
 }        

.login-form::-webkit-scrollbar-thumb{
    background:red;
    border-radius:5px;
  }

.login-form input {border: 2px dashed black;}

.login-form button {width: 50%; border:2px dashed black;}                

#login-form-col { width: 100%;}

@keyframes pulse {
  /* Since you're using translate, you shouldn't overwrite it with only scale, just combine them */
  15% {transform: scale(0.8);color:red;}
  50% {transform: scale(1);color:black;}
  100% {transform:scale(0.8);color:red;}
}

.pulse {
  width: 20%;
	background-color: yellow;
	text-align: center;
	font-weight: bold;
	text-transform: uppercase;
	text-decoration: underline;
  animation-name: pulse;
  animation-duration: 4s;
  /* If you want the animation keeps going */
  animation-iteration-count: infinite;
}
	
}

</style>


<div  class="row">
<form class="myform1" action="ajax/check-user-email.php" method="post" enctype="multipart/form-data">
	


  <div class="col-sm-12 col-md-12 col-lg-6">
    <label for="validationTooltip01" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="validationTooltip01" name="email"  required>
    <div class="valid-tooltip">
      Looks good!
    </div>
   </div> 
  

<div class="col-sm-12 col-md-12 col-lg-6">
    <label for="validationTooltip01" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="validationTooltip01" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
   </div> 



  <br>
  <div class="col-sm-12 col-md-12 col-lg-12">
    <input type="submit" name="check" class="btn btn-primary" value="LogIn" />
  </div>

<br>
  <div class="col-sm-12 col-md-12 col-lg-12">
    <button class="btn btn-danger" onClick="window.location.reload()" >Abort </button>
  </div><br>
</form>
<br>
 <div class="col-sm-12 col-md-12 col-lg-12">
  <button onclick="loadDoc2()"  id="register-now" class="pulse" >Register Now</button>
</div>
<br><br>
  </div>



