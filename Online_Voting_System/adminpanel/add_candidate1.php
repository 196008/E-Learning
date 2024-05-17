
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
                <a class="nav-link " href="add_candidate.php">Add Candidate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">Logout</a>
            </li>
            
            
            </ul>
        </div>
    </nav>
        <div class ="container">
        <div class=" col-sm-6 ">
        <br><h3>Add Candidate</h3><br>
            <form method="GET" action="add_candidate_details1.php">
                    <div class="form-group">
                        <label>Select elections</label>
                        <select class="form-control"  name="election_name">
                        <option value=' ' selected="selected">Select Election</option>
                        <?php

                        $con= new mysqli("localhost","root","","vote");

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
                        <div>
                            <label>No of Candidate</label>
                            <input type= "text" name="total_candidate" class = "form-control">
                        </div>
                    </div>
                    <input type="submit"  name ="submit" class="btn btn-success btn-block">
            </form>
        </div>
        </div>
    </body>
</html>

    