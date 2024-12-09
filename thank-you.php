<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Thank You</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

   <!-- Header Wrapper Start -->
   <div class="py-5 header__wrapper text-center">
        <div class="container">
            <h1 class="text-primary">Thank You</h1>
        </div><!--.//container-->
    </div>
    <!-- Header Wrapper End -->
    

    <!-- Content Wrapper Start -->
    <div class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <img src="assets/images/icons/check.webp" width="200" height="180" class="img-fluid" loading="lazy" alt="check icon">
            </div>
            <p class="h4 fw-medium ff-second text-center">Your message has been received. <br> We will contact you shortly.</p>
            <p class="lead fw-medium ff-second text-center">You can call us at: <a href="tel:+919967571875">+91 99675 71875</a></p>
        </div><!--.//container-->
    </div>
    <!-- Content Wrapper End -->

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>