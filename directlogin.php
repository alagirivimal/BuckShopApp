<?php session_start();
ob_start();

require_once 'config.php';

//initalize user class
$this_con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if( mysqli_connect_error()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

$query = "SELECT user_id, name, email, created FROM user where email = 'alagirivimal@gmail.com' ";
$result = mysqli_query($this_con, $query);
$data = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);
if( $count == 1){
    $_SESSION = $data;
    $_SESSION['logged_in'] = true;
}else {


}

if(!isset($_SESSION['logged_in'])){
    header('Location: index.php');
}

if(isset($_SESSION['logged_in'])){
    header('Location: app/index.php');
}
?>