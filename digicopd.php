<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     
    <title>DigiCop</title>
    <link rel="stylesheet" href="assets/css/menu.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!--===============================================================================================-->
</head>

<body>

	<div class="container-fluid">
        <nav class="navbar bg-transparent navbar-dark  navbar-expand-lg " >
            <a class="navbar-brand" href="#">DigiCOP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            </div>
          </nav>
		  <div class="container w-100 p-2" >
			<div class="row w-100 " >
				<div id="carouselExampleIndicators" class="carousel w-100 slide p-1" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img class="d-block w-100"  style="height:270px; width:80px"src="images/1.jpg" alt="First slide">
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100" style="height:270px; width:80px"src="images/2.jpg" alt="Second slide">
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100" style="height:270px;  width:80px"src="images/3.jpg" alt="Third slide">
					  </div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div>
			  </div>
		  </div>
		  <div class="container p-5" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(3, 3, 3, 0.19);">
		  <div class="col d-flex justify-content-center">
			<div class="row p-5 text-center">
				<div class="col-sm-6">
					<a href="./complaintForm.php" style="color: inherit; text-decoration: none; ">
						<div class="card"  style="color:white;height:300px; width:300px;background-image: linear-gradient(to right top, #18089d, #2a1998, #362593, #3f2f8d, #473887);">
							<div class="card-header">
								<h4>File a complaint</h4>
							</div>
							<div class="card-body">
                                <a href="./complaintForm.php"></a>
								<h5 class="card-title">Lodge a complaint using form</h5>
							</div>
					    </div>
					</a>
				</div>
				<div class="col-sm-6">
					<a href="./checkstatus.php" style="color: inherit; text-decoration: none; ">
						<div class="card"  style="color:white;height:300px;width:300px;background-image: linear-gradient(to right top, #18089d, #2a1998, #362593, #3f2f8d, #473887);">
							<div class="card-header">
								<h4>Check Status</h4>
							</div>
							<div class="card-body">
							   <a href="./checkstatus.php"></a>
								<h5 class="card-title">Report a complaint for someone else</h5>
							</div>
					    </div>
					</a>
				</div>
			</div>
			</div>
			<div class="row p-5 text-center">
				
				
			</div>
		  </div>
	</div>
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
