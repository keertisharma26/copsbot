<!DOCTYPE html>
<html>
<head>
    <title>
        Complaint form Anuj Here
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="container">
    <form action='cformpro.php' method='post'>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="cnm">Complainant's Name</label>
                <input type="text" class="form-control" id="cnm" name="cnm" placeholder="Complainant's Name">
                </div>

            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="vnm">Victim's Name</label>
                <input type="text" class="form-control" id="vnm" name="vnm" placeholder="Victim's Name">
                </div>
                <div class="form-group col-md-6">
                <label for="vage">Victim's Age</label>
                <input type="text" class="form-control" id="vage" name="vage" placeholder="Victim's Age">
                </div>
                <div class="form-group col-md-6">
                <label for="doi">Date of Incident</label>
                <input type="date" class="form-control" id="doi" name="doi" placeholder="date of incidence">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="landmark">landmark</label>
                    <input type="text" class="form-control" id="poi"  name="landmark" placeholder="Place Of Incident">
                </div>
                <div class="form-group col-md-6">
                    <label for="poi">Place of Incidence</label>
                    <input type="text" class="form-control" id="poi"  name="poi" placeholder="Place Of Incident">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cstate">State</label>
                    <input type="text" class="form-control" id="cstate" name="cstate" placeholder=" State">
                </div>
                <div class="form-group col-md-6">
                <label for="ccity">City</label>
                <input type="text" class="form-control" id="ccity" name="ccity">
                </div>
            </div>
                <div class="form-row">
                <div class="form-group col-md-4">
                <label for="cat">Crime Category</label>
                <select id="cat" name="cat" class="form-control">
                    <option selected>Choose...</option>
                    <option value='Arson'>Arson</option>
                    <option value='Assault and Battery'>Assault and Battery</option>
                    <option value='Burglary'>Burglary</option>
                    <option value='Child Abuse'>Child Abuse</option>
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

                <div class="form-group" >
                    <label for="des">Complaint</label>
                    <textarea class="form-control" id="des" rows="3" name="des"></textarea>
                </div>
            </div>

</div>
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="submit" class="btn btn-primary disabled">Get a Copy of FIR</button>

            </form>
        </div>
    </div>
</body>
</html>
