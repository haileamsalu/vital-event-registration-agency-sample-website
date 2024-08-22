<?php
 
 session_destroy();
 unset($_SESSION['sid']);
 header("location:../login.html");

?>