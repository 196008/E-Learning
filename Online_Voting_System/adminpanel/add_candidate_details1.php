
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
                <a class="nav-link " href="add_candidate1.php">Add Candidate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">Logout</a>
            </li>
            
            
            </ul>
        </div>
    </nav>
        <div class ="container">
        <div class=" col-sm-6 ">
        <br><h3>Add Candidate Details</h3><br>
            <form method="POST">
                <?php
                $con= new mysqli("localhost","root","","vote");

                $election_name=$_GET['election_name'];
                 $total_candidate=$_GET['total_candidate'];
                ?>
                <label>Election Name </label>
                <input type="text" name = "election_name"  value="<?php echo $election_name?>" class="form-control" readonly = "readonly"><br>

                <?php

                for($i=1;$i<=$total_candidate;$i++)
                {
                    ?>
                    <div class ="form-group">
                        <label>Candidates Name <?php echo $i;?></label>
                        <input type="text" name="candidates_name<?php echo $i;?>" class="form-control">
                    </div>
                    <?php
                }
                ?>
                <input type="submit"  name ="add_details" class="btn btn-success btn-block">
            </form>
        </div>
        </div>
    </body>
</html>
<?php
if(isset($_POST['add_details'])){
    
    $total_candidate=$_GET['total_candidate'];
    $election_name=$_POST['election_name'];

    for($i=1; $i<=$total_candidate; $i++){
        $candidates_name[]=$_POST['candidates_name'.$i];
    }
    for($i=0;$i<$total_candidate;$i++)
    {
        $insert="INSERT INTO `candidate_t`( `candidate_name`, `election_name`) VALUES ('$candidates_name[$i]','$election_name')";
        $res=mysqli_query($con,$insert);
        if(!$res)
        {
            ?>
            <script> window.location.href='index.php'</script>;
            <?php
                
        }else{
            ?>
            <script>alert("Candidate added candiadte.")</script>
            <?php
        }
    }
}
?>