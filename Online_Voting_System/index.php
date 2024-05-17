<html>
    <head>
        <title>Voting System</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    </head>
<style>

body{
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("slider.jpg");
    background-size:cover;
}
*{margin: 0;padding: 0; box-sizing: border-box }
.site-headers{
height: 100vh;
}
h1{
    font-size: 2.1rem;
    line-height:1.4;
    letter-spacing: 0.5rem;
    color:white;
}
section{
    display:flex;
}

.rightside{
    width: 115%;
    height:300px;
    color:white;
    text-align:center;
    margin-top:150px;

}
.rightside h1{
    font-size:50px;
    font-weight:900;
    text-transform: uppercase;
    font-family:Serif;

}


</style>
    <body>
    
        <header class="site-headers">
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item active">
        <a class="nav-link" href="http://127.0.0.1:5000/" style="font-family:Calibri;font-size:18px;padding-left:22px;">GPA </span></a>
      </li>
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
            <section>
                
                <div class="rightside">
                    <h1>Online Voting System</h1>
                </div>
            </section>
        </header>
    </body>
</html>