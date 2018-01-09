<?php session_start();
ob_start();

if(isset($_SESSION['adminuser']))
{
header("Location: dashboard.php");
}
 
include "config.php";

$id=$_REQUEST['id'];

$sql="delete from questions where id='$id'";
mysql_query($sql);


header("location:questionlist.php?message=1");
?>
                            
						