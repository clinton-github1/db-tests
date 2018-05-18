<?php


require('connect_db.php');

if(isset($_POST['inquiry']))
{


$FName=$_POST['fname'];
$LName=$_POST['lname'];
$Email=$_POST['email'];
$Password=($_POST['pass']);
$Cpassword=($_POST['cpass']);
$Country=$_POST['country'];


$Email=mysqli_real_escape_string($con, $Email);
$LName=mysqli_real_escape_string($con, $LName);
$FName=mysqli_real_escape_string($con, $FName);



$hashFormat="$2y$10$";
  $salt="ipreferusinghashtoencryptmypasswords";
  $hash_salt= $hashFormat . $salt;

  $Password= crypt($hash_salt, $Password);
  $Password=mysqli_real_escape_string($con,$Password);


$hashFormat="$2y$10$";
  $salt="ipreferusinghashtoencryptmypasswords";
  $hash_salt= $hashFormat . $salt;

  $Cpassword= crypt($hash_salt, $Cpassword);
  $Cpassword=mysqli_real_escape_string($con, $Cpassword);



if(strlen($FName)<3 || strlen(LName)<3)
{

	echo "<script>window.open('index.php', '_self'), alert('Name too short')</script>";
	exit();
}

if(strlen($FName)>15 || strlen($LName)>15)
{

	echo "<script>window.open('index.php', '_self'), alert('Name too long')</script>";
	exit();
}


if(strlen($Password)<8)
{

	echo "<script>window.open('index.php', '_self'), alert('Password should not be less than 8 characters')</script>";
	exit();
}



$check_user="select * from email_server where Email='$Email'";
	
	$run=mysqli_query($con,$check_user);
	
	if(mysqli_num_rows($run)>0)
	{



$check_Password="select * from user where '$Password'!='$Cpassword'";
$run=mysqli_query($con,$check_Password);

if(mysqli_num_rows($run)>0)
{
	echo "<script>window.open('index.php', '_self'),alert ('Passwords Entered do not Match.Please check and try again!')</script>";
	exit();
	
}


$check_Email="select * from user where Email='$Email'";
$run=mysqli_query($con,$check_Email);

if(mysqli_num_rows($run)>0)
{
	echo "<script>window.open('index.php', '_self'),alert ('Email already registered in the database!')</script>";
	exit();
	
}



$mysql="insert into user VALUES('$FName','$LName','$Email', '$Password','$Cpassword','$Country')";
if(mysqli_query($con,$mysql))
{
	echo"<script>window.open('user_login.php', '_self'), alert('Successful Submission')</script>";	
}

else{

	echo "<script>window.open('index.php', '_self'), alert('something is wrong!')</script>";
}

}

else{

	echo "<script>window.open('index.php', '_self'), alert('Enter valid email address')</script>";
	exit();
}



}



?>