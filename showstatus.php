<?php

$con=mysqli_connect("localhost","root","","project");
$complaintno=$_POST["complaintno"];
$r=mysqli_query($con,"select status from users where complaintno='$complaintno'");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="required/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>showstatus</title>
  </head>
  <body>
<div class="container-fluid" >
    <nav class="navbar bg-transparent navbar-dark  navbar-expand-lg " >
        <a class="navbar-brand" href="#">DigiCOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        </div>
      </nav>
      <div class="container">
      <?php echo(" Your complaint status is ");
        $r=mysqli_query($con,"select status from users where complaintno='$complaintno'");

      ?>
      <div class="row text-center m-lg-3">
                <button class="btn btn-success w-25" style="margin-left: 400px; " onclick="location.href='digicop.php'">
                    Ok
                </button>
       </div>
    </div>

      </body>
</html>
