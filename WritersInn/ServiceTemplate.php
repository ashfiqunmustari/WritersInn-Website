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
    <link rel="stylesheet" href="css/Services.css">
    <title>Services</title>
</head>
<body>

    <div class="header">
		
		 <div class="bgimg">

    </div>
	    </div>
	
	
	<section class="header-extradiv">
	<div class= "container headings text-center">
	<h1> Access content writing services from a network of specialized, professional writers. <Br> <Br> <Br></h1>
		<div class="row">
		
		<?php  
                $query = "SELECT * FROM serviceinfo";  
                $result = mysqli_query($link, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?> <div class="extra-div col-lg-4 col-md-4 col-12">
				<h1> <?php echo $row["ServiceName"]; ?> </h1>
				<h4> <?php echo "Starts From ".$row["ServicePrice"]; ?> </h4>
                <p>
                    <?php echo $row["Feature1"]; ?>
                </p>
                <P>
                    <?php echo $row["Feature2"]; ?>
                </P>
                <P>
                    <?php echo $row["Feature3"]; ?>
                </P>
			</div> 
		
			<?php  
                     }  
                }  
                ?>
			
		</div>
	</div>
</section>



    <div class="box-1">
       <?php
            if(isset($_SESSION['login_user'])){?>
        <a href= " AllService.php">Click here to see more exclusive services</a>	<?php
            }
            else
            {   ?>
		<a href= " Login.php">Click here to see more exclusive services</a>	<?php
            } ?>
		
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>