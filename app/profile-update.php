<?php session_start();
ob_start();

if(!isset($_SESSION['logged_in'])){
	header('Location: ../index.php');
}


include "config.php";



 
$cSQL = "SELECT * FROM `countries` WHERE `id`=101";
$cresult = mysql_query($cSQL);
$country_results = array();
while($row = mysql_fetch_array($cresult)) {
	$country_results[]=$row;
}

$sSQL = "SELECT * FROM `states` WHERE `country_id`=101";
$sresult = mysql_query($sSQL);
$state_results = array();
while($row = mysql_fetch_array($sresult)) {
	$state_results[]=$row;
}

$ciSQL = "SELECT * FROM `cities` WHERE `state_id` <=41 ORDER BY `name` ASC";
$ciresult = mysql_query($ciSQL);
$city_results = array();
while($row = mysql_fetch_array($ciresult)) {
	$city_results[]=$row;
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
	<title>PROFILE | Bucks Shop</title>

</head>


<body class="stretched dark no-transition">

<div id="wrapper" class="clearfix">


<?php include "header-section.php"; ?>

<?php include "profile-main-section.php"; ?>

<?php include "footer-section.php"; ?>
</div>

<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>
