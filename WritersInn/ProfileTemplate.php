<?php
include ('SQLConnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Profile.css">
    <title></title>
</head>
<body>

            <div class="col-md-8 mt-1">
                <div class="card mb-3 content">
				
				<?php
 				$query=mysqli_query($link,"SELECT * FROM userinfo where UserEmail='$_SESSION[login_useremail]' ;");
 			?>
                <h1 class="m-3 pt-3" style="text-align: center;padding-right: 5%;">Profile</h1>
				
				<?php
 				$row=mysqli_fetch_assoc($query);
				?>
                <div class="card-body">
                <div class="row">
                <div class="col-md-3">
                <h5>Name</h5>
                </div>
                <div class="col-md-9 text-secondary">
                <?php echo $row['UserName']; ?>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-3">
                <h5>Email</h5>
                </div>
                 <div class="col-md-9 text-secondary">
                <?php echo $row['UserEmail']; ?>
                </div>
                </div>
                <hr>
				<div class="col-sm-9 text-center">
                <div class="form-row mt-3 pt-4 font-size-16 font-baloo">
                <div class="col">
				<a href="EditProfile.php">
                <button class="btn btn-info form-control">Edit Profile</button>
				</a>
                </div>
                <div class="col">
				<a href="ViewOrder.php">
                <button class="btn btn-info form-control">My Orders</button>
				</a>
                </div>
                </div>
                </div>
				</div>
                </div>
				
			    </div>
				</body>
				</html>