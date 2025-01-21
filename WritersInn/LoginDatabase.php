<?php
include ('SQLConnection.php');
session_start();
?>


<?php
$Email= $_POST['email-address'];
$Password= $_POST['password'];

$Availibility= "select * from userinfo where UserEmail='$Email' ";
$CheckAvailibility= mysqli_query($link,$Availibility);
$result= mysqli_num_rows($CheckAvailibility);
$msg="";

if($result)
{
	while($row=mysqli_fetch_assoc($CheckAvailibility)){
		//echo"<pre>";
		//print_r($row);
		if($Password==$row['UserPassword'] && $row['Status']==1){
			echo "Login Successful";
			$userData= array(
			"id"=> $row['UserID'],
			"name"=> $row['UserName']
			);
			$_SESSION['login_user']=$userData;
			$_SESSION['login_useremail']=$Email;
			header("Location:index.php");
		}
		else if ($Password==$row['UserPassword'] && $row['Status']!=1){
			if($row['Status']==0){
				echo "Account Disabled. Contact with Admin!";
			}
			if($row['Status']==2){
				echo "Account Verification Pending. Check Later";
			}
		}
		else if($Password!=$row['UserPassword']){
		echo "Wrong Password! Try Again";
		}
	}

}
?>