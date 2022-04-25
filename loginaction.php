<?php session_start();

$con = mysqli_connect("localhost","root","","wdl");

$name = $_POST["name"];
$pass= $_POST["pass"];



$s = "select * from register where name = '$name' and pass = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if ($num == 1)
{
    $_SESSION['name'] = $name;
    header('location: home.php');
}
else
{
    header('location:login.php');
}


?>