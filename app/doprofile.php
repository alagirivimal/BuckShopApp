<?php session_start();
ob_start();

include "config.php";

if(isset($_REQUEST['profileUpdate']))
{

$customer_unique_sql = "SELECT profile_unique_id FROM `user_profile` ORDER BY id DESC LIMIT 0,1";
$customer_unique_exe = mysql_query($customer_unique_sql);
$customer_unique_fet = mysql_fetch_array($customer_unique_exe);

$user_id=$_SESSION['user_id'];
$profile_unique_id= $customer_unique_fet['profile_unique_id']+1;
$profile_name = $_REQUEST['profile_name'];
$profile_email = $_REQUEST['profile_email'];
$profile_mobile = $_REQUEST['profile_mobile'];
$profile_address = $_REQUEST['profile_address'];
$profile_country = $_REQUEST['profile_country'];
$profile_state = $_REQUEST['profile_state'];
$profile_city = $_REQUEST['profile_city'];
$profile_pincode = $_REQUEST['profile_pincode'];

$profile_created=date("Y-m-d h:i:s");
$profile_modified=date("Y-m-d h:i:s");


$customer_profile_sql = "INSERT INTO `user_profile` (`user_id`, `profile_unique_id`, `profile_name`, `profile_email`, `profile_mobile`, `profile_address`, `profile_city`, `profile_state`, `profile_country`, `profile_pincode`, `profile_status`, `profile_created`, `profile_modified`) 
VALUES 
('$user_id', '$profile_unique_id', '$profile_name', '$profile_email', '$profile_mobile', '$profile_address', '$profile_city', '$profile_state', '$profile_country', '$profile_pincode', '1', '$profile_created', '$profile_modified')";

//echo $customer_profile_sql; exit;

	if( $customer_unique_exe = mysql_query($customer_profile_sql))
	{
	header("Location:contest.php?contest_id=1");	
	}
	else
	{
	header("Location:profile-update.php?error=0");		
	}

}
else
{
header("Location:profile-update.php?error=0");	
}
?>