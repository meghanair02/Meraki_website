<?php 


session_start();

include 'configwall.php';

    require_once("connection.php");
    $query = " select * from darshan1 ";
    $result = mysqli_query($con,$query);



error_reporting(0); 

if (isset($_POST['submit'])) { 
	$username = $_POST['username'];
	$genre=$_POST['genre'];
	$blog = $_POST['blog']; 
    $week = $_POST['week']; 

	$sql = "INSERT INTO botw (username, genre, blog,week)
			VALUES ('$username','$genre', '$blog','$week')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('blog of the week added successfully.')</script>";
	} else {
		echo "<script>alert('blog of the week does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<body style="background-color:#77C1FC;">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style1.css">

	<title>BLOG OF THE WEEK</title>
</head>
<body>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
            <div class="input-group">
				<label for="username">username</label>
                <input type="username" name="username" class="cmn" placeholder="Enter username"required>
			</div><br><br><br>
            <div>
            <label>week</label>
   <input type="week" name="week" class="cmn" placeholder="Enter week"required></div>
			</div>
			<br><br><br>
		<div>	Choose a genre:
<select name="genre">
<option value="" selected>none selected</option>

  <option value="romantic">romantic</option>
  <option value="technology">technology</option>
  <option value="mythology">mythology</option>
  <option value="comics">comics</option>
</select> </div><br><br>
			<div class="input-group textarea">
				<label for="blog">blog</label>
				<textarea id="blog" name="blog" placeholder="Enter blog" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post blog</button>
			</div>
		</form>
	
	</div>
</body>
</html>