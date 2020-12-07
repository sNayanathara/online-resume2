<?php


$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    }
//    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        $errors[] = 'Email is invalid';
//    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (empty($errors)) {
        $toEmail = 'sandumininayanthara1@gmail.com';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $subject, $body, $headers)) {
            header('Location: thank-you.html');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }



  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
//  $receiving_email_address = 'sandumininayanathara1@gmail.com';
//
// if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//   include( $php_email_form );
//  } else {
//   die( 'Unable to load the "PHP Email Form" Library!');
// }
//
//  $contact = new PHP_Email_Form;
//  $contact->ajax = true;
//  
//  $contact->to = $receiving_email_address;
//  $contact->from_name = $_POST['name'];
//  $contact->from_email = $_POST['email'];
//  $contact->subject = $_POST['subject'];
//
//   Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
//  /*
//  $contact->smtp = array(
//    'host' => 'example.com',
//    'username' => 'example',
//    'password' => 'pass',
//    'port' => '587'
//  );
//  */
//
//  $contact->add_message( $_POST['name'], 'From');
//  $contact->add_message( $_POST['email'], 'Email');
//  $contact->add_message( $_POST['message'], 'Message', 10);
//
//  echo $contact->send();
// Replace this with your own email address
//***************************************************************************************
//$siteOwnersEmail = 'sandumininayanathara1@gmail.com';
//
//
//if($_POST) {
//
//   $name = trim(stripslashes($_POST['name']));
//   $email = trim(stripslashes($_POST['email']));
//   $subject = trim(stripslashes($_POST['subject']));
//   $contact_message = trim(stripslashes($_POST['message']));
//
//   // Check Name
//	if (strlen($name) < 2) {
//		$error['name'] = "Please enter your name.";
//	}
//	// Check Email
//	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
//		$error['email'] = "Please enter a valid email address.";
//	}
//	// Check Message
//	if (strlen($contact_message) < 15) {
//		$error['message'] = "Please enter your message. It should have at least 15 characters.";
//	}
//   // Subject
//	if ($subject == '') { $subject = "Contact Form Submission"; }
//
//
//   // Set Message
//   $message .= "Email from: " . $name . "<br />";
//   $message .= "Email address: " . $email . "<br />";
//   $message .= "Message: <br />";
//   $message .= $contact_message;
//   $message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";
//
//   // Set From: header
//   $from =  $name . " <" . $email . ">";
//
//   // Email Headers
//	$headers = "From: " . $from . "\r\n";
//	$headers .= "Reply-To: ". $email . "\r\n";
// 	$headers .= "MIME-Version: 1.0\r\n";
//	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


//   if (!$error) {
//
//      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
//      $mail = mail($siteOwnersEmail, $subject, $message, $headers);
//
//		if ($mail) { echo "OK"; }
//      else { echo "Something went wrong. Please try again."; }
//		
//	} # end if - no validation error
//
//	else {
//
//		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
//		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
//		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
//		
//		echo $response;
//
//	} # end if - there was a validation error

}
?>
