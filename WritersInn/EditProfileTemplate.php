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

		while ($row = mysqli_fetch_assoc($query)) 
		{
			$Name1=$row['UserName'];
			$password1=$row['UserPassword'];
			$email1=$row['UserEmail'];
		}

	?>
                <h1 class="m-3 pt-3" style="text-align: center;padding-right: 5%;">Profile</h1>
				
                <div class="card-body">
									<form action="EditProfileDatabase.php" method="POST">
                                    <div class="form-group row">
                                        <label for="first_name" class="col-md-4 col-form-label text-md-right font-size-18">User Name</label>
                                        <div class="col-md-6">
                                            <input type="text" id="user_name" class="form-control" name="user_name" value="<?php echo $Name1; ?>" required autofocus>
                                        </div>
                                    </div>
									<hr>
									<div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right font-size-18">Email Address</label>
                                        <div class="col-md-6">
                                            <input type="email" id="email_address" class="form-control" readonly value="<?php echo $email1; ?>  "name="email_address" required autofocus>
                                        </div>
                                    </div>
									<hr>
									<div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right font-size-18">Change Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" value="<?php echo $password1; ?>" name="password" required>
                                        </div>
                                    </div>
									<hr>
									<div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="submit10">
                                            Update
                                        </button>

                                    </div>
									</form>

				</div>

                </div>
                </div>
				</body>
				</html>