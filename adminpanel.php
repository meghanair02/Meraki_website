<html> 
<head> <div><div class="title">&nbsp; MERAKI</div> </head>
<div class="smalltitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN PANEL<div>

<hr style=" margin-left:0,text-align=left">

<div class="topnav">
    <h1> Welcome admin <?php 


session_start();
include 'configwall.php';

    require_once("connection.php");
    $query = " select * from darshan1 ";
    $result = mysqli_query($con,$query);

    echo $_SESSION['email'];
?>!!!
   
  </form>
 
</div>
<STYLE>
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
    .smalltitle{
        font-weight: 70%;
        font-size:20px;
    }
</STYLE>
 



<form method="get" action="indexadminpanel.php">
    <button type="submit">Publish blog of the week</button>
  </form>
<form method="get" action="userdetailsap.php">
    <button type="submit">user details</button>
</form>
<DIV class="UPLOADS">
</DIV>       <div class="prev-comments">
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
   <title>Admin panel </title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <style type="text/css">
         
         }:root{
         --f:'Mulish', sans-serif;}
         body{
         font-family: var(--f);
         position: relative;
         overflow: scroll;
         }.q{
         position: absolute ;
          
         }.uploads{
         
         font-size: 50px;
         
         }
         
      </style>
   </head>
   <body>
       
      
   <h2>BLOG Details</h2>

<table border="2" style="background-color:white">
  <tr>
    <td>ID</td>
    <td>username</td>
    <td>blog</td>
    <td>count</td>
    <td>Delete</td>
  </tr>

<?php

include "config.php"; // Using database connection file here

$records = mysqli_query($mysqli,"select * from uploads"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['blog']; ?></td>  
    <td><?php echo $data['count']; ?></td>    
  
    <td><a href="adminblogdelete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

      </div>
         </div>
         
         <body style="background-color:#77C1FC;">

      </body>
</html>