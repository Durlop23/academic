<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>About Us</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <main>
        <!-- Header Wrapper Start -->
        <div class="py-5 header__wrapper text-center">
            <div class="container">
                <h1 class="text-primary"><span class="text-dark">About</span> Us</h1>
            </div><!--.//container-->
        </div>
        <!-- Header Wrapper End -->
    
        <!-- About Company Wrapper Start -->
        <section class="py-5" style="background-color: #F8F8F8;">
            <div class="container">
                <div class="row g-4 gx-xl-5">
                    <div class="col-lg-8"> 
                        <h2 class="h2"><span class="text-primary">About</span> Company</h2>
                        <p>
                            Founded in 2010, Insys started as an Infrastructure Automation Solutions provider catering to Smart Cities,
                            Connected Buildings. It has now expanded its offering to Oil, Gas & Sustainability domains specializing in Industrial
                            Automation, Custody Transfer Solutions & Emission Monitoring Solutions. 
                        </p> 
                        <p>
                            Insys presently caters to Oil & Gas, Refinery, LNG, Fertilizer, Chemicals, Power, Water & Wastewater, Biogas and Green Hydrogen industries in India & Bangladesh region.
                        </p>
                        <p>
                            Technical Expertise is the main capital investment for Insys. Our team has over 50+yrs experience in Industrial
                            Automation Sector and over 25+yrs experience in Custody Transfer Solutions across India & Bangladesh region. We
                            are currently operating in 12 states & 56 cities in India.
                        </p>
                        <p>
                            Insys works very closely with all of the End clients, Engineering Consultants and EPC contractors with a proactive approach and one stop solutions for their various needs.
                        </p>
                    </div><!--.//col-->
                    <div class="col-lg-4">
                        <div class="row row-cols-1 g-3">
                            <div>
                                <div class="shadow-md border rounded p-3 fw-semibold bg-white fs-4">
                                    10+ Brands
                                </div> 
                            </div>
                            <div> 
                                <div class="shadow-md border rounded p-3 fw-semibold bg-white fs-4"> 
                                    25+ Solutions
                                </div>
                            </div>
                            <div> 
                                <div class="shadow-md border rounded p-3 fw-semibold bg-white fs-4"> 
                                    30+ Products
                                </div>
                            </div>
                            <div> 
                                <div class="shadow-md border rounded p-3 fw-semibold bg-white fs-4"> 
                                    50+ Cities
                                </div>
                            </div> 
                        </div>
                    </div>
                </div><!--.//row-->
            </div><!--.//container-->
        </section>
        <!-- About Company Wrapper End -->

        
        
    </main>
    <!-- Testimonial Wrapper Start --> 
    <?php include_once('includes/testimonial-section.inc.php'); ?>
    <!-- Testimonial Wrapper End -->


    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>
 