<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Contact Us</title>
 
    <!-- All Stylesheets -->
    <?php include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php include_once('includes/header.inc.php'); ?> 

    <main>
        <!-- Header Wrapper Start -->
        <div class="py-5 header__wrapper text-center">
            <div class="container">
                <h1 class="text-primary"><span class="text-dark">Contact</span> Us</h1>
            </div><!--.//container-->
        </div>
        <!-- Header Wrapper End -->
    
        <!-- Contact Wrapper Start -->  
    <section class="py-5 contact__wrapper">
        <div class="container py-md-5">
            <h2 class="h2">Send Us A Message</h2>
            <form action="submit-contact-form.php" method="POST" id="contactQuoteModalForm" class="form__wrapp row gy-3 gx-4 mt-3 ">
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="fName">First Name <span class="text-danger">*</span></label>
                        <input type="text" name="fName" id="fName" class="form-control"> 
                        <small class="text-danger error" id="fName_error"></small>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="lName">Last Name <span class="text-danger">*</span></label>
                        <input type="text" name="lName" id="lName" class="form-control"> 
                        <small class="text-danger error" id="lName_error"></small>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="currentlyBased">Where are you currently based? <span class="text-danger">*</span></label>
                        <input type="text" name="currentlyBased" id="currentlyBased" class="form-control"> 
                        <small class="text-danger error" id="currentlyBased_error"></small>
                    </div>
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="userEmail">Email <span class="text-danger">*</span></label>
                        <input type="text" name="userEmail" id="userEmail" class="form-control"> 
                        <small class="text-danger error" id="userEmail_error"></small>
                    </div>
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="contactNumber">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" name="contactNumber" id="contactNumber" class="form-control"> 
                        <small class="text-danger error" id="contactNumber_error"></small>
                    </div>
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="address">Address <span class="text-danger">*</span></label>
                        <input type="text" name="address" id="address" class="form-control"> 
                        <small class="text-danger error" id="address_error"></small>
                    </div>
                </div><!--.//col-->
                <div class="col-12"> 
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="userMessage">Message <span class="text-danger">*</span></label>
                        <textarea type="text" name="userMessage" id="userMessage" class="form-control"></textarea> 
                    </div>
                </div> 
                <div class="col-12"> 
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary height btn-lg px-4 px-md-5 mt-4">Submit</button> 
                    </div>
                </div>
            </form> 
        </div><!--.//container-->
    </section>
    <!-- Contact Wrapper End -->

       
    </main>


    <!-- Footer and Script List --> 
    <?php include_once('includes/footer.inc.php'); ?> 
 
    <script>  
        $("#contactQuoteModalForm").submit(function() {
            if (validateContactForm()) {
                return true;
            }
            else {
                return false;
            }
        }); 

        function validateContactForm() {
            var valid = true;	
            $(".form-control").css('border-color','');
            $(".aerror").html('');
                
          
            if(!$("#fName").val()) {
                $("#fName_error").html("First name required");
                $("#fName").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#fName_error").html("");
                $("#fName").css('border-color','#099f1a');
            } 

            if(!$("#lName").val()) {
                $("#lName_error").html("Last name required");
                $("#lName").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#lName_error").html("");
                $("#lName").css('border-color','#099f1a');
            } 

            if(!$("#currentlyBased").val()) {
                $("#currentlyBased_error").html("Currently based required");
                $("#currentlyBased").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#currentlyBased_error").html("");
                $("#currentlyBased").css('border-color','#099f1a');
            } 

            var phno = $.trim($('#contactNumber').val());
            var che_phno = /^[0-9]{7,15}$/;
            if(!$("#contactNumber").val()) {
                $("#contactNumber_error").html("Phone number required");
                $("#contactNumber").css('border-color','#dc3545');
                valid = false;
            } if (!che_phno.test(phno)) {
                $("#contactNumber").css('border-color','#dc3545');
                $("#contactNumber_error").html('Please enter valid phone no'); 
                valid = false;
            } else if (phno.length < 7 || phno.length > 15) {
                $("#contactNumber").css('border-color','#dc3545');
                $("#contactNumber_error").html('Phone no. must be greater than or equals to 10 and less than or equals to 15 digits!!');
                // $("#dash_phone_error").css("color", "#FC0000"); 
                valid = false;
            } else {
                $("#contactNumber_error").html("");
                $("#contactNumber").css('border-color','#099f1a');
            } 
            //  
            if(!$("#userEmail").val()) {
                $("#userEmail_error").html("Email is required");
                $("#userEmail").css('border-color','#dc3545');
                valid = false;
            } else if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#userEmail_error").html("Invalid email");
                $("#userEmail").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#userEmail_error").html("");
                $("#userEmail").css('border-color','#099f1a');
            }  
            
            if(!$("#address").val()) {
                $("#address_error").html("Address required");
                $("#address").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#address_error").html("");
                $("#address").css('border-color','#099f1a');
            } 

            return valid;
        } 
    </script>
</body>
</html>
 