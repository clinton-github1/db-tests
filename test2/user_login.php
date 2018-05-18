<?php 
session_start();
?>


<?php

include "header.php";

?>

      <div class="form">
      	

	<div class="user_login">
<h1>USER LOGIN <div class="return"><a href="index.php" style="color: orange">HOME</a></div></h1>

<div>
  <form method="post">
    <label for="user_email">User Email</label>
    <input type="Email" id="user_email" name="user_email" placeholder="User Email.." required>

    <label for="user_pass">Password</label>
    <input type="Password" id="Password" name="user_pass" placeholder="User Password.." required>
  
    <input type="submit" value="LOGIN" name="login">
  </form>
</div>
</div>

</div>

</div>
      
  </body>
</html>




<?php
require('connect_db.php');
if(isset($_POST['login']))
{
  $Password=($_POST['user_pass']);
  $Email=$_POST['user_email'];


  $Password=mysqli_real_escape_string($con, $Password);
  $Email=mysqli_real_escape_string($con, $Email);




  $hashFormat="$2y$10$";
  $salt="ipreferusinghashtoencryptmypasswords";
  $hash_salt= $hashFormat . $salt;

  $Password= crypt($hash_salt, $Password);



  
  $check_user="select * from user WHERE Password='$Password' AND Email='$Email'";
  
  $run=mysqli_query($con,$check_user);
  
  if(mysqli_num_rows($run)>0)
  {
    session_start();
    
    $_SESSION['Email']=$Email;
    echo "<script>window.open('user_welcome.php','_self')</script>";
      
  }
  else{
    
    echo"<script>alert('Email or password is incorrect')</script>";
  }
}

?>