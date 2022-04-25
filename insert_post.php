<?php
  $name=$_POST['name'];
  $content=$_POST['content'];


  $con = mysqli_connect("localhost","root","","wdl");
  $query="INSERT INTO user_post(name,post) VALUES('$name','$content')";

  if(!mysqli_query($con,$query))
  {
    echo mysqli_error($con);
  }
  else
  {
    echo "POSTED!";
    header('location:home.php?posted=1');
  }

 ?>