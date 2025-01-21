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
		 		            <div class="row">
                <div class="col">
                    <h1>ORDERS </h1>
                </div>
                </div>
    </div>
	</div>
 	

	
	<section class="header-extradiv">
	<div class= "container headings text-center">
		<div class="row">
				<?php  
                $query = "SELECT * FROM orderinfo where Email='$_SESSION[login_useremail]' ;";  
                $result = mysqli_query($link, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="extra-div col-md-12">  
                 <h1> <?php echo "Order ID: ".$row["OrderID"]; ?></h1>    
				<h1> <?php if($row["OrderStatus"]==2) 
								{echo "Pending Approval";}
							else if($row["OrderStatus"]==1) 
								{echo "Accepted";}
							else if($row["OrderStatus"]==0) 
								{echo "Rejected";}
				?> </h1>
				<h4> <?php echo "Content: ".$row["ContentType"]; ?></h4>
				<h4> <?php echo "Word Count: ".$row["WordCount"]; ?></h4>
                <p>
                    <?php echo $row["OrderDetails"]; ?>
                </p>

                      
                </div>  
                <?php  
                     }  
                }  
                ?> 
			
		</div>
	</div>
</section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>