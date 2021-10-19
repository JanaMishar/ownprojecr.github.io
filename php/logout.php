
<?php
include '../../stock/php/global.php';
	session_start();

	session_destroy();

	// setcookie('logedinadmin','',time()-3600);
	// setcookie('logedinuser','',time()-3600);

	header("location:".plogin);
?>