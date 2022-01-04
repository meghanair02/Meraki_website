<?php
include ("config.php");
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<body>

</BR>
<div class="wrapper">
<h2>Registration</h2>

 <form action="" method="POST">
 <div class="input-box">
       <label>firstname</label>
   <input type="firstname" name="fname" class="cmn" placeholder="Enter firstname"required>
</div><div class="input-box"><br>
       <label>lastname</label>
   <input type="lastname" name="lname" class="cmn" placeholder="Enter lastname"required>
</div><br>
     <div class="input-box">
       <label>username</label>
   <input type="username" name="email" class="cmn" placeholder="Enter username"required>
</div><br>
<div class="input-box">
<label>Password</label>

    <input type="password" name="password" class="cmn" placeholder="Enter password" required>
</div><br>
<div class="input-box button">
    <input class="btn-clr" type="submit" value="register" name="submit">
</div>  
<div class="text">
<h3>Already have an account? <?php echo '<a href="login.php">LOGIN</a>';
?></h3></div>
     </div>
 </form>
</body>
</html>
    <style>
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-image: linear-gradient(to bottom right,darkslateblue , limegreen)
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background:beige;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: darkslateblue;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: darkslateblue;
  cursor: pointer;
}
.input-box.button input:hover{
  background: blue;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: darkslateblue;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}

    </style>
    <?php

    if(isset($_POST['submit']))
    { 
      $id=$_POST['id'];
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $password=$_POST['password'];


    

         
    $result=mysqli_query($mysqli,"insert into customer value ('$id','$fname', '$lname','$email','$password')");
    if($result)
    {
      header('location:ressuc.php');
    }
    else
    {
        echo "faliure";
    }
    }
    
?>
</body>
</html>