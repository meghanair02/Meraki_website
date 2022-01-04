<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="mystyle.css">
    
    <body>
        <header>
            <h1>Meraki</h1>
        </header>
    </body>
    
    <body class="container-fluid">
        <div class="profile-bg container">
          <div class="content">
         
<?php 


session_start();
include 'configwall.php';
include 'connection.php';
    require_once("connection.php");
    $query = " select * from darshan1 ";
    $result = mysqli_query($con,$query);


?>
<h1> Username:
<?php

echo $_SESSION['email'];

$usernamecheck=$_SESSION['email'];


    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MERAKIDB";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
include('connection.php');  

    $username = stripcslashes($username);  

$sql = "SELECT id, fname, lname, email  FROM customer where email='$usernamecheck'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   { echo "<br>";
    echo  
    "User ID :".$row["id"]. 
    "<br>";
    echo
     "First Name: " . $row["fname"]. "<br>";
     echo
     " Last name:" . $row["lname"]. "<br>";
     echo
    " Email:" . $row["email"]."<br>";
   }
  }
?>


<?php
mysqli_close($conn);
?>
<BR>
BLOGS:
<?php
ECHO "<BR>";

$usernamecheck=$_SESSION['email'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MERAKIDB";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
include('connection.php');  

    $username = stripcslashes($username);  

$sql = "SELECT username,genre, blog,count  FROM uploads where username='$usernamecheck'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   { echo "<br>";  
    echo
    "Username: " . $row["username"]. "<br>";
          
    echo
    " Blog:" . $row["blog"]. "<br>";
    echo
    "Genre:" .$row["genre"]."<br>";
    echo
    " No of likes: " . $row["count"]. "<br>";
   }
  }
  else
  {
    echo "<br>";
    echo "no blogs written yet";
  }
?>
</div>
          <!--<div class="social-bg">
            <a href="https://www.twitter.com/aylin_marie" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
            
            <a href="http://www.instagram.com/aylinmcg" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
            
            <a href="https://www.pinterest.com/aylinmcg" target="_blank"><i class="fa fa-pinterest-p fa-2x" aria-hidden="true"></i></a>
          </div>-->
          <a href="LOGIN.PHP" class="btn btn-default">LOGOUT</a>
          <BR><BR><BR><br><br>
         
          
        </div>


<?php
mysqli_close($conn);
?>
</H1>

<STYLE>
          body {
    margin-top:0%;
    margin: 0 auto;
    padding:0px;
    background: linear-gradient(rgba(139, 158, 199, 0.7),rgba(139, 158, 199, 0.7)), url("http://source.unsplash.com/JWiMShWiF14");
    background-size: cover;
    width: 100%;
    height: 100%;
    font-size: 12px;
    font-family: sans-serif;
  }
  
  .profile-bg {
    width: 500px;
    height: 200%;
    background-color: white;
    text-align: center;
    margin: 0 auto;
    padding: 0px;
  }
  
  .profile-bg img {
    width: 100%;
    overflow: hidden;
    border-radius: 50%;
  }

  .h1 {
    margin-left: 70px;;
    margin-right: 500px;
    text-transform: uppercase;
    font-size: 50px;
    letter-spacing: .2em;
    font-weight: bold;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

  
  /*.social-bg {
    background-color: #eeeeee;
    height: 65px;
    margin: 0 auto;
    padding: 0px;
  }*/
  
  .fa {
    padding: 20px;
  }
  
  .btn {
    padding: 10px 50px 10px 50px;
    margin: 20px;
    border-radius: 20px;
    background-color: #8B9EC7;
    text-transform: uppercase;
    letter-spacing: .2em;
    font-size: 13px;
    font-weight: bold;
  }
  
  .btn:hover {
    background-color: white;
    color: #8B9EC7;
    border: 1px solid #8B9EC7;
    cursor:POINTER;
  }
  
  .fa {
    color: #444;
  }
  
  .content {
    padding: 30px;
  }
  
  .content p {
    margin-top: 30px;
  }
  
  
  
  h3 {
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: .2em;
    font-weight: bold;
    
  }
  
  small {
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: .2em;
    color: #8B9EC7;
  }
  
  /*footer {
    text-align: center;
    text-transform: uppercase;
    margin: 30px 0px 10px 0px;
    letter-spacing: .2em;
    font-size: 10px;
    font-weight: bold;
  }
  
  footer a {
    color: #ffffff;
  }*/
        </STYLE>
        <script>
        $(".menu").click(function(){
    $(this).toggleClass("open");
    $("#overlay").toggleClass("view");
    $(".background").toggleClass("show");
  });</script>
</body>
</html>