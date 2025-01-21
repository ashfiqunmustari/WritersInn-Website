<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/More_Services.css">
</head>
<body>

    <div class="header">
        <div class="bgimg">

        </div>
    </div>
    <div class="policies">
        <div class="policy-container">
			<h1> Access content writing services from a network of specialized, professional writers. <Br> <Br> <Br></h1>
            
			<?php  
                $query = "SELECT * FROM allserviceinfo";  
                $result = mysqli_query($link, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>
				<div class="policy-box">
                    
                    <h5>
                        <?php echo $row["AllServiceName"]; ?>
                    </h5>
					<h4> Starts From <Br> <?php echo $row["AllServicePrice"]; ?> </h4>
                    <p>
                        <?php echo $row["AllServiceFeature1"]; ?>
                    </p>
                    <P>
                        <?php echo $row["AllServiceFeature2"]; ?>
                    </P>
                    <P>
                        <?php echo $row["AllServiceFeature3"]; ?>
                    </P>
					<P>
                        <?php echo $row["AllServiceFeature4"]; ?>
                    </P>
                
            </div>
		
			<?php  
                     }  
                }  
                ?>
			
			
			
			
            
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>