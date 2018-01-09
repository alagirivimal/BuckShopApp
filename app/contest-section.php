<div class="container">
<?php
$contest_sql = "SELECT * FROM `contests` WHERE `contest_status`=1 ORDER BY `id` DESC LIMIT 1";
$contest_exe = mysql_query($contest_sql);
if($contest_cnt = mysql_num_rows($contest_exe)>0)
{
$contest_fet = mysql_fetch_array($contest_exe);
//print_r($contest_fet);
?>
<?php /* ?>
<?php echo $contest_fet['contest_name']; ?> ( <?php echo $contest_fet['contest_unique_id']; ?> )- RS <?php echo $contest_fet['contest_fee']; ?>  - 
<?php */ ?>
<?php if($check_profile_cnt>0) { ?> 

<a href="contest.php?contest_id=<?php echo $contest_fet['id']; ?>">
<img src="images/bs/wingold.jpg" style="top:-320px; position:relative;"/>
</a> 

<?php } else { ?> 
<a href="profile-update.php">
<img src="images/bs/wingold.jpg" style="top:-320px; position:relative;"/>
</a> 
<?php } ?>

<?php
}
?>


<?php /* ?>

<?php if(isset($_REQUEST['contest_id'])) { ?>
<?php 
$contest_id=$_REQUEST['contest_id']; 
$user_id=$_SESSION['user_id'];
?>
<div class="col-md-12 col-sm-12 col-xs-12">
<p style="color:green;    text-align: center;">
<a href="confirm-contest.php?contest_id=<?php echo $contest_id; ?>&user_id=<?php echo $user_id; ?>" style="color:green;"> CONFIRM PAYMENT </a>
</p>
</div>

<?php } else { ?>
<div class="col-md-12 col-sm-12 col-xs-12">
<?php
$contest_sql = "SELECT * FROM `contests` WHERE `contest_status`=1 ORDER BY `id` DESC LIMIT 1";
$contest_exe = mysql_query($contest_sql);
if($contest_cnt = mysql_num_rows($contest_exe)>0)
{
$contest_fet = mysql_fetch_array($contest_exe);
//print_r($contest_fet);
?>
<p style="color:#fff;">

<?php echo $contest_fet['contest_name']; ?> ( <?php echo $contest_fet['contest_unique_id']; ?> )- RS <?php echo $contest_fet['contest_fee']; ?>  - 
<?php if($check_profile_cnt>0) { ?> 
<a href="buy-contest.php?contest_id=<?php echo $contest_fet['id']; ?>">BUY NOW</a> 
<?php } else { ?> 
<a href="profile-update.php">UPDATE PROFILE</a> 
<?php } ?>

</p>
<?php
}
?>
</div><!--Main Column Half-->
<?php } ?>
<?php */ ?>
</div> 