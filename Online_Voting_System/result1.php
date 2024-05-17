<?php
session_start();
if(!$_SESSION['user_mail'])
{
    echo "<script>window.location.href='login.php'</script>";
}
?>
<html>
    <body>
        <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <style>
        #a1{
            color:yellow;
        }
        </style>
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
                <a class="nav-link " href="vote1.php">Vote</a>
            </li>
            <li class="form-inline">
                <a a class="nav-link my-2 my-sm-0" href="#" id ="a1"><?php  echo $_SESSION['user_name'];?></a>
            </li>  
            </ul>
          
            <form class="form-inline" action="logout.php">
    <button class="btn btn-outline-success" type="submit">Logout</button>
  </form>
        </div>
    </nav>
    <div class ="container">
        <div class= "row">
                <form  method="POST">
                   <br><h1>Result Portion</h1><br>
                   <label for="exampleFormControlSelect1">Select Election</label>

                    <select class="form-control"  name="election_name">
                        <option value=' ' selected="selected">Select Election</option>
                    <?php
                    require('database.php');
                    $select="SELECT * FROM election ";
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
                    <br><button type="submit"  name ="view_result" class="btn btn-success btn-block">View Result</button>                
                </form>
            <table class ="table table-responsive-table-hover table-bordered text-center">
                    <tr>
                        <td>#</td>
                        <td>Candidate</td>
                        <td>Obtain Vote</td>
                        <td>Wining Status</td>
                    </tr>
                    <?php
                if(isset($_POST['view_result']))
                {
                        $election_name=$_POST['election_name'];

                        $select="Select * from result_t where election_name='$election_name'";
                        $run=$con->query($select);
                        if($run->num_rows>0)
                        {
                            $total_election_votes=0;
                            while($row=$run->fetch_array()){
                                $total_election_votes=$total_election_votes+1;
                            }
                        }
                        $select1="Select * from candidate_t where election_name='$election_name'";
                        $run1=$con->query($select1);
                        if($run1->num_rows>0){
                            $total=0;
                            while($row2= $run1->fetch_array()){
                                $total=$total+1;
                                $candidate_name=$row2['candidate_name'];
                                $total_vote=$row2['total_vote'];
                                $persent=(($total_vote/$total_election_votes)*100);
                                ?>
                                <tr>
                                    <td><?php echo $total;?></td>
                                    <td><?php echo $candidate_name;?></td>
                                    <td><?php echo $total_vote;?></td>
                                    <td>
                                        <?php
                                        if($persent>50){
                                            ?>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $persent;?>"
                                                aria-valuemin="0" aria-valuemax="<?php echo $persent;?>" style="width:<?php echo $persent;?>%">
                                                <?php echo $persent;?>%
                                                </div>
                                            </div>
                                            <?php
                                        }else if($persent>40){
                                            ?>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $persent;?>"
                                                aria-valuemin="0" aria-valuemax="<?php echo $persent;?>" style="width:<?php echo $persent;?>%">
                                                <?php echo $persent;?>%
                                                </div>
                                            </div>

                                            <?php
                                        }
                                        else{
                                            ?>
                                           <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $persent;?>"
                                                aria-valuemin="0" aria-valuemax="<?php echo $persent;?>" style="width:<?php echo $persent;?>%">
                                                <?php echo $persent;?>%
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php

                            }
                           
                        } 
                        else{
                        ?>
                        <tr>
                            <td colspan="4">Record not Found</td>
                        </tr>
                        <?php

                        } 
                        
                      
                }
                ?>
            </table>
               
        </div>
    </div>
</body> 
</html>


