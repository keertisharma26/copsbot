<!doctype html>
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
       <script>
               function match()
               {
                    var p=document.getElementById("pass").value;

                    var confirms=document.getElementById("cpass").value;
                    if(p==confirms)
                        return true;
                        else
                        {
                            alert("Password Not Match");
                            return false;
                        }
               } 
        </script>
  <form action='registrationForm2.php' method='post' onsubmit='return match()' >

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
        <img class="mb-4 d-block mx-auto" src="images\emblem3.png" alt="user_logo" width="150" height="150" style="border-radius: 50%;">
        <h2>Registration Form</h2>
        <p class="lead">सत्यमेव जयते</p>
      </div>
    </div>

    <div class="container text-light p-3" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(3, 3, 3, 0.19); width:60%">
      
      <h4 class="mb-3">Personal Details</h4>
      <form novalidate>
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First Name</label>
            <input id="firstName" type="text" name="fname" class="form-control" placeholder="Rahul"
            required>
            <div class="invalid-feedback">
              Valid First Name is required.
            </div>
          </div>
          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input id="lastName" type="text" name="lname" class="form-control" placeholder="Suthar"
            required>
            <div class="invalid-feedback">
              Valid Last Name is required.
            </div>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
             <input id="email" type="email" class="form-control" name="email" placeholder="xyz@gmail.com">
              <div class="invalid-feedback"> 
                Valid email is required.
              </div>
          </div>
          <div class="col-md-6">
            <label for="phone" class="form-label">Phone no.</label>
            <input id="phone" type="phone" class="form-control" name="phone">
              <div class="invalid-feedback"> 
                Valid phone no. is required.
              </div>
          </div>
          
          <h4 class="mb-3">Select Gender</h4>

          <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                </div>
                
            </div>
        </div>

          <hr class="my-4">

            <div class="col-md-6">
              <label for="age" class="form-label">Age</label>
              <input id="age" type="number"  name="age"class="form-control" placeholder="18"
              required>
              <div class="invalid-feedback">
                Please add valid age.
              </div>
            </div>

            <div class="col-md-6">
              <label for="dob" class="form-label">Date of Birth</label>
              <input id="dob" type="date" name="dob" class="form-control"  required>
              <div class="invalid-feedback">
                Please add.
              </div>
            </div>
            <div class="col-md-6">
              <label for="city" class="form-label">City</label>
              <input id="city" type="text" name="city" class="form-control"  required>
              <div class="invalid-feedback">
                Please add city.
              </div>
            </div>
            <div class="col-md-6">
              <label for="pass" class="form-label">Password</label>
              <input id="pass" type="password" name="pass" class="form-control"  required>
              <div class="invalid-feedback">
                Please add.
              </div>
            </div>
            <div class="col-md-6">
              <label for="cpass" class="form-label">Confirm Password</label>
              <input id="cpass" type="password" name="cpass" class="form-control"  required>
            </div>
            <div class="row text-center m-lg-3">
                <button class="btn btn-success w-25" style="margin-left: 400px;" onclick="">
                    Submit
                </button>
              </div>


      </form>
    </div>
  </body>   
