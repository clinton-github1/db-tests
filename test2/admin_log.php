<?php

require('connect_db.php');

if(isset($_POST['adm_log']))
{

$Name=($_POST['admin_name']);
$Password=($_POST['admin_pass']);


$Name=mysqli_real_escape_string($con, $Name);
$Password=mysqli_real_escape_string($con, $Password);


$query="SELECT * from admin WHERE Name='$Name' AND Password='$Password'";

$run= mysqli_query($con, $query);

if(mysqli_num_rows($run)>0)
{

	echo "<script> window.open('admin_pan.php', '_self') </script>";
}

else {

    echo "<script>window.open('index.php', '_self'), alert('You are not the Admin!')</script>";
}

}

?>