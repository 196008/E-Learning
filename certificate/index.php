<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Certificate Generator</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" style="font-size:18px;padding-top:1px" href="http://127.0.0.1:5000/">GPA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="font-family:Calibri;font-size:18px;padding-left:22px;">Home </span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/compiler/" style="font-family:Calibri;font-size:18px;padding-left:22px;">Compiler <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/phpproject/" style="font-family:Calibri;font-size:18px;padding-left:22px;">Discuss <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active"> 
        <a class="nav-link" href="http://localhost/onlineexamSystem-PHP/" style="font-family:Calibri;font-size:18px;padding-left:22px;">Exam <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/studentattendancemgsystem/index.php" style="font-family:Calibri;font-size:18px;padding-left:22px;">Attendence<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/certificate" style="font-family:Calibri;font-size:18px;padding-left:22px;">Certificate<span class="sr-only">(current)</span></a>
      </li>
    </ul>
     </div>
</nav>
    <center>
      <br><br><br>
      <h3>Certificate Generator</h3>
      <br><br><br><br>
      <form method="post" action="">
      <div class="form-group col-sm-6">
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Here...">
      </div>
      <div class="form-group col-sm-6">
        <input type="text" name="occupation" class="form-control" id="organization" placeholder="Enter Department Here...">
      </div>
      <button type="submit" name="generate" class="btn btn-primary">Generate</button>
    </form>
    <br>
    <?php 
      if (isset($_POST['generate'])) {
        $name = strtoupper($_POST['name']);
        $name_len = strlen($_POST['name']);
        $occupation = strtoupper($_POST['occupation']);
        if ($occupation) {
          $font_size_occupation = 10;
        }

        if ($name == "" || $occupation == "") {
          echo 
          "
          <div class='alert alert-danger col-sm-6' role='alert'>
              Ensure you fill all the fields!
          </div>
          ";
        }else{
          echo 
          "
          <div class='alert alert-success col-sm-6' role='alert'>
              Successfully generated certificate for $name...!
          </div
          ";

          //designed certificate picture
          $image = "cer.png";

          $createimage = imagecreatefrompng($image);

          //this is going to be created once the generate button is clicked
          $output = "Certificate1.png";

          //then we make use of the imagecolorallocate inbuilt php function which i used to set color to the text we are displaying on the image in RGB format
          $white = imagecolorallocate($createimage, 205, 245, 255);
          $black = imagecolorallocate($createimage, 0, 0, 0);

          //Then we make use of the angle since we will also make use of it when calling the imagettftext function below
          $rotation = 0;

          //we then set the x and y axis to fix the position of our text name
          $origin_x = 380;
          $origin_y=600;

          //we then set the x and y axis to fix the position of our text occupation
          $origin1_x = 270;
          $origin1_y=650;

          //we then set the differnet size range based on the lenght of the text which we have declared when we called values from the form
          if($name_len<=7){
            $font_size = 55;
            $origin_x = 190;
          }
          elseif($name_len<=12){
            $font_size = 50;
          }
          elseif($name_len<=15){
            $font_size = 46;
          }
          elseif($name_len<=20){
             $font_size = 34;
          }
          elseif($name_len<=22){
            $font_size = 35;
          }
          elseif($name_len<=33){
            $font_size=31;
          }
          else {
            $font_size =10;
          }

          $certificate_text = $name;

          //font directory for name
          $drFont = dirname(__FILE__)."/developer.ttf";

          // font directory for occupation name
          $drFont1 = dirname(__FILE__)."/Gotham-black.otf";

          //function to display name on certificate picture
          $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black,$drFont, $certificate_text);

          //function to display occupation name on certificate picture
          $text2 = imagettftext($createimage, $font_size, $rotation, $origin1_x+2, $origin1_y, $black, $drFont, $occupation);

          imagepng($createimage,$output,3);

 ?>
        <!-- this displays the image below -->
        <img src="<?php echo $output; ?>">
        <br> 
        <br>

        <!-- this provides a download button -->
        <a href="<?php echo $output; ?>" class="btn btn-success">Download Certificate</a>
        <br><br>
<?php 
        }
      }

     ?>

    </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
