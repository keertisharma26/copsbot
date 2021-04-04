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

    <div class="container-fluid">
        <nav class="navbar bg-transparent navbar-dark  navbar-expand-lg " >
            <a class="navbar-brand" href="#">DigiCOP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            </div>
          </nav>
      <div class="py-5 text-center text-light">
        <img class="mb-4 d-block mx-auto" src="images\register.jpg" alt="user_logo" width="150" height="150" style="border-radius: 50%;">
        <h2>Complaint Form</h2>
        <p class="lead">सत्यमेव जयते</p>
      </div>
    </div>

    <div class="container text-light p-3" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(3, 3, 3, 0.19); width:60%">
      
      <h4 class="mb-3">Complaint Details</h4>
      <form action='complaintForm2.php'action='cmpno.php' method='post'>
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="fnm" class="form-label">First Name</label>
            <input id="fnm" name="fnm" type="text" class="form-control" placeholder="Rahul"
            required>
            <div class="invalid-feedback">
              Valid First Name is required.

            </div>
          </div>
          <div class="col-sm-6">
            <label for="lnm" class="form-label">Last Name</label>
            <input id="lnm" name="lnm" type="text" class="form-control" placeholder="Suthar"
            required>
            <div class="invalid-feedback">
              Valid Last Name is required.
            </div>
          </div>

          <div class="col-md-6">
            <label for="district" class="form-label">District</label>
              <select id="district" class="form-control" name="district">
                <option value="Select District">Select District</option> 
                <option value="udaipur">Udaipur</option>
                <option value="jaipur">Jaipur</option>
                <option value="jodhpur">Jodhpur</option>
              </select> 
              <div class="invalid-feedback"> 
                Valid last name is required.
              </div>
          </div>

          <div class="col-md-6">
            <label for="station" class="form-label">Station</label>
              <select id="station" class="form-control" name="station">
                <option value="">Select Station</option>
                <option value="goverdhanvillas">Goverdhan Vilas</option>
                <option value="hathipole">Hathi Pole</option>
                <option value="hiranmagrisec4">Hiran Magri Sec. 4</option>
              </select> 
              <div class="invalid-feedback"> 
                Valid last name is required.
              </div>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Select Crime from Dropdown</h4>

          <div class="form-floating">
            <select class="form-select" id="category" name="category" aria-label="Floating label select example">
              <option selected>Choose...</option>
                    <option value='Arson'>Arson</option>
                    <option value='Assault and Battery'>Assault and Battery</option>
                    <option value='Burglary'>Burglary</option>
                    <option value='Child Abuse'>Child Abuse</option>
                    <option value='Child Abuse'>Cyber Crime</option>
                    <option value='Drug Crimes'>Drug Crimes</option>
                    <option value='Drunk Driving DUI/DWI'>Drunk Driving DUI/DWI</option>
                    <option value='Embezzlement'>Embezzlement</option>
                    <option value='Forgery'>Forgery</option>
                    <option value='Gun Possession'>Gun Possession</option>
                    <option value='Homicide'>Homicide</option>
                    <option value='Kidnapping'>Kidnapping</option>
                    <option value='Murder'>Murder</option>
                    <option value='Police Misconduct'>Police Misconduct</option>
                    <option value='Rape'>Rape</option>
                    <option value='Sexual Abuse'>Sexual Abuse</option>
                    <option value='Speeding Violations'>Speeding Violations</option>
                    <option value='Stalking'>Stalking</option>
                    <option value='Tax Evasion'>Tax Evasion</option>
                    <option value='Vanadalism'>Vanadalism</option>
                    <option value='White Collar Crime'>White Collar Crime</option>
            </select>
            <label for="floatingSelect">Crimes</label>
          </div>
          
          <hr class="my-4">

          <h4 class="mb-3">Select Gender</h4>

          <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="other">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                </div>
                
            </div>
        </div>

          <hr class="my-4">

            <div class="col-md-6">
              <label for="age" class="form-label">Age</label>
              <input id="age" name="age" type="number" class="form-control" placeholder="11"
              required>
              <div class="invalid-feedback">
                Please add valid age.
              </div>
            </div>

            <div class="col-md-6">
              <label for="incidentdate" class="form-label">Date</label>
              <input id="incidentdate" name='incidentdate' type="date" class="form-control"  
              required>
            </div>

          <hr class="my-4">
          <div class="col-md-6">
            <label for="vnm" class="form-label" >Name of Victim</label>
            <input type="text" name="vnm" class="form-control">
            <small class="text-muted">
              Please Enter Victim Name. 
            </small>
            <div class="invalid-feedback">
              Please Enter Valid Name.
            </div>
          </div>

          <div class="col-md-6">
            <label for="location" class="form-label" >Location of Incident</label>
            <input id="location" name="location" type="text" class="form-control">
            <small class="text-muted">
              Please Enter the location where incident took place.
            </small>
            <div class="invalid-feedback">
              Please Enter Valid Location.
            </div>
          </div>
          
            
            <div class="col-md-12">
              <label for="incidentdetails" class="form-label">Enter Incident</label>
              <textarea class="form-control" id="incidentdetails" name="incidentdetails" rows="3"></textarea>
            </div>        
            <hr class="my-4">
            <div class="row  p-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Accept Terms and Conditions</label> 
                  </div>
            </div>
            <div class="row text-center m-lg-3">
                <button class="btn btn-success w-25" style="margin-left: 400px;" onclick="">
                    Submit
                </button>
              </div>
          

        </div>


      </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    
      </body>
</html>
