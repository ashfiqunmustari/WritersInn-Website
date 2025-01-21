<!DOCTYPE html>
<html>
<head>
	<title> Team </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type= "text/css" href="css/TeamPage.css">
	<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="header">
        <div class="bgimg">
            
            <div class="row">
                <div class="col">
                    <h1>Our Team </h1>
                  <!-- <p>We work with exceptional people who do extraordinary things.</p>--> 
                  

                </div>
                </div>
            </div>
    </div>

    <div class="infos">
        <div class="box">
        <h1>
            WritersInn puts quality written content at the heart of your company's growth strategy.
        </h1>
        <p>
            Our mission is to connect businesses with diverse audiences through powerful content crafted by specialized writers, managed by a team that puts people first.
        </p>

        <div class="policies">
            <img src="https://contentwriters.com/static/global/img/blob.svg" alt="" style="width: 10%; margin-left: 45%; margin-right: 45%;">
            <h1>
                Our Values
            </h1>
            <div class="container" data-text= "We work with steadfast transparency, integrity, and respect.">
                <div class="pic" style="padding: 1rem;">
                    <img src="	https://contentwriters.com/static/global/img/icon-people.svg" alt="" style="width: 60px; height: 60px;" >
                </div>
                <div class="tittle" style="padding: 1rem;">
                    <h2>People First</h2>
                </div>
                </div>
            
                    <div class="container2">
                        <div class="box-1" data-text= "We champion a culture of growth, support, and development for our clients, writers, and one another.">
                            <div class="pic" style="padding: 1rem;">
                                <img src="https://contentwriters.com/static/global/img/icon-cultivation.svg" alt="" style="width: 60px; height: 60px;" >
                            </div>
                            <div class="tittle" style="padding: 1rem;">
                                <h2>Cultivation</h2>
                            </div>
                        </div>
                        
                    <div class="box-1"  data-text= "
                    We take pride in the work we do, the people we work with, and the way we get sh*t done.">
                        <div class="pic" style="padding: 1rem;">
                            <img src="https://contentwriters.com/static/global/img/icon-passion.svg" alt="" style="width: 60px; height: 60px;" >
                        </div>
                        <div class="tittle" style="padding: 1rem;">
                            <h2>Passion</h2>
                        </div>
                    </div>
                    <div class="box-1"  data-text= "
                    We provide dynamic solutions that simplify and scale workflows.">
                        <div class="pic" style="padding: 1rem;">
                            <img src="https://contentwriters.com/static/global/img/icon-efficiency.svg" alt="" style="width: 60px; height: 60px;" >
                        </div>
                        <div class="tittle" style="padding: 1rem;">
                            <h2>Efficienty</h2>
                        </div>
                    </div>
                    <div class="box-1"  data-text= "
                    We never settle — Our idea of what’s possible is always evolving.">
                        <div class="pic" style="padding: 1rem;">
                            <img src="https://contentwriters.com/static/global/img/icon-commitment.svg" alt="" style="width: 60px; height: 60px;" >
                        </div>
                        <div class="tittle" style="padding: 1rem;">
                            <h2>Commitment</h2>
                        </div>
                    </div>
                </div>
                
            </div>
    </div>

    </div>
    </div>


<div class="catagory">
    <h1>Meet Our Company</h1>
    <p>You deserve the best service</p>
    <div class="catagory-container">
	
	<?php  
                $query = "SELECT * FROM teaminfo";  
                $result = mysqli_query($link, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>
        <div class="catagory-box1">
           <h1> <?php echo '<img src="data:image;base64,'.base64_encode($row['MemberImage']).'"alt="Image" style="width:100px; height:100px;">'; ?> </h1>
            <h2><?php echo $row["MemberName"]; ?></h2>
            <p><?php echo $row["MemberBio"]; ?></p>

        </div>
<?php  
                     }  
                }  
                ?>
    </div>
</div>
<div class="box-1">
    <a href="Contact.php">Get In Touch</a>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
	
</html>