<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Carousel</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">

.item{
    
    text-align: center;
    height: 600px !important;
}
.carousel{
    margin-top: 20px;
}
.bs-example{
	margin: 20px;
}
.carousel-control.left, .carousel-control.right {
    background-image: none
}
</style>
</head>
<body>
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="30000" data-ride="carousel">
    	
       <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                	<?php include 'inside.php';?>		

            </div>
            <div class="item">
                <?php include 'inside.php';?>	
            </div>
            <div class="item">
                <?php include 'inside.php';?>	
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="black glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="black glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>

	<?php include 'alt.php';?>


</body>
</html>                                		