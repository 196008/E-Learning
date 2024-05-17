<?php
session_start();
require 'database.php';

if(isset($_POST['submit'])){
    
    $user_email=$_POST['email'];
    $user_pass=$_POST['password'];
    $select = "select * from user where user_mail = '$user_email' and user_pass='$user_pass'";
    $run=$con->query($select);
    if($run->num_rows>0){
        while($row=$run->fetch_array()){
            $_SESSION['user_name']=$user_name=$row['user_name'];
            $_SESSION['user_mail']=$user_email=$row['user_mail'];
            ?>
            <script>alert("Login Success.")</script>;
            <script>window.location.href='loginhead.php'</script>
            <?php
        }
    }else{
        ?>
        <script>alert("Invalid email or password")</script>;
        <?php
    }
    
}
?>

<html>
    <head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <style type="text/css">
        
        
        #log{
            padding: 60px 40px;
            margin-top :60px;
        
        }
        img{
            width:100px;
            margin:auto;
            position:center;
        }
        h1{
            text-align:center;
            font-weight:bolder;
            margin-top:-20px;

        }
    </style>
    <body>

    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="register.php">Registration</a>
            </li>
            
            </ul>
            
        </div>
    </nav>
    
    
    <div class ="container-fluid">
        <div class= "row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
            <form id = "log" method="POST">
                <h1>Login</h1><br>
            <div class="form-group">
                <label for="exampleInputEmail1">User Email</label>
                <input type="text" class="form-control"  placeholder="Enter user email" id="email" name="email">
                <small  class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="pass" name="password" placeholder="password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            
            <br><button type="submit" class="btn btn-success btn-block" name = "submit">login</button>
            <br><p>Don't have an account?<a href="register.php" class="text-blue">Register Here</a></p>
            </form>
                
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
    </body>
</html>

