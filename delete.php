<?php 
 require_once"bootstrap.php";

if(!is_login()){
    redirect('login');
}


$id=$_GET['id'];

if($_SESSION['id']==$id){
	redirect('dashboard');
}


$query="DELETE FROM users where id=$id";

$stmt=$connect->query($query);

$stmt->execute();
redirect('list');

?>