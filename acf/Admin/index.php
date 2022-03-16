<?php
   session_start(); 

   if(isset($_SESSION["id"])){

        header('location:view/dashboard');

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

   <style type="text/css">
     
         .login{
             
                box-sizing: border-box;
                box-shadow: 0px 0px 5px -1px;
                padding: 7px;
                margin-top: 20px;
                border-radius: 5px;
         }
         
         .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: -25px;
            position: relative;
            margin-right: 10px;
            z-index: 2;
        }
   </style>
</head>
<body style="background-color:#ddd;">
 
  <section class="container">
        <br><br><br><br>
        <div class="row">
           <div class="col-sm-12 col-md-4" style="margin:0 auto;">
               <div class="login">
                    <div class="text-center" style="margin-bottom: 10px;">
                        <img src="../assets/images/aictflogo.png" alt="logo" width="75%">
                    </div>
                    <div style="background:#212529;">
                       
                       <h2 class="header" align="center" style="color:#fff;padding: 10px;">ADMIN LOGIN</h2> 
                    </div>
                    <?php

                        if(isset($_SESSION['msg'])){

                    ?>
                      <div class="alert alert-danger" role="alert">
                          <strong><?=$_SESSION['msg']?></strong>
                      </div>

                    <?php

                        }

                        unset($_SESSION['msg']);


                    ?>
                    <form action="controller/login.php" method="POST" name="loginform" onsubmit=" return checkData()">
                       <div class="form-group">
                          <div id="emailMessage" style="color:red;"></div>
                          <input type="email" placeholder="Enter User Id **" class="form-control input-filed" name="email">
                          <span class="fa fa-user field-icon"></span>
                       </div> 
                       <div class="form-group">
                           <div id="passMessage" style="color:red;"></div>
                           <input type="password" placeholder="Enter Password **" class="form-control input-filed" name="pwd" id="myInput">
                           <span class="fa fa-eye-slash field-icon toggle-password" onclick="myFunction()"></span>
                       </div>
                       <button class="btn form-control  button" name="submit" type="submit" style="background:#212529;color:#fff;">LOGIN</button>
                    </form>
                </div>
           </div>
        </div>
</section> 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
</body>
</html>

<script>

    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    
</script>

<script type="text/javascript">
  
    function checkData(){

        var regex =     /^\S+@\S+\.\S+$/;
        var email=      document.loginform.email.value;
        var password=   document.loginform.pwd.value;


        if(regex.test(email)===false){

            document.getElementById('emailMessage').innerHTML='* Please Enter Your Email';
            return false;
        }

        if(password==''){

            document.getElementById('passMessage').innerHTML='* Please Enter Your Password';
            return false;
        }
    }

</script>