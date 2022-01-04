<html> 
<head> <div><div class="title">&nbsp; MERAKI</div> </head>
<hr style=" margin-left:0,text-align=left">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="topnav">
    <a class="active" href="wall.php">WALL</a>
    <a href="blogoftheweek.php"> BLOG OF THE WEEK </a>
    <a href="PROFILETAB.PHP" target="_self">MY PROFILE </a>
    <a href="#about">ABOUT</a>
    <br></br><br></br>
    <h1> Welcome <?php 


session_start();
include 'configwall.php';

    require_once("connection.php");
    $query = " select * from darshan1 ";
    $result = mysqli_query($con,$query);

    echo $_SESSION['email'];
?>!!!
    <div>
    <form class="example" action="action_page.php">
    <input type="text" placeholder="What are you looking for?" name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
</div>
<style>
  .h1 {
  text-align: right;
}
    .body{
        color: beige;
        font-size: 20px ;
    }
    .title{
        font-size: 50px;
        font-weight: bold;
    }

    * {
  box-sizing: border-box;
}
.div 
{
   border-radius: 5px;
  background-color: #f2f2f2;
  padding: 100px;
}
/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 0px solid grey;
  float: left;
  width: 95%;
  background: #f1f1f1;
}
form.example {
background:#f1f1f1;
width: 100%;
}
/* Style the submit button */
form.example button {

  float: left;
  width: 5%;
  padding: 10px;
  background: ;
  color: rgb(0, 0, 0);
  font-size: 17px;
  border: 1px #77C1FC;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #77C1FC;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}

.topnav {
  overflow: auto;
  background-image: linear-gradient(#77C1FC,white);
  height: 200%;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #4b9cd3;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}
</style>


<style>

.button {
  display: inline-block;
  padding: .75rem 1.25rem;
  border-radius: 10rem;
  color: white;
  text-transform: uppercase;
  font-size: 1rem;
  letter-spacing: .15rem;
  transition: all .3s;
  left:80%;
  top: 85%;
  background-color:white;
  position: fixed;
  overflow: auto;
  z-index: 1;}
  
 
  
}

/* optional reset for presentation */

  </style>
ABOUT US

        <div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM uploads";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4></h4>
				
				<p></p>
			</div>
      
      
			<?php

				}
			}
			
			?>
   We at Meraki believe that "writing is the best way to talk to people without getting interrupted". Meraki provides you a platform for your words to get heard and read by the audience in the form of Blogging.   <img src="img2.png" ><br>
 Just not Blogging but a genre classified blogging with a variety of genres both for publishing and reading right at your feet.
   
    
      </body>
</html>