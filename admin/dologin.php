<?php session_start();
ob_start();

if(isset($_SESSION['adminuser']))
{
header("Location: dashboard.php");
}
 
include "config.php";

if(isset($_REQUEST['submit']))
{
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$sql="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
$exe=mysql_query($sql);
echo $num=@mysql_num_rows($exe);
if($num>0)
	{
	$_SESSION['adminuser']="1";
	
	header("Location: dashboard.php");
	}
	else
	{
	header("Location: index.php?err=1");
	}
}
else
{
header("Location: index.php?err=1");
}
?>
                            
						