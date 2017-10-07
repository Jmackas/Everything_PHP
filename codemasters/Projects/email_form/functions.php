<?php
if (!empty($_POST)) {
	if ($_POST['subject'] != null) {
		//anti-spam action
	} else {
        
        function sanitise($parameter) {

        }

		$firstName = sanitise($_POST['fName'])));
		$lastName = sanitise($_POST['lName'])));
		$phone = sanitise($_POST['phone'])));
		$email = sanitise($_POST['email'])));
		$message = sanitise($_POST['message'])));
        
    
        

    function emailLayoutFunction($emailLayout) {
		$to = "me@rickibarn.es";
		$subject = "Enquiry from excellenthotel.com";
		$headers = "From: "  . $firstName . " " . $lastName . 
				   " <web@excellenthotel.com>\n" .
				   "Reply-To: " . $email .
    			   "MIME-Version: 1.0\n" . 
    			   "Content-type: text/html; charset=UTF-8" . "\r\n";
		
		$body = "<p>Name: " . $firstName . " " . $lastName . "</p>";
		$body .= "<p>Phone: " . $phone . "</p>";
		$body .= "<p>Email: " . $email . "</p>";
    
   
        

		if ($message != "") {
			$body .= "<p>Message: " . $message . "</p>";
        }
        
    }

        function formCompletionMessageFunction($message) {
		
		$ok = @mail($to, $subject, $body, $headers);
		
		if ($ok) {     
			$outputHeading = "Thank you"; 
			$outputCopy = "<p>Thank you for your enquiry. Your message has been successfully sent and you will be hearing from us shortly.</p>";     
		} else {     
			$outputHeading = "There was an error";
			$outputCopy = "<p>There was a server error while submitting your form.</p> <p>Please <a href=\"contact-form-01.php\">go back</a> to try again. If this problem persists, contact Excellent Hotel directly on 9999 9999.</p>";     
		}
        
    }


    function formSanitisation($outputSanitisation) {
		if (isset($_POST['enews'])) {
	
			$message = str_replace("\n", ' ', $_POST['message']);
			$message = str_replace("\r", ' ', $message);
			$message = str_replace("\r\n", ' ', $message);
			$message = str_replace(",", ';', $message);

$details = $_POST['fName'] . "," . $_POST['lName'] . "," . $_POST['email'] . "," . $_POST['phone'] . "," . $message . "\n";

			$fo = fopen("details.csv", "a");
			fwrite($fo, $details);
			fclose($fo);
		}
    }
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thank you for your contact</title>
<link rel="stylesheet" href="style.css" media="screen" />
</head>

<body>
	
	<h1><?php echo $outputHeading;?></h1>
    <?php echo $outputCopy;?>
</body>
</html>