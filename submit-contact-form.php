
<?php   
    // Mail Address Where email will be submit 
    $to = "sales@insysindia.com";  
    $email = "mailserver@embraceindia.in"; 
    $subject = "Enquire Request, name: ".$_POST["fName"];

    $sendMessage = '';
    // Email Template
    $sendMessage = ' 
		<table width="100%" cellspacing="0" cellpadding="0" border="0"> 
			<tr>
				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Full Name</td>
				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["fName"] . ' ' . $_POST["lName"] . '</td>
			</tr>  
			<tr>
				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Currently Based</td>
				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["currentlyBased"] . '</td>
			</tr>
			<tr>
				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Email Address</td>
				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["userEmail"] . '</td>
			</tr>
			<tr>
				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Phone Number</td>
				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["contactNumber"] . '</td>
			</tr> 
			<tr>
				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Address</td>
				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["address"] . '</td>
			</tr> 
			<tr>
				<td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Message</td>
				<td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["userMessage"] . '</td> 
			</tr> 
		</table>
	';

    $header = "From:".$email." \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    // die($sendMessage);
    $retval = mail ($to,$subject,$sendMessage,$header);
    // message Notification
    if( $retval ) {
        echo '<script>window.location.href = "thank-you.php";</script>';
    }else {
        echo "Error sending message, please try again!";
    } 
 
?> 