<?php session_start();
ob_start();

if(!isset($_SESSION['logged_in'])){
	header('Location: ../index.php');
}


include "config.php";

?>
<?php 
$contest_id=$_REQUEST['contest_id']; 
$user_id=$_SESSION['user_id'];
 
$contests_SQL = "SELECT * FROM `contests` WHERE id='$contest_id' ORDER BY id DESC LIMIT 1";
$contests_EXE = mysql_query($contests_SQL);
$contests_results = array();
while($row = mysql_fetch_array($contests_EXE)) {
	$contests_results[]=$row;
}

$contests_groups_SQL = "SELECT * FROM `contests_groups` WHERE contest_id='$contest_id' ORDER BY id DESC LIMIT 1";
$contests_groups_EXE = mysql_query($contests_groups_SQL);
$contests_groups_results = array();
while($row = mysql_fetch_array($contests_groups_EXE)) {
	$contests_groups_results[]=$row;
}


$contests_groups_members_SQL = "SELECT * FROM `contests_groups_members` WHERE contest_id='$contest_id' ORDER BY id ASC";
$contests_groups_members_EXE = mysql_query($contests_groups_members_SQL);
$contests_groups_members_results = array();
while($row = mysql_fetch_array($contests_groups_members_EXE)) {
	$contests_groups_members_results[]=$row;
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title> Contest Details | Bucks Shop</title>

</head>


<body class="stretched dark no-transition">

<div id="wrapper" class="clearfix">

<?php include "header-section.php"; ?>
 
<?php include "contest-complete-main-section.php"; ?> 

<?php include "footer-section.php"; ?>


</body>
</html>
