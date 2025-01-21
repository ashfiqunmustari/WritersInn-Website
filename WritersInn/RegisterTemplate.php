<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type= "text/css" href="css/Login.css">
	<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="bgimg">
<div class="container text-center text-white headerset">
		<h1> Registration </h1>
</div>
</div>

<main id=main-site>

        <section id="regestration">

            <hr class="mb-5">
            <!--regestration div-->
            <div class="cotainer font-size-20 font-rubik text-center pb-2">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card shadow  mb-5 bg-white rounded">
                            <div class="card-header color-ash-bg">Registration <i class="fa fa-user" aria-hidden="true"></i></div>
                            <div class="card-body">
                                <form action="RegisterDatabase.php" method="POST">
                                    <div class="form-group row">
                                        <label for="first_name" class="col-md-4 col-form-label text-md-right font-size-18">Name</label>
                                        <div class="col-md-6">
                                            <input type="text" id="user_name" class="form-control" name="user_name" required autofocus>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right font-size-18">E-Mail</label>
                                        <div class="col-md-6">
                                            <input type="email" id="email_address" class="form-control" name="email_address" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right font-size-18">Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" name="password" required>
                                        </div>
                                    </div>


                                    <div class="col-md-6 offset-md-4">
									
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
										
                                        <a href="Login.php" class="btn btn-link  font-size-14">
                                            Already Have an Account? Log In
                                        </a>
                                    </div>
									
									
								
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <hr class="mb-5">
            <!--!regestration div-->
        </section>


    </main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
	
</html>