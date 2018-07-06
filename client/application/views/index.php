<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/"?>css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/"?>css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/"?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"?>style.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"?>css/responsive.css">

    
  </head>



  <body>

    
    <!-- header -->

    <!-- ISI HEADER -->
    <?php include "header.php" ?>
    <!-- End Header -->



    
    <div class="slider-area">
        	<!-- Slider -->
			     <!-- ISI SLIDE -->
            <?php include "slider.php"  ?>
			<!-- ./Slider -->
    </div> 
    <!-- End slider area -->




   
    <!-- Content area -->

    <!-- ISI KONTEN -->
    <?php include "isi.php"  ?>

     <!-- End main content area -->
    
    
    
    
    
    <!-- End footer top area -->
    
    <!-- ISI FOOTER -->
    <?php include "footer.php" ?>

    <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="<?php echo base_url()."assets/"?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()."assets/"?>js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="<?php echo base_url()."assets/"?>js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="<?php echo base_url()."assets/"?>js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="<?php echo base_url()."assets/"?>js/bxslider.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/"?>js/script.slider.js"></script>
  </body>
</html>