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
        .center_div{
    margin: 0 auto;
    width:80% /* value of your choice which suits your alignment */
}
</style>
</head>
<style>
        #a1{
            color:yellow;
        }
        #log{
            margin-top:30px;
            margin-left:300px;
            width: 300px;
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
            <li class="nav-item active">
                <a class="nav-link " href="result1.php">Result</a>
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
    <div class="container center_div">

    <div class="parent-div" >
        <h1 tstyle="text-align:center;"> &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Select Election</h1>
        <div class="child-div" >
        <div class="col-md-4 col-md-offset-5">
        <form id = "log" method="POST" >
                    
                    <label for="exampleFormControlSelect1" ><h3>Select Election</h3></label>

                    <select class="form-control"  name="election_name">
                        <option value=' '  selected="selected">Select Election</option>


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
                    <br><button type="submit"  name ="serch" class="btn btn-success btn-block">Show Candidate</button>
            </form>
            </div   
        </div>
    </div>
</html>
<?php
include 'database.php';
if(isset($_POST['serch'])){
    $election_name=$_POST['election_name'];
    $select = "SELECT * FROM election where election ='$election_name'";
    $result = mysqli_query($con,$select);
    ?>
    
    <div class="container-fluid">
        <br><input type='text' value='<?php echo $election_name;?>' class='form-control' readonly/>
    </div>
    <?php
    $select = "select * from candidate_t  where election_name='$election_name'";
    $run=$con->query($select);
    if($run->num_rows>0)
    {
        while($row=$run->fetch_array()){
            ?>
            <div class= "container-fluid">
                <label><?php echo $row['candidate_name'];?></label>
            </div>
                                
            <?php
        }
    }
                      
 }
 ?>
