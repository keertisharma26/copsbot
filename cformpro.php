<?php

$cnm=$_POST["cnm"];

$vnm=$_POST["vnm"];

$vage=$_POST["vage"];

$doi=$_POST["doi"];

$poi=$_POST["poi"];

$landmark=$_POST["landmark"];

$cstate=$_POST["cstate"];

$ccity=$_POST["ccity"];

$cat=$_POST["cat"];

$des=$_POST["des"];

$con=mysqli_connect("localhost","root","","cop");

$r=mysqli_query($con,"insert into complaint(cnm,vnm,vage,doi,poi,landmark,cstate,ccity,cat,des) 
values ('$cnm','$vnm','$vage','$doi','$poi','$landmark','$cstate','$ccity','$cat','$des')");

if($r)
echo "complaint registered successfully";
else
echo mysqli_error($con);

?>