<?php
session_start();
if(!$_SESSION['user_mail'])
{

    echo "<script>window.location.href='login.php'</script>";

}
?>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        #a1{
            color:yellow;
        }
    </style>
</head>
   
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="candidate1.php">Candidate</a>
            </li>
          
            <li class="nav-item active">
                <a class="nav-link " href="result1.php">Result</a>
            </li>
            <li class="nav-item activem">
                <a class="nav-link " href="vote1.php">Vote</a>
            </li>
            <li class="nav-item active">
           
            <li class="form-inline">
                <a a class="nav-link my-2 my-sm-0" href="#" id ="a1"><?php  echo $_SESSION['user_name'];?></a>
            </li>
            
            </ul>
            
            <form class="form-inline" action="logout.php">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log Out</button>
  </form>
        </div>
    </nav>
    
    <div class ="container-fluid">
        <div class= "row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <form id = "log" method="POST">
                    <h1>Elections</h1><br>
                    <label for="exampleFormControlSelect1">Select Election</label>

                    <select class="form-control"  name="election_name">
                        <option value=' ' selected="selected">Select Election</option>
                        <?php
                    require('database.php');
                    $select="SELECT * FROM election";
                    $run=$con->query($select);
                    if($run->num_rows>0){
                        while($row=$run->fetch_array()){
                            
                    ?>
                    <option value="<?php echo $row['election'];?>"><?php echo $row['election'];?></option>
                    <?php
                        }
                    }
                    ?>
                    </select>
                    </select>
                    <br><button type="submit"  name ="serch" class="btn btn-success btn-block">Serch Candidate</button>

                     
                </form>
            </div>
        </div>
    </div>
</html>
    </body>
</html>
<?php
include 'database.php';
if(isset($_POST['serch'])){
    $election_name=$_POST['election_name'];
    $select = "SELECT * FROM election where election ='$election_name'";
    $result = mysqli_query($con,$select);
    ?>
    <a href="vote_cast1.php?election_name=<?php echo str_replace(' ','-',$election_name);?>">Click here</a>
    <?php
 }
 ?>