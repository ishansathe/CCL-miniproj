<html>
<?php 
session_start(); 
session_destroy();
echo "<center>";
echo  "<h1>You  have  logged  out  sucessfully";
echo "<br>";
echo "Click here to log in again";
echo "<br>";
echo "<a href='login.php'>Login </a>";
?>
<body style="background-color:powderblue;">
</html>