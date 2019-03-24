<?php 


if(!function_exists('db_connect')){

	function db_connect(){
		try{
		$dsn="mysql:dbname=blooddonate;host:localhost";
		$connect=new PDO($dsn,'root','');
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	
	catch(PDOException $e){
		$message=$e->getMessage();
	}
	return $connect;
	}
}

if(!function_exists('is_login')){

	function is_login(){
		return isset($_SESSION['email'],$_SESSION['id']);
	}
}

	if(!function_exists('redirect')){

		function redirect($location){

			header("Location:".$location. ".php" );

			
				exit;
			

		}

	}


	if(!function_exists('is_admin')){
		function is_admin(){
			return $_SESSION['role']=="admin";
		}
	}

	if(!function_exists('notification')){
		function notification($message,$type="success"){
			$_SESSION['message']=$message;
			$_SESSION['type']=$type;

		


		}
	}






?>