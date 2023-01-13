<?php include '../connection/config.php';

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

<style type="text/css">
.register-form {background-color: lightgrey;
border: 2px dashed black;
width: 100%;
max-height: 300px;
margin: 0 auto;
position: fixed;
left: 0; right: 0;
padding: 2%;
overflow-y: scroll;

color: #000000;
font-weight: bold;
text-align: center;
}


.register-form::-webkit-scrollbar{
    width: 7px;
    background-color: yellow;
  }

.register-form::-webkit-scrollbar-thumb{
    background:red;
    border-radius:5px;
  }


.register-form input {border: 2px dashed black; width: 100%;.,n.}
.register-form button {width: 90%;}

#duplicate {color: red; font-weight: bold;}
</style>

<div class="container">
<div class="register-form">
<form action="insert-register-info.php" method="post" name="register" enctype="multipart/form-data" class="row g-3 needs-validation" >
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">First name</label>
    <input type="text" class="form-control" name="fname" id="fname"  required="required">
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Last name</label>
    <input type="text" class="form-control" name="lname" id="lname"  required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
   <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email"  required>
    <span id="duplicate">Your Email Already Exist!</span>
  </div>


  <div class="col-md-4 position-relative">
    <label for="validationTooltip03" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" id="pass" name="pass" required>
    
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip03" class="form-label">Confirm Password</label>
    <input type="password" name="confirm_pass" class="form-control" 
    id="confirm_pass" onkeyup="validate_password()" required>
    <span id="wrong_pass_alert"></span>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip05" class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" id="phone" required>
    <div class="invalid-tooltip">
      Please provide a valid zip.
    </div>
  </div>
    <div class="col-md-6 position-relative">

    <input type="submit" value="Create Account" name="registerbutton" class="btn btn-primary" 
    id="create" >
  </div>
 



    <div class="col-md-6 position-relative">
    <button class="btn btn-danger" onclick="window.location.reload()" >Abort </button>
  </div>

  
</form>
<br><br>
</div>
</div>



<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>  


 <script>
        function validate_password() {
 
            var pass = document.getElementById('pass').value;
            var confirm_pass = document.getElementById('confirm_pass').value;
            if (pass != confirm_pass) {
                document.getElementById('wrong_pass_alert').style.color = 'red';
                document.getElementById('wrong_pass_alert').innerHTML
                  = '☒ Use same password';
                document.getElementById('create').disabled = true;
                document.getElementById('create').style.opacity = (0.4);
            } else {
                document.getElementById('wrong_pass_alert').style.color = 'green';
                document.getElementById('wrong_pass_alert').innerHTML =
                    '🗹 Password Matched';
                document.getElementById('create').disabled = false;
                document.getElementById('create').style.opacity = (1);
            }
        }
 
        function wrong_pass_alert() {
            if (document.getElementById('pass').value != "" &&
                document.getElementById('confirm_pass').value != "") {
                alert("Your response is submitted");
            } else {
                alert("Please fill all the fields");
            }
        }
    </script>


   


