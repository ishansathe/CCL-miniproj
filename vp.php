<html>
<body style="background-color:powderblue;">
<h2>
<form action='insert_post.php' method="POST"  enctype="multipart/form-data" id="form1">
<div class="formgroup">
<label for="name">Name</label>
<input type="text" class="form-control" name="name">
<br><br>
<label for="content">Content</label>
<textarea class="contentField" name="content" rows="4" cols="50" id="textarea"></textarea>
<br>
<button type="submit" class="btn btn-primary" id='lgn' style="height:30px; width:100px" onclick="myFunction()">Post</button>
<script>
function myFunction() {
  alert("Your information has been posted!");
}
</script>

</div>
</form>
</html>