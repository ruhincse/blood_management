<?php 
ob_start();

require_once"vendor/autoload.php";

$connect=db_connect();


session_start();
if(isset($_SESSION['message'],$_SESSION['type'])){
$message=$_SESSION['message'];
$type=$_SESSION['type'];

}
 

?>