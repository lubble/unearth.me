<html>
    <meta http-equiv="refresh" content="0; url=index.html" />
    <?php
// Check for empty fields
if(empty($_POST['email']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$email = $_POST['email'];
	
// Create the email and send the message
$to = 'me@nathanwong.io'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $email";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nEmail: $email";
$headers = "From: noreply@unearth.me\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
</html>