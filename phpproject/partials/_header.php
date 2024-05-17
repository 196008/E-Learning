<?php
session_start();

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
<a class="navbar-brand" href="http://127.0.0.1:5000/"> GPA</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
  <li class="nav-item active">
  <a class="nav-link" href="http://localhost/phpproject/" style="font-family:Calibri;font-size:18px;padding-left:22px;">Home <span class="sr-only">(current)</span></a>
</li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle nav-item active" href="#"  style="font-family:Calibri;font-size:18px;padding-left:22px;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Top Categories
      </a>
      <div class="dropdown-menu nav-item active" aria-labelledby="navbarDropdown">';

      $sql = "SELECT category_name, category_id FROM `categories` LIMIT 3";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo '<a class="dropdown-item" href="threadlist.php?catid='. $row['category_id']. '">' . $row['category_name']. '</a>';
      }

      echo '</div>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="http://localhost/phpproject/" style="font-family:Calibri;font-size:18px;padding-left:22px;">Discuss <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item active">
  <a class="nav-link" href="http://localhost/compiler/"  style="font-family:Calibri;font-size:18px;padding-left:22px;">Compiler <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
<a class="nav-link" href=""  style="font-family:Calibri;font-size:18px;padding-left:22px;">Add Notice <span class="sr-only">(current)</span></a>
</li>

   <li class="nav-item active">
    <a class="nav-link" href="http://localhost/onlineexamSystem-PHP/" style="font-family:Calibri;font-size:18px;padding-left:22px;">Exam <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="http://localhost/studentattendancemgsystem/index.php" style="font-family:Calibri;font-size:18px;padding-left:22px;">Attendence<span class="sr-only">(current)</span></a>
  </li>
</ul>
  </ul>
  <div class="row mx-2">';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo '<form class="form-inline my-2 my-lg-0" method="get" action="search.php">
      <p class="text-light my-0 mx-2">Welcome '. $_SESSION['useremail']. ' </p>
      <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
      </form>';
}
else{
  echo '<form class="form-inline my-2 my-lg-0">
    </form>
    <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
    <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>';
  }


  echo '</div>
      </div>
      </nav>';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}
?>
