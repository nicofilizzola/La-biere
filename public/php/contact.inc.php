<?php

// IF ACCESSED VIA CONTACT PAGE 
	if (isset($_POST['contact-submit'])){ 
		
		// INPUT VARIABLES
		$firstName = $_POST['first-name'];
		$lastName = $_POST['last-name'];
		$mailFrom = $_POST['email'];
		$subject = $_POST['title'];
		$message = $_POST['message'];
		
		// ERROR : INPUTS NOT FILLED
		if (empty($firstName) || empty($lastName) || empty($mailFrom) || empty($subject) || empty($message)){
			header("Location: ../../nous.php?error=input&first-name=".$firstName."&last-name=".$lastName."&email=".$mailFrom."&title=".$subject."&message=".$message."&#thirdSection");
			exit();
			
		// ERROR : EMAIL NOT VALID
		} elseif (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../../nous.php?error=invalid_email&first-name=".$firstName."&last-name=".$lastName."&title=".$subject."&message=".$message."&#thirdSection");
			exit();
		}
		
		// ERROR : NAME NOT VALID
		elseif (!preg_match("/^[a-zA-Z-\\s]*$/", $firstName)){
			header("Location: ../../nous.php?error=invalid_firstname&last-name=".$lastName."&email=".$mailFrom."&title=".$subject."&message=".$message."&#thirdSection");
			exit();
		}
		elseif (!preg_match("/^[a-zA-Z-\\s]*$/", $lastName)){
			header("Location: ../../nous.php?error=invalid_lastname&first-name=".$firstName."&email=".$mailFrom."&title=".$subject."&message=".$message."&#thirdSection");
			exit();
		}
		
		// NO ERRORS : SEND MESSAGE
		else {
			
			$mailTo = "nicofilizzola@outlook.com";
			$subjectTitle = "La bière : ".$subject;
			$heading = "From : ".$mailFrom;
			$txt = "You received a message from ".$firstName." ".$lastName."\n\nMessage:\n\n".$message;
			
			// SEND MESSAGE
			mail($mailTo, $subjectTitle, $txt, $heading);
			
			// REDIRECT
			header("Location: ../../nous.php?error=none&#thirdSection");
			exit();
		}
		
	// IF ACCESSED FILE INCORRECTLY 
	} else {
		header("Location: ../../index.php");
		exit();
	}