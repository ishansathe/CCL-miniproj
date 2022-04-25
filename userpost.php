<?php
function get_post()
{
	$con = mysqli_connect("localhost","root","","wdl");
	$user=$_SESSION['name'];
	$query = "SELECT * FROM user_post where name='$user'";
	$result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
	{
		echo '<p>'.$row['post'].'</p>';
	}
}