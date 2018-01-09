<?php session_start();
ob_start();

if(!isset($_SESSION['logged_in'])){
	header('Location: ../index.php');
}


include "config.php";

//print_r($_REQUEST);

$contest_id=$_REQUEST['contest_id'];
$group_id=$_REQUEST['group_id'];
$user_id=$_REQUEST['user_id'];
$member_join_status=1;
$member_join_date=date("Y-md h:i:s");
$member_status=1;
$contest_insert_SQL="INSERT INTO `contests_groups_members` 
					(`contest_id`, `group_id`, `user_id`, `member_join_status`, `member_join_date`, `member_status`) 
					VALUES 
					('$contest_id', '$group_id', '$user_id', '$member_join_status', '$member_join_date', '$member_status')";
$contest_insert_SQL=mysql_query($contest_insert_SQL);


header("Location:contest-complete.php?contest_id=$contest_id");
?>
 