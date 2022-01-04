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
        color: #0000ff;
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
  border: 1px solid grey;
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
  padding: 11px;
  background: #2196F3;
  color: rgb(0, 0, 0);
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}

.topnav {
  overflow: auto;
  background-color: #e9e9e9;
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
  background-color: #0b7dda;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}
</style>
&nbsp;


<form method="get" action="index.php">
    <button type="submit">write a blog</button>
</form>
<br>

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
   
   <head>
   <title>Like/unlike system in php & mysql</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;900&display=swap" rel="stylesheet">
      <style type="text/css">
         *{
         margin:0;
         padding: 0;
         box-sizing: border-box;
         }:root{
         --f:'Mulish', sans-serif;}
         body{
         font-family: var(--f);
         position: relative;
         overflow: scroll;
         }.q{
         position: absolute ;top:57%;
         left: 35%;
         transform: translate(-50% , -50%);
         }.uploads{
         width:97%;
         position: relative;
         padding: 20px;
         border-radius: 2px;
         background: white;margin-top:10px;
         font-weight: bold;
         font-size: 25px;
         
         }
         .like{margin-top:10px;display: flex;align-items: center;}
         .like_icon{
         width:23px;
         width:23px;margin: 10px;
         }h3{
         font-weight: lighter;
         }
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
          $(".like").click(function() {
          	var id=$(this).attr("title");
          	var i=$(this).children(".like_icon").attr("src");
          	if(i=="heart.svg"){
          		$(this).children(".like_icon").attr("src","red_heart.svg");
          		$(this).children("span").text("liked");
          	}else if(i=="red_heart.svg"){
          		$(this).children(".like_icon").attr("src","heart.svg");
          		$(this).children("span").text("unliked");
          	}
          	$.post("get.php",{data:id,how:'c'});
          });
         });
      </script>
   </head>
   <body>
      <div class="q">
         <?php
            $conn=new mysqli("localhost","root","","MERAKIDB");
            $sql="select * from uploads";
            $_SESSION['user_id']=1;
            $res=$conn->query($sql);
            if($res->num_rows>0){
            	while($row=$res->fetch_assoc()){
            		$id=$row['id'];
            		$blog=$row['blog'];
            		$count=$row['count'];
                $name=$row['username'];
                $genre=$row['genre'];
                
               
                echo "<div class='uploads'>
                <p>".$name."</p>
                <p>Genre: ".$genre."</p>
                              <h3>".$blog."</h3>
                              <div class='like' title=".$id.">     
                                 <img class='like_icon' src='heart.svg'>
                                 <span>".$count."</span>
                               </div>
                          </div>";
            	}
            }else{
            	echo "No record found.";
            }
            ?>
      </div>
         </div>
         
    
      </body>
</html>