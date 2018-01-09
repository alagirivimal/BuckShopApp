<?php session_start();
ob_start();

if(!isset($_SESSION['adminuser']))
{
header("Location: index.php");
}
 
include "config.php";

if(isset($_REQUEST['submit']))
{
$job_id=0;
$question_value=$_REQUEST['question_value'];
$question_type=$_REQUEST['question_type'];
$question_option_one=$_REQUEST['question_option_one'];
$question_option_two=$_REQUEST['question_option_two'];
$question_option_three=$_REQUEST['question_option_three'];
$question_option_four=$_REQUEST['question_option_four'];
$question_option_five=$_REQUEST['question_option_five'];
$question_status="1";
$question_postdate=date("Y-m-d");

 
$question_sql="INSERT INTO `questions` (`question_value`,`question_type`,`question_option_one`,`question_option_two`,`question_option_three`,`question_option_four`, `question_option_five`,`question_status`) VALUES ('$question_value', '$question_type', '$question_option_one', '$question_option_two', '$question_option_three', '$question_option_four', '$question_option_five','$question_status')";
			
//echo $question_sql; exit;	 

if(mysql_query($question_sql))
	{
	header("Location: questionlist.php?msg=1");
	}
	else
	{
	header("Location: questionlist.php?msg=0");
	}
}
header("location:questionlist.php?msg=0");
?>
                            
						