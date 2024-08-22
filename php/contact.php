<?php
include "select.php";
if(isset($_POST['send']))
{
	
	$Fname=$_POST['Fname'];
	$Email=$_POST['Email'];
	$phonenumber=$_POST['phonenumber'];
	$message=$_POST['message'];
	mysql_query("INSERT INTO contactus(Fname,Email,phonenumber,message) 
	values('$Fname','$Email','$phonenumber','$message')");
	
echo "<center>SUCCESSFULLIY SEND YOUR COMMENT AND STAY WITH US!! </center>";
}

	?>