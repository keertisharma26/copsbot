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

if($r)
{
echo "you have registered successfully";
header("location:digicop.php");
}

else
echo mysqli_error($con);


?>