<?php
$con=mysqli_connect("localhost","root","","project");

$username=$_POST["username"];
$pass=$_POST["pass"];

$r=mysqli_query($con,"select * from users where username='$username'and pass='$pass'");

if($row=mysqli_fetch_array($r))
  header("location:digicop.php");
else{
  echo"<script>alert('invalid username or password')</script>";
}
?>