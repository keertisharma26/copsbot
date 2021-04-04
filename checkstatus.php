<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="required/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>DigiCOP</title>
  </head>
  <body>
  <form action='showstatus.php' method='post' onsubmit='return match()' >

<div class="container-fluid" >
    <nav class="navbar bg-transparent navbar-dark  navbar-expand-lg " >
        <a class="navbar-brand" href="#">DigiCOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        </div>
      </nav>
  <div class="py-5 text-center text-light">
    <h2>Check Complaint Status</h2>
  </div>
</div>

<div class="container text-light p-3" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(3, 3, 3, 0.19); width:60%">
  
  <form novalidate>
    <div class="row g-3">
      <div class="col-sm-6">
        <label for="complaintno" class="form-label">Enter complaint number</label>
        <input id="complaintno" type="number" name="complaintno" class="form-control" placeholder=""
        required>
        <div class="invalid-feedback">
          Valid complaint number  is required.
        </div>
        <div class="row text-center m-lg-3">
                <button class="btn btn-success w-25" style="margin-left: 380px;" onclick="">
                    Submit
                </button>
              </div>


      </form>
    </div>
  </body>   
