<?php
include 'select.php';
if(isset($_POST["login"]))
{
$firstname = $_POST["username"];
$password = $_POST["password"];
 //$ePassword = md5($password);
$finalResult = mysql_query("SELECT * FROM signup WHERE firstname='$firstname' and epassword='$password'"); 
$confirm = mysql_fetch_array($finalResult);
if(is_array($confirm)) 
{
 session_start();
 $_SESSION['sid']=$firstname;
 header("location:../user.php");
} 
else 
{
echo "<center> Wrong UserName or Password </center>";
}
}
?>

