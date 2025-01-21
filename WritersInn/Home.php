<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type= "text/css" href="css/Home.css">
	<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<!-- ***********header part ss**************-->
<div class="bgimg">

<div class="container text-center text-white headerset">
		<h1> Quality Content At Scale </h1>
		<h2> Access content writing services from a network of specialized, professional writers. </h2>
		 <?php
            if(!isset($_SESSION['login_user'])){?><a href="Register.php">
		<button class="btn btn-info text-white btn-lg"> Sign Up For Free </button>
		</a>
		<?php
            } ?>
</div>

</div>

<!-- ***********header part ends**************-->

<!-- ***********3 extra header part starts**************-->
<section class="header-extradiv">
	<div class= "container headings text-center">
	<h1> Whatever industry you’re in, we have expert writers to engage your audience!</h1>
		<div class="row">
			<div class="extra-div col-lg-4 col-md-4 col-12">
				<a href="#"> <i class="fa-3x fa fa-id-card-o" aria-hidden="true"></i> </a>
				<h2> AGENCIES </h2>
				<p>We partner with agencies to support the content and copywriting needs of their clients.</p>
			</div>
			<div class="extra-div col-lg-4 col-md-4 col-12">
				<a href="#"> <i class="fa-3x fa fa-shopping-cart" aria-hidden="true"></i> </a>
				<h2> ECOMMERCE </h2>
				<p>We write product descriptions, web pages, and category pages with an emphasis on SEO.</p>
			</div>
			<div class="extra-div col-lg-4 col-md-4 col-12">
				<a href="#"> <i class="fa-3x  fa fa-globe" aria-hidden="true"></i> </a>
				<h2> BRANDS </h2>
				<p>We develop your voice and tone and write custom content for your brands, big and small.</p>
			</div>			
		</div>
	</div>
</section>

<!-- ***********3 extra header part ends**************-->

<!-- ***********Why choose us part starts**************-->

<section class="whychooseus bg-light">
	<div class= "container headings text-center">
	<h1> WHY CHOOSE US?</h1>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto">
			<div class="card">
			<div class="stripe-new-lg stripe-new-orange">
			</div>
			<div class="card-body">
			<h2 class="card-title">GET CONTENT QUICKLY </h2>
			<p class="card-text"> There is always a suitable author among the many creative members on our platform. Cumbersome author searches and missed deadlines for your content projects are things of the past. </p>
			</div>
			</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto">
			<div class="card">
			<div class="stripe-new-lg stripe-new-orange">
			</div>
			<div class="card-body">
			<h2 class="card-title">GET CONTENT FOR EVERY TOPIC </h2>
			<p class="card-text"> Our authors have expertise in a wide variety of fields. Whether it’s travel, health or cryptocurrencies, WritersInn can provide any type of content. Our authors are experience in every subject.</p>
			</div>
			</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto">
			<div class="card">
			<div class="stripe-new-lg stripe-new-orange">
			</div>
			<div class="card-body">
			<h2 class="card-title">CONTROL ALL COSTS </h2>
			<p class="card-text"> There is no monthly fee at WritersInn. You determine the quality and length of your article and only pay for what you order. We save your money and allow you to concentrate fully on your most important tasks. </p>
			</div>
			</div>
			</div>			
		</div>
		
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto">
			<div class="card">
			<div class="stripe-new-lg stripe-new-orange">
			</div>
			<div class="card-body">
			<h2 class="card-title">BULK ORDER CONTENT </h2>
			<p class="card-text"> The WritersInn platform provides you with fast, easy and scalable contents world-wide. Manage your contents stand out with our expert writers. You can have bulk contents in cheaper rates.</p>
			</div>
			</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto">
			<div class="card">
			<div class="stripe-new-lg stripe-new-orange">
			</div>
			<div class="card-body">
			<h2 class="card-title">BOOST YOUR SEO CONTENTS </h2>
			<p class="card-text"> Easily order contents with your target keywords. You can also rely on our plagiarism check. Tools like these will provide you with unique and optimized content that search engines reward with better rankings.</p>
			</div>
			</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto">
			<div class="card">
			<div class="stripe-new-lg stripe-new-orange">
			</div>
			<div class="card-body">
			<h2 class="card-title">DO AWAY WITH HASSLE </h2>
			<p class="card-text"> Your entire content order is processed via our easy-to-use platform – from your author briefing to the export into your content management system. You don’t have to write an invoice for every single author anymore!</p>
			</div>
			</div>
			</div>			
		</div>
	</div>
</section>

<!-- ***********Why choose us part ends**************-->

<!-- ***********Features Part Starts**************-->
<section class="features">
<div class= "container headings text-center">
	<h1> CONTENTS YOU CAN TRUST</h1>
		<div class="row">
			<div class="features-div col-lg-2 col-md-2 col-12">
				<a href="#"> <i class="fa-2x fa fa-star text-white" aria-hidden="true"></i> </a>
				<h2> Professional Writers </h2>
			</div>	
			<div class="features-div col-lg-2 col-md-2 col-12">
				<a href="#"> <i class="fa-2x fa fa-trophy text-white" aria-hidden="true"></i> </a>
				<h2> 100% original content </h2>
			</div>
			<div class="features-div col-lg-2 col-md-2 col-12">
				<a href="#"> <i class="fa-2x fa fa-users text-white" aria-hidden="true"></i> </a>
				<h2> 100% client satistfaction </h2>
			</div>
			<div class="features-div col-lg-2 col-md-2 col-12">
				<a href="#"> <i class="fa-2x fa fa-pencil-square-o text-white" aria-hidden="true"></i></a>
				<h2> Editing and proofreading</h2>
			</div>	
			<div class="features-div col-lg-2 col-md-2 col-12">
				<a href="#"> <i class="fa-2x fa fa-lightbulb-o text-white" aria-hidden="true"></i> </a>
				<h2> Topic pitching and ideation </h2>
			</div>
			<div class="features-div col-lg-2 col-md-2 col-12">
				<a href="#"> <i class="fa-2x fa fa-file-text-o text-white" aria-hidden="true"></i> </a>
				<h2> Revision Included </h2>
			</div>

			
		</div>
	</div>
</section>
<!-- ***********Features Part ends**************-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
	
</html>