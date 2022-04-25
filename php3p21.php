<html>
<body style="background-color:powderblue;">
<center>
<h1>Welcome to Notix! </h1>
<h2><form  action="regaction.php"  method="POST"> 
Username:  <input  type=  "text"  name="name" required>  </br></br>
Password:  <input  type=  "password"  name="pass" required></br></br> 
Email:  <input  type=  "email"  name="email" size="30px" required></br></br>
<input  type=  "submit"  name="Register"  value="register" onclick="myFunction()"></h2>
<script>
function myFunction() {
  alert("Your account has been registered!");
}
</script>
<h8>Already registered? 
<a href="login.php">Click Here</a>
</form>
</body>
</html>




