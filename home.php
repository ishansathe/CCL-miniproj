<html>
<?php 
session_start();
?>
<p><h1><center><?php echo $_SESSION["name"]."'s ";?>Profile</h1></p>
<p><h4><center><?php echo "Thank you for coming"?></h4> </p>

<body style="background-color:powderblue;">

 <center>  
   <h3>Here's your stored information, if you dont see any.. You <i>probably</i> haven't entered any.</h3>
   <fieldset>
   <legend>Notes</legend>
   <?php
   require_once("userpost.php");
   get_post();
   ?>
   </fieldset>
<br><br>
<b>You can store your ideas here! So that if you forget, we can help you remember! <br>
<a href = "vp.php"> New Post </a></b>
<br><br>
<b>You may leave if you want to. <br>
<a  href  ="logout.php">LOGOUT  </a></b>
</html>