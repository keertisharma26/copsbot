<?php

$con=mysqli_connect("localhost","root","","project");
$complaintno=rand();
$fnm=$_POST["fnm"];
$lnm=$_POST["lnm"];
$district=$_POST["district"];
$station=$_POST["station"];
$category=$_POST["category"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$incidentdate=$_POST["incidentdate"];
$vnm=$_POST["vnm"];
$location=$_POST["location"];
$incidentdetails=$_POST["incidentdetails"];

$r=mysqli_query($con,"insert into complaints(complaintno,fnm,lnm,district,station,category,gender,age,vnm,location,incidentdetails) 
values ('$complaintno','$fnm','$lnm','$district','$station','$category','$gender','$age','$vnm','$location','$incidentdetails')");

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="required/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="file:///C:/Users/hp/Desktop/Copsbot/1596472599249-01.jpeg"/>

    <title>DigiCOP</title>
  </head>

  <body class="bg-light">

    <div class="container-fluid">
        <nav class="navbar bg-transparent navbar-dark  navbar-expand-lg " >
            <a class="navbar-brand" href="#">DigiCOP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            </div>
          </nav>
    <div class="container">
      <?php echo(" Your complaint has been registered successfully. Complaint no. is - $complaintno");?>
      <div class="row text-center m-lg-3">
                <button class="btn btn-success w-25" style="margin-left: 400px;" onclick="location.href='digicop.php'">
                    Ok
                </button>
       </div>
    </div>

      </body>
</html>