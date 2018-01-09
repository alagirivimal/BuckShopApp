<?php session_start();
ob_start();
/*
if(isset($_SESSION['adminuser']))
{
header("Location: dashboard.php");
}
*/
include "config.php";

if(isset($_SESSION['adminuser']))
{
unset($_SESSION['adminuser']);
header("Location: index.php?success=1");
}
else
{
header("Location: index.php?success=1");
}
?>
                            
						