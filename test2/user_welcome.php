<?php
session_start();
//require('connect_db.php');
//include "function_disease_fetch.php";
include "classes.php";


if(!$_SESSION['Email']){
  
  header ("location: user_login.php");
  exit();
}
else{
  $Email=$_SESSION['Email'];
  
}

$result1 = ("SELECT FName AS name1 FROM user WHERE Email='$Email'"); 
$result = mysqli_query($con,$result1);
if($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
$name1 = $row['name1'];
}

$result2 = ("SELECT LName AS name2 FROM user WHERE Email='$Email'"); 
$result = mysqli_query($con,$result2);
if($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
$name2 = $row['name2'];

}

?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <title>Circular Text,include,pdf</title>
    

        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
         <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

<header>

      </header>


  </head>
  <body style="color: #ffffff">

  <div class="user_display">


    <a href="user_logout.php" style="color: #ffffff; font-size: 120%; position: fixed; left: 5%; top: 5%;">LOGOUT</a><br><br>
    <a href="all_diseases.php" style="color: #ffffff; font-size: 120%; position: fixed; right: 5%;">ALL DISEASES AVAILABLE</a><br><br>

    <div>

    <b style="font-size:150%; text-align: center;">WELCOME </b><font color="#ffffff"> <?php echo $name1; ?>   <?php echo $name2; ?></font><br><br>

    <b style="font-size:150%; text-align: center;">Email: </b><font color="#ffffff"><?php echo $Email; ?></font><br><br>
  <form method="post">

   <label for="disease">Select the Disease</label>
    <select id="disease" name="disease">
		
		<?php
		
		$fetch= new Disease();
		
		
	$fetch-> disease_fetch();
		
		
		
		?>
   
      
    </select>
  
    <input type="submit" value="Submit" name="inquiry">
  </form>
</div>

</div>

 </body>
 </html>



<?php

//require('connect_db.php');

if(isset($_POST['inquiry']))
{

$Name=$_POST['disease'];

$query="SELECT * from disease WHERE Name='$Name'";

$run= mysqli_query($con, $query);

if(mysqli_num_rows($run)>0)
{

$result3 = ("SELECT Name AS name3 FROM disease WHERE Name='$Name'"); 
$result = mysqli_query($con,$result3);
if($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
$name3 = $row['name3'];


}

$result4 = ("SELECT Code AS code FROM disease WHERE Name='$Name'"); 
$result = mysqli_query($con,$result4);
if($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
$code = $row['code'];


}

$result5 = ("SELECT Description AS description FROM disease WHERE Name='$Name'"); 
$result = mysqli_query($con,$result5);
if($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
$description = $row['description'];


}

$result6 = ("SELECT Treatment AS treatment FROM disease WHERE Name='$Name'"); 
$result = mysqli_query($con,$result6);
if($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
$treatment = $row['treatment'];


}

echo nl2br("$code::$name3\n\n$description\n\n$treatment");

}

else {

    echo "<script>window.open('user_welcome.php', '_self'), alert('Request Not complete!')</script>";
}

}

?>




