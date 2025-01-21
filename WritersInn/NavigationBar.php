<?php
session_start();
include ('SQLConnection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title> WritersInn </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type= "text/css" href="css/Navigationbar.css">
	<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div>
<nav class="navbar navbar-expand-md navbar-dark ">

	<div class="container p-2">
  <a class="navbar-brand text-white" href=""><img src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>
<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
<?php
            if(isset($_SESSION['login_user']))
            {?>
  
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="Index.php">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Service.php">SERVICES</a>
      </li>
	    
	  <li class="nav-item">
        <a class="nav-link" href="AboutUs.php">ABOUT</a>
      </li>  

      <li class="nav-item">
        <a class="nav-link" href="Contact.php">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Profile.php">PROFILE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Order.php">ORDER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Logout.php">LOGOUT</a>
      </li>	  

    </ul>
<?php
            }
            else
            {   ?>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="Index.php">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Service.php">SERVICES</a>
      </li>
	    
	  <li class="nav-item">
        <a class="nav-link" href="AboutUs.php">ABOUT</a>
      </li>  

      <li class="nav-item">
        <a class="nav-link" href="Contact.php">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Login.php">LOGIN</a>
      </li>	  

    </ul>

	<?php
            }
          ?>
		    </div>
  </div>
</nav>
</div>

<!-- ***********navigation part ends**************-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
	
</html>