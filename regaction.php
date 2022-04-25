

<?php
 session_start();
 

$con = mysqli_connect("localhost","root","","wdl");

$name = $_POST["name"];
$email= $_POST["email"];
$pass= $_POST["pass"];


$s = "select * from register where name = '$name'";

$result = mysqli_query($con, $s);


$num = mysqli_num_rows($result);


if ($num==1)
{
    header('location:php3p21.php');
	echo "Invalid Username or password";
}
   
else{
  $register=" insert into register(name, pass, email) value ('$name','$pass','$email')";
  mysqli_query($con, $register);
  
  echo" Registered Sucessfully";
  header('location:login.php');
}






?>
