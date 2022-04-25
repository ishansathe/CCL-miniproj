<?php session_start();
$name=  $_POST["name"];
$email=  $_POST["pass"];
$conn  =mysqli_connect("localhost","root","","wdl");
$query  =  "select  *  from  reg  where  name  =  '$name'  &&  pass  ='$pass'";
$result  =  mysqli_query($conn,$query);
$num  =  mysqli_num_rows($result); if  ($num==1)
{
$_Session['Username']  = header('location:home.php');
}
else{ header('location:login.php');
}
?>

<?php session_start(); echo  "Hello";
?>
<br>
<a  href  ="logout.php">LOGOUT  </a>
