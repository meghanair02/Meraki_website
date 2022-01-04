<?php 


session_start();

include 'configwall.php';

    require_once("connection.php");
    $query = " select * from darshan1 ";
    $result = mysqli_query($con,$query);



error_reporting(0); 

if (isset($_POST['submit'])) { 
	$username = $_SESSION['email'];
	$genre=$_POST['genre'];
	$blog = $_POST['blog']; 

	$sql = "INSERT INTO uploads (username, genre, blog)
			VALUES ('$username','$genre', '$blog')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('blog added successfully.')</script>";
	} else {
		echo "<script>alert('blog does not add.')</script>";
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

	<title>Comment System in PHP - Pure Coding</title>
</head>
<body>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				
			</div>
			
			Choose a genre:
<select name="genre">
<option value="" selected>none selected</option>

  <option value="romantic">romantic</option>
  <option value="technology">technology</option>
  <option value="mythology">mythology</option>
  <option value="comics">comics</option>
</select><br><br>
			<div class="input-group textarea">
				<label for="blog">Blog</label>
				<textarea id="blog" name="blog" placeholder="Enter blog" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post blog</button>
			</div>
		</form>
	<style>
		
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: #ffffff;
}

.wrapper {
    padding: 20px;
    background: #FFF;
    box-shadow: 0 5px 10px rgba(0,0,0,0.3);
    width: 600px;
    min-height: 400px;
    margin: 20px 0;
}

.wrapper .row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
}

.wrapper .form .row .input-group {
    padding: 0 10px;
    display: block;
}

.wrapper .form .row .input-group:first-child {
    padding-left: 0;
}

.wrapper .form .row .input-group:last-child {
    padding-right: 0;
}

.wrapper .form .input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 50px;
}

.wrapper .form .input-group label {
    font-weight: 600;
    margin-bottom: 5px;
    display: block;
}

.wrapper .form .input-group .btn {
    margin: 20px 0;
    display: block;
    padding: .7rem 2rem;
    opacity: .8;
    color: rgb(255, 255, 255);
    background: #000000;
    border: none;
    outline: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 1rem;
    transition: .3s ease-in;
}

.wrapper .form .input-group .btn:hover {
    opacity: 1;
}

.wrapper .form .input-group input, .wrapper .form .input-group textarea {
    width: 100%;
    height: 100%;
    border: 1px solid #ffffff;
    outline: none;
    padding: 5px 10px;
}

.wrapper .form .input-group.textarea {
    height: 200px;
}

.wrapper .form .input-group.textarea textarea {
    resize: none;
}

.wrapper .prev-comments {
    margin-top: 50px;
}

.wrapper .prev-comments .single-item {
    background: #FFF;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    padding: 10px 20px;
    text-align: left;
    margin-bottom: 25px;
}

.wrapper .prev-comments .single-item h4 {
    font-size: 1.3rem;
    font-weight: 800;
    color: #111;
}

.wrapper .prev-comments .single-item a {
    margin: 10px 0;
    font-size: 1rem;
    color: #111;
    text-decoration: none;
    display: inline-block;
}

.wrapper .prev-comments .single-item p {
    font-size: .9rem;
    color: #111;
}
	</style>
	</div>
</body>
</html>