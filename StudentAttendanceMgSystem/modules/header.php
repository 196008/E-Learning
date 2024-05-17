  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Attendance</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/validator.min.js"></script>
    <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("images/atten.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

  </head>
  <body>
  <?php
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
         $url = "https://";
    else
         $url = "http://";
    // Append the host(domain name, ip) to the URL.
    $url.= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    $url.= $_SERVER['REQUEST_URI'];

   if($url=="http://localhost/studentattendancemgsystem/index.php")
    {
      echo '<div class="bg">';
    }
  ?>

  	<div id="wrapper">
    <div class="overlay"></div>

    <h4><a href="http://127.0.0.1:5000/"  style="font-family:Calibri;font-size:20px;padding-left:1px;color:white">GPA</a> &nbsp &nbsp
    <a href="localhost/phpproject"  style="font-family:Calibri;font-size:20px;padding-left:22px;color:white">Home</a> &nbsp &nbsp
    <a href="http://localhost/compiler"  style="font-family:Calibri;font-size:20px;padding-left:22px;color:white">Compiler</a> &nbsp &nbsp
    <a href="http://localhost/phpproject/index.php"  style="font-family:Calibri;font-size:20px;padding-left:22px;color:white">Discuss</a> &nbsp &nbsp
    <a href="http://localhost/onlineexamSystem-PHP/index.php"  style="font-family:Calibri;font-size:20px;padding-left:22px;color:white">Exam</a> &nbsp &nbsp
    <a href="http://localhost/Online_Voting_System/index.php"  style="font-family:Calibri;font-size:20px;padding-left:22px;color:white">Voting</a> &nbsp &nbsp
  </h4>

    <style>
      h4{
        margin-top:0;
        padding:20px;
        padding-left: 100px;
        background-color: #343a40;
        color:white;
        size:100px;
        text-align: left;
      }
      .sidebar-wrapper{
        color: white;
      }
    </style>
  </body>
