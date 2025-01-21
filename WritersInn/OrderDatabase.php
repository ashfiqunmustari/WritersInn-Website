<?php
include ('SQLConnection.php');
?>


<?php
			$name=$_POST['user_name'];
			$email=$_POST['email_address'];
			$Content=$_POST['ContentType'];
			$wordcount=$_POST['wordCount'];
			$orderDetails=$_POST['ContentDetails'];
			date_default_timezone_set ('Asia/Dhaka');
			$currentTime = date('Y-m-d H:i:s');
			
			echo $Content;
	
$sqlInsert = "INSERT INTO orderinfo (Name, Email,ContentType, WordCount, OrderDetails, OrderStatus, OrderTime ) VALUES ('$name','$email','$Content','$wordcount','$orderDetails',2,'$currentTime')";
$resultInsert = mysqli_query ($link, $sqlInsert ) or die (mysqli_error($link));	
header("location:ViewOrder.php");

?>