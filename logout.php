<?php

 require_once"bootstrap.php";


 unset($_SESSION);
 session_destroy();
notification('Logout',"danger");
 redirect('login');



?>