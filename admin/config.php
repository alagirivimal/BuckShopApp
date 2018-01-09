<?php

$hostname = "localhost";

$username = "loanwalc_bucks";

$password = "Shop@2017";

$database = "loanwalc_bucks";


$conn = mysql_connect($hostname, $username, $password) or die("Connecting to MySQL failed");

mysql_select_db($database, $conn)
 

/*
$conn = mysqli_connect($hostname, $username, $password, $database);
if( mysqli_connect_error()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
$GLOBALS['conn'] = $conn;
		
function mysql_query($query) {
$conn = $GLOBALS['conn'];	
return mysqli_query($conn, $query);	
}
	
function mysql_num_rows($exec) {
return mysqli_num_rows($exec);
}

function mysql_fetch_array($exec) {
return mysqli_fetch_array($exec);
}
//mysql_close($conn);
*/
?>

