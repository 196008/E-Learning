
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
   
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_election.php">Add Election</a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link " href="result1.php">Result</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">Logout</a>
            </li>
            
            
            </ul>
        </div>
    </nav>
    <div class ="container-fluid">
        <div class= "row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <form  method="POST">
                    <br><h2>Add New Election</h2><br>
                    <label for="exampleFormControlSelect1">Add Election Name</label>

                    <input type="text" class="form-control"   name="election_name" >

                    <br><button type="submit"  name ="add" class="btn btn-success btn-block">Add</button>

                     
                </form>
            </div>
        </div>
    </div>
</html>
    </body>
</html>
<?php
$con= new mysqli("localhost","root","","vote");
if(isset($_POST['add'])){
    
    $election_name=$_POST['election_name'];
    $insert="INSERT INTO `election`( `election`) VALUES ('$election_name')";
    $run = $con->query($insert);
    if($run){
        ?>
        <script>alert("Election Added.")</script>;
        <?php

    }else{
        ?>
        <script>alert("Fail to add election")</script>;
        <?php
    }
    
}
?>