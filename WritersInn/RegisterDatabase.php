<?php
include ('SQLConnection.php');
?>


<?php
$UserName= $_POST['user_name'];
$Email= $_POST['email_address'];
$Password= $_POST['password'];
date_default_timezone_set ('Asia/Dhaka');
$currentTime = date('Y-m-d H:i:s');

$Availibility= "select * from userinfo where UserEmail='$Email'";
$CheckAvailibility= mysqli_query($link,$Availibility);
$result= mysqli_num_rows($CheckAvailibility);

if($result==1){
	echo "You already have an account. Proceed to Log In";
	//header("location:Login.php");
}
else{
	
$sqlInsert = "INSERT INTO userinfo (userName , UserEmail , Userpassword, Status,
dateCreated ) VALUES ('$UserName','$Email','$Password',2,'$currentTime')";
$resultInsert = mysqli_query ($link, $sqlInsert ) or die (mysqli_error($link));

header("location:Login.php");
}
?>