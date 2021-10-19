<?php
session_start(); 
require_once("../../stock/php/connection.php");
// if(!empty($_POST["email"])) {
// 	$email= $_GET["email"];
	
// 		$result =mysqli_query($con,"select email from user where email='$email'");
// 		$count=mysqli_num_rows($result);



$email = $_POST['email'];

$checkEmail=mysqli_query($con, "select email from user where email='$email'");
$count=mysqli_num_rows($checkEmail);

if ($count>0) {
  $response = array('email'=>$email,'isvalid'=>false);


} else {
  $response = array('email'=>$email,'isvalid'=>true);
}

// header('Content-Type:application/json;');

echo (json_encode($response));

// $_SESSION['json']=$response;


// if($count>0)
// {
// // echo "<span style='color:red'> Email already exists .</span>";
// 	  // $response = true;

// 	echo json_encode($response); 
	  
 
// } else{
	
	// echo "<span style='color:green'> Email available for Registration .</span>";
	  // $response = true;
	 







?>
