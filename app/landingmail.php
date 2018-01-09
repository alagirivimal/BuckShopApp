<?php session_start();
ob_start();

include "config.php";

if(isset($_REQUEST['RequestSubmit']))
{

$qSQL = "SELECT * FROM `questions`";
$qresult = mysql_query($qSQL, $conn);
$question_results = array();
while($row = mysql_fetch_array($qresult)) {
	$question_results[$row['id']]=$row['question_value'];
}

$question_request = $_REQUEST;
$question_message = "";

foreach($question_results as $question_result) { 
$key = array_search($question_result, $question_results);
	if(is_array($question_request['question_answer'][$key])) 
	{
	$question_message .= $question_result."::".implode(" , ",$question_request['question_answer'][$key])."<br/><br/>";	
	}
	else
	{		
	$question_message .= $question_result."::".$question_request['question_answer'][$key]."<br/><br/>";
	}
}

/*
echo "<hr/>";
echo $question_message;
echo "<hr/>";
print_r($question_results);
echo "<hr/>";
print_r($_REQUEST); 
echo "<hr/>";
exit;
*/



error_reporting(E_ALL ^ E_NOTICE); 

// multiple recipients
$to  = 'provenwebengage@gmail.com' . ', '; // note the comma
$to .= 'alagirivimal@gmail.com';

// subject
$subject = 'Birthday Reminders for August';

// message
$message = '
<html>
<head>
  <title>HealthOYO Enquiry Mail</title>
</head>
<body>
  <p>HealthOYO Enquiry Mail</p>
  <table>
    <tr>
      <td>Name</td><td>'.$question_request['name'].'</td>
    </tr>
    <tr>
      <td>Name</td><td>'.$question_request['email'].'</td>
    </tr>
	<tr>
      <td>Mobile</td><td>'.$question_request['mobile'].'</td>
    </tr>
	<tr>
      <td>Country</td><td>'.$question_request['country'].'</td>
    </tr>
	<tr>
      <td>Enquiry Details</td><td>'.$question_message.'</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: ALAGIRI <alagirivimal@gmail.com>, PRASANNA <provenwebengage@gmail.com>' . "\r\n";
$headers .= 'From: PRASANNA <provenwebengage@gmail.com>' . "\r\n";

// Mail it
//mail($to, $subject, $message, $headers);
if(mail($to, $subject, $message, $headers)){ 
    echo "Mail Sent"; 
	$mail=1;
}else{ 
    echo "***ERROR***"; 
	$mail=0;
} 

header("Location:index.php?mail=$mail");
}
else
{
header("Location:index.php?mail=0");	
}
?>