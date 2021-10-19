<?php
	session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;

	require 'vendor/autoload.php';
	
	include '../../stock/php/global.php';
	include '../../stock/php/connection.php';

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$utype=$_POST['utype'];
		if($utype==""){
						$utype='user';
					}
		// $password=$_POST['password'];
		
		$password=rand(100,900);

		

		$selectquery="select * from user where email='$email'";

		$processselectquery=mysqli_query($con,$selectquery);

		$countmail=mysqli_num_rows($processselectquery);

		$fdata=mysqli_fetch_assoc($processselectquery);

		
		

		// $hashpass=password_hash($password, PASSWORD_BCRYPT);

		$hashpass=md5($password);

		if($countmail>0){

			header('location:'.plogin);

		}else{

			function valid_email($str) {
					return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
					}
			if(!valid_email($email)){


				

header('location:'.ind);

				}else{


				$query="insert into user(name,email,utype,password) values('$name','$email','$utype','$hashpass')";
		$processquery=mysqli_query($con,$query);

		if($processquery){
			
	
	//path where the php mailer installed
	
	
	
	//mail configuration
	

	$mail =new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth=True;
	$mail->Host='smtp.gmail.com';
	$mail->Port='587';
	
	//sender and reciver details
	
	$mail->setFrom('admon3472@gmail.com', 'Admin');
	$mail->Username='admon3472@gmail.com';
	$mail->Password='mjmafia1122';
	$mail->addAddress($email , 'Mishar Jana');
	
	//containt
	
	$mail->isHTML(true);
	$mail->Subject='welcome to web world';
	$mail->Body= $name . 'Thank you for your Registration <br> your password is :' .$password;
	// header('location:plogin');
	if(!$mail->send()){
		echo 'message not send';
	}else{
		?>
			<script>
				alert('mail has send to your mail id');
			</script>
		<?php
	}




			header('location:../../stock/html/plogin');
		}
	}
}
				}


/*		$query="insert into user(name,email,utype,password) values('$name','$email','$utype','$hashpass')";
		$processquery=mysqli_query($con,$query);

		if($processquery){
			
	
	//path where the php mailer installed
	
	
	
	//mail configuration
	

	$mail =new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth=True;
	$mail->Host='smtp.gmail.com';
	$mail->Port='587';
	
	//sender and reciver details
	
	$mail->setFrom('admon3472@gmail.com', 'Admin');
	$mail->Username='admon3472@gmail.com';
	$mail->Password='mjmafia1122';
	$mail->addAddress($email , 'Mishar Jana');
	
	//containt
	
	$mail->isHTML(true);
	$mail->Subject='welcome to web world';
	$mail->Body= $name . 'Thank you for your Registration <br> your password is :' .$password;
	// header('location:plogin');
	if(!$mail->send()){
		echo 'message not send';
	}else{
		?>
			<script>
				alert('mail has send to your mail id');
			</script>
		<?php
	}




			header('location:../../stock/html/plogin');
		}
	}
}*/

?>




