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
    </head>
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
                <a class="nav-link" href="candidate1.php">Candidate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="vote1.php">Vote</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="result1.php">Result <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="logout.php">Logout</a>
            </li>
            </ul>
        </div>
    </nav>
    
        <div class ="container-fluid">
            <div class= "row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <form  method="POST">
                        <?php
                        include 'database.php';
                        $election_name=$_GET['election_name'];
                        $election_name=str_replace('-',' ',$election_name);
                        ?>
                        <div class="form-group">
                        <br><input type='text' value='<?php echo $election_name;?>' class='form-control' readonly/>
                        </div>
                        <?php
                        $select = "select * from candidate_t where election_name='$election_name'";

                        $run=$con->query($select);
                        if($run->num_rows>0)
                        {
                            while($row=$run->fetch_array()){
                                ?>
                                <div class= "form-group">
                                    <input type="radio" name="candidate_name"  value="<?php echo $row['candidate_name'];?>">
                                    <label><?php echo $row['candidate_name'];?></label>
                                </div>
                                
                                <?php
                            }
                        }
                        ?>
                        <input type="submit" name="vote_cast" class=" btn btn-success" value="cast your vote">
                </form>
            </div>
            </div>
        </div>
</html>

<?php 

if(isset($_POST['vote_cast']))
{
    $candidate_name=$_POST['candidate_name'];
    $user_email=$_SESSION['user_mail'];

    $select="select * from result_t where user_email='$user_email' and election_name='$election_name'";
    $exe1=$con->query($select);
    if($exe1->num_rows>0){
        ?>
            <script>alert("'You have already casted Vote'.")</script>;

        <?php
    }else{
        $insert="INSERT INTO `result_t`( `user_email`, `candidate_name`, `election_name`) VALUES ('$user_email','$candidate_name','$election_name')";
        $run=$con->query($insert);
        if($run)
        { 
            $update="UPDATE candidate_t SET total_vote=total_vote+1 WHERE candidate_name='$candidate_name' and election_name='$election_name'";        
            $exe=$con->query($update); 
            
            if($exe) {
            ?>
            <script>alert("Vote casted Successfully.")</script>;

            <?php
            }else{
                ?>
            <script>alert("fail to cast vote")</script>;
            <?php
            }
        }
        else{
            echo 'fail';
        }

    }
    
    
}  
?>

