<?php
include "select.php";
if(isset($_POST['signup']))
{
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$age=$_POST['age'];
	$sex=$_POST['sex'];
	$phonenumber=$_POST['phonenumber'];
	$epassword=$_POST['password'];
	$employeeidentity=$_POST['employeeidentity'];
	$emps=mysql_num_rows(mysql_query("SELECT * FROM signup WHERE employeeidentity='$employeeidentity'"));
	$count=mysql_num_rows(mysql_query("SELECT * FROM signup WHERE phonenumber='$phonenumber'"));
	if($emps==1 and $count==0)
	{
	
	mysql_query("INSERT INTO signup(firstname,lastname,age,sex,phonenumber,epassword,employeeidentity) 
	values('$firstname','$lastname','$age','$sex','$phonenumber','$epassword','$employeeidentity')");
	header('Location:../signup.html');
    }
	else 
{
echo "<center> DUPLICATED DATA...USE CORRECT EMPLOYEE IDENTITY OR NEW PHONENUMBER </center>";
}
	}
	?>