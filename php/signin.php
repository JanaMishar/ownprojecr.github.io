

<?php

	session_start();
	 
    include '../../stock/php/global.php'; 

	
	include 'connection.php';
	

	if(isset($_POST['submit'])){

		$email=$_POST['email'];
		$password=$_POST['password'];

		$query="select * from user where email ='$email'";

		$processquery=mysqli_query($con,$query);

		$fetchdata=mysqli_fetch_assoc($processquery);

		$dbpass=$fetchdata['password'];

		$utype=$fetchdata['utype'];

		$name=$fetchdata['name'];



		$_SESSION['name']=$name;

		$dbemail=$fetchdata['email'];

		$_SESSION['email']=$dbemail;

		// $checkpass=password_verify($password, $dbpass);
		$checkpass=md5($password);

		echo $password;
		echo $checkpass;
		

		if(($checkpass==$dbpass) && ($utype=='admin')){
			header("location:".admin);

			
		

	}elseif(($checkpass==$dbpass) && ($utype=='user')){
			header('location:'.user);
		}else{
			
			echo 'user not registered';
		}


	}


?>