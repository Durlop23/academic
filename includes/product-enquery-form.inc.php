<div class="modal fade" id="productQuoteModal" tabindex="-1" aria-labelledby="productQuoteModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:680px">
        <div class="modal-content">
            <div class="modal-header p-4 border-0">
                <p class="modal-title text-dark fs-5 fw-semibold" id="productQuoteModalLabel">Request A Quote</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="<?php echo $base_url;?>submit-product-enquery-form.php" method="POST" id="productQuoteModalForm" class="row g-3 g-md-4"> 

                    <div class="col-md-6"> 
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter full name">
                        <div class="small text-danger aerror" id="name_error"></div>
                    </div>
                    <div class="col-md-6"> 
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter email address">
                        <div class="small text-danger aerror" id="email_error"></div>
                    </div>
                    <div class="col-md-6"> 
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone number">
                        <div class="small text-danger aerror" id="phone_error"></div>
                    </div>
                    <div class="col-md-6"> 
                        <input type="text" name="product_name" id="product_name" class="form-control" readonly> 
                    </div>
                    <div class="col-12"> 
                        <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Enter your message"></textarea>
                    </div>

                    <div class="mt-4 text-end"> 
                        <button type="submit" class="btn btn-outline-dark height">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script> 

    (function ($) {
        $(".productQuoteBtn").on('click', function(){
            var pro_name = $(this).val();
            $("#productQuoteModal").modal('show');
            $("#product_name").val(pro_name);
        });
        
    })(jQuery);

 


    $("#productQuoteModalForm").submit(function() {
        if (validateHomeAppointmentForm()) {
            return true;
        }
        else {
            return false;
        }
    }); 

    function validateHomeAppointmentForm() {
        var valid = true;	
        $(".form-control").css('border-color','');
        $(".aerror").html('');
            
        // User name validation
        if(!$("#name").val()) {
            $("#name_error").html("Name required");
            $("#name").css('border-color','#dc3545');
            valid = false;
        } else {
            $("#name_error").html("");
            $("#name").css('border-color','#099f1a');
        } 

        var phno = $.trim($('#phone').val());
        var che_phno = /^[0-9]{7,15}$/;
        if(!$("#phone").val()) {
            $("#phone_error").html("Phone number required");
            $("#phone").css('border-color','#dc3545');
            valid = false;
        } if (!che_phno.test(phno)) {
            $("#phone").css('border-color','#dc3545');
            $("#phone_error").html('Please enter valid phone no'); 
            valid = false;
        } else if (phno.length < 7 || phno.length > 15) {
            $("#phone").css('border-color','#dc3545');
            $("#phone_error").html('Phone no. must be greater than or equals to 10 and less than or equals to 15 digits!!');
            // $("#dash_phone_error").css("color", "#FC0000"); 
            valid = false;
        } else {
            $("#phone_error").html("");
            $("#phone").css('border-color','#099f1a');
        } 
        //  
        if(!$("#email").val()) {
            $("#email_error").html("Email is required");
            $("#email").css('border-color','#dc3545');
            valid = false;
        } else if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#email_error").html("Invalid email");
            $("#email").css('border-color','#dc3545');
            valid = false;
        } else {
            $("#email_error").html("");
            $("#email").css('border-color','#099f1a');
        }  

        return valid;
    }
    // Modal Quick Enquery Form Set Blank When Modal Is Close
    var enquirModal = document.getElementById("productQuoteModalForm");
    enquirModal.addEventListener('hidden.bs.modal', function (e) {
        $("#name, #mcountry, #email, #phone").val('');
        $("#name, #mcountry, #email, #phone").css('border-color', '#ced4da');
        $("#name_error, #mcountry_error, #email_error, #phone_error").html('');
    });
</script>