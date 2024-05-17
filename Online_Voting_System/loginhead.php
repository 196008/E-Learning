<?php
session_start();
if(!$_SESSION['user_mail'])
{

    echo "<script>window.location.href='login.php'</script>";

}
?>
<html>
    <head>
        <title>Voting System</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    </head>
<style>
#a1{
    color:yellow;
}
*{
    margin: 0;
    padding:0; 
    box-sizing: border-box; 
}
.site-headers{
height: 100vh;
}
section{
    display:flex;
}
.leftside{
    width: 45%;
    height:auto;
    margin-top:100px;
}
.leftside img{
    width: 600px;
    height: 400px;
    background-image :linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6));
    
}
.rightside{
    width: 115%;
    height:300px;
    color:black;
    text-align:center;
    margin-top:170px;

}
.rightside h1{
    font-size:50px;
    font-weight:900;
    text-transform: uppercase;
    font-family:Serif;

}
.rightside p{
    font: size 2.1em;
    padding:30px 0;
    font-family:Serif;
    

}
.rightside button{
    font-size: 17px;
    font-weight: bold;
    color:white;
    text-transform:uppercase;
    padding: 20px 35px;
    border-radius: 4px;
    background:linear-gradient(57deg,#00c6a7,#1e4d92);
    font-family:Serif;
}
.rightside button:hover{
    background:linear-gradient(57deg,#1e4d92,#00c6a7);

}
</style>
    <body>
        <header class="site-headers">
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="candidate1.php">Candidate</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Vote1.php">Vote</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="result1.php">Result</a>
                    </li>
                    <li class="form-inline">
                <a a class="nav-link my-2 my-sm-0" href="#" id ="a1"><?php  echo $_SESSION['user_name'];?></a>
            </li>
            
            </ul>
            
            <form class="form-inline" action="logout.php">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log Out</button>
  </form>
                </div>
            </nav>
            <section>
                <div class="leftside">
                    <img src="page1.png">
                </div>
                <div class="rightside">
                    <h1 class=" animated infinite slideInDown delay-5s">Online Voting System</h1>
                    <p>Government Polytechnic Aurangabad.<br>   Department of Computer Engineering</p>
                    <p>
                        Online Voting System are the software platform
                        used to securely conduct votes and elections.
                        As a digital platform, they elinmate the need of
                        cast your vote using paper or having to gather in 
                        person
                    </p>

                </div>

            
                
            </section>
        </header>
    </body>
</html>