<?php
    
    // handles form submit
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    	// ensure user has valid Gmail address
    	if(strpos($_POST['email'],'@gmail.com') === false){
    
       	 	echo '<script> alert("Please use a valid Gmail address to request a StepBOT beta invite.  Thank you!"); </script>';
	
		}else{
	
    		echo '<script> alert("Thank you! You will receive a StepBOT BETA invite from the GPOP team shortly."); </script>';
    
    		$headers = 'From: StepBOT@stepbot-fitness.com' . "\r\n" .
    		'Reply-To: StepBOT@stepbot-fitness.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

			// send e-mail
    		mail('david@gpop.us,lance@gpop.us,michael@gpop.us,ibrahim@gpop.us', 'New StepBOT Beta Request: '.$_POST['email'], 'The following user would like to be added as a BETA tester on StepBOT: '.$_POST['email'], $headers);

		}
	
	}
    
?>