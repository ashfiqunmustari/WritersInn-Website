<!DOCTYPE html>
<html>
<head>
	<title> Log In </title>
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
		<h1> LOG IN </h1>
</div>

</div>
    <!--start mains-site-->
    <main id=main-site>

        <section id="login">
            <hr class="mb-5">
            <!--logIn-->
            <div class="cotainer font-size-20 font-rubik text-center pb-2">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card shadow  mb-5 bg-white rounded">
                            <div class="card-header color-ash-bg">Log-In <i class="fa fa-user" aria-hidden="true"></i></div>
                            <div class="card-body">
                                <form action="LoginDatabase.php" method="POST">

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail <i class="fa fa-envelope" aria-hidden="true"></i></label>
                                        <div class="col-md-6">
                                            <input type="email" id="email_address" class="form-control" name="email-address" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password <i class="fa fa-unlock-alt" aria-hidden="true"></i></label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" name="password" required>
                                        </div>
                                    </div>



                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Log-In
                                        </button>
                                        <a href="Register.php" class="btn btn-link font-size-14 pt-2">
                                            Don't Have an Account?
                                            <br>
                                            Sign Up Now
                                        </a>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--!logIn-->
            <hr class="mb-5">
        </section>


    </main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
	
</html>