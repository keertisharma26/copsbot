<?php

$con=mysqli_connect("localhost","root","","project");
$username=$_POST["username"];
$pass=$_POST["pass"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$dob=$_POST["dob"];
$city=$_POST["city"];

$r=mysqli_query($con,"insert into users(username,pass,fname,lname,phone,gender,age,dob,city) 
values ('$username','$pass','$fname','$lname','$phone','$gender','$age','$dob','$city')");

if($r)
{
echo "you have registered successfully";
header("location:digicop.php");
}

else
echo mysqli_error($con);


?>