<?php
require 'database.php';

if(isset($_POST['register'])){
     $fullname=$_POST['full_name'];
     $username=$_POST['user_name'];
     $user_email=$_POST['email'];
     $user_pass=$_POST['password'];

    $select = "select * from user where user_mail = '$user_email'";
    $exe=$con->query($select);
    if($exe->num_rows>0){
        ?>
        <script>alert("Mail present already")</script>;
        <?php
    }
    else{
            $insert = "INSERT INTO user( full_name, user_name, user_mail, user_pass) VALUES ('$fullname','$username','$user_email','$user_pass')";
            $run=$con->query($insert);
            if($run){
                ?>
                <script>alert("Account created Successfully")</script>;
                <?php
            }else{
                ?>
                <script>alert("Fail to create")</script>;
                <?php
            }
    }
}
?>

<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("register.jpg");

  /* Full height */
  height: 120%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<style type="text/css">
        #log{
            border: 2px solid white;
            padding: 60px 40px;
            margin-top :60px;
            -webkit-box-shadow: 10px 10px 61px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 61px 0px rgba(0,0,0,0.75);
            box-shadow: 10px 10px 61px 0px rgba(0,0,0,0.75);

        }
        img{
            width:130px;
            margin:auto;
        }
        h1{
            text-align:center;
            font-weight:bolder;
            margin-top:-20px;
        }
    </style>
</head>
   
    
    <body>
    <div class = "bg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    
         </li>
         <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Online_Voting_System/index.php" style="font-family:Calibri;font-size:18px;padding-left:22px;">Home<span class="sr-only">(current)</span></a>
      </li>
      
         <li class="nav-item active">
        <a class="nav-link" href="http://localhost/phpproject/" style="font-family:Calibri;font-size:18px;padding-left:22px;">Discuss <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/compiler/" style="font-family:Calibri;font-size:18px;padding-left:22px;">Compiler <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="http://localhost/onlineexamSystem-PHP/" style="font-family:Calibri;font-size:18px;padding-left:22px;">Exam <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/studentattendancemgsystem/index.php" style="font-family:Calibri;font-size:18px;padding-left:22px;">Attendence<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/certificate/" style="font-family:Calibri;font-size:18px;padding-left:22px;">Certificate<span class="sr-only">(current)</span></a>
      </li>
                    </ul>   
                    <form class="form-inline" action="login.php">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
  </form>

&nbsp &nbsp
  <form class="form-inline" action="register.php">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button>
  </form>
                </div>
            </nav> 
    <div class ="container-fluid">
        <div class= "row">
            <div class="col-md-6  col-sm-2 col-xs-0"></div>
            <div class="col-md-6 col-sm-4 col-xs-10">
            <form id = "log" method="POST" style="background-color:white;">
                <h1>Register Here</h1>
             
            <div class="form-group" >
                <div class="form-row">
                   
                    <label for="validationDefault01">Full name</label>
                    <input type="text" class="form-control" id="full_name"  placeholder="Full name" name="full_name" required>
             
                    
                    <label for="validationDefaultUsername" >Username</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                 

                    <input type="text" class="form-control" id="user_name" placeholder="Username"  name="user_name" aria-describedby="inputGroupPrepend2" required>
                    </div>
                    </div>
                </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input  class="form-control" id="password" placeholder="Password" name="password">
            </div>
            
            <br>
            <br>
            <button type="submit" class="btn btn-success btn-block" name="register">Submit</button>
            <br><p>already have an account? <a href="login.php" class="text-blue">Login Here</a></p>

            </form>
                
            </div>
            <div class="col-md-6 col-sm-4 col-xs-10"></div>
        </div>
    </div>
    </body>
</html>

