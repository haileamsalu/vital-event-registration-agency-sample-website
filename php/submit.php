<?php
include "select.php";
if(isset($_POST['submit']))
{
	
	$date=$_POST['date'];
	$applicationby=$_POST['applicationby'];
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$sex=$_POST['sex'];
	$placeofbirth=$_POST['placeofbirth'];
	$dateofbirth=$_POST['dateofbirth'];
	$height=$_POST['height'];
	$colourofeye=$_POST['colourofeye'];
	$colourofhair=$_POST['colourofhair'];
	$occupation=$_POST['occupation'];
	$maritalstatus=$_POST['maritalstatus'];
	$ifother=$_POST['ifother'];
	$presentedby=$_POST['presentedby'];
	$region=$_POST['region'];
	$zone=$_POST['zone'];
	$city=$_POST['city'];
	$kebele=$_POST['kebele'];
	$housenumber=$_POST['housenumber'];
	$phonenumber=$_POST['phonenumber'];
    
	mysql_query("INSERT INTO person values('$date','$applicationby','$firstname','$middlename','$lastname','$sex','$placeofbirth','$dateofbirth','$height','$colourofeye','$colourofhair','$occupation','$maritalstatus','$ifother','$presentedby','$phonenumber')");
	
	mysql_query("INSERT INTO address values('$region','$zone','$city','$kebele','$housenumber','$phonenumber')");
	header('Location:../FDREAPPLICATION.html');
	
	
}
?>