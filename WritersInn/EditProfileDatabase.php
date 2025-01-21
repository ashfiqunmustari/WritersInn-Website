<?php
include ('SQLConnection.php');
?>


<?php
			$Name1=$_POST['user_name'];
			$password1=$_POST['password'];
			$email1=$_POST['email_address'];
			$query="UPDATE userinfo SET UserName='$Name1', UserEmail='$email1', UserPassword='$password1'  WHERE UserEmail='$email1';";
			$resultInsert = mysqli_query ($link, $query ) or die (mysqli_error($link));	
			header("location:Profile.php");

?>