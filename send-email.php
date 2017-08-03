<?php

$firstname				=       $_POST['firstname'];
$lastname				=       $_POST['lastname'];
$country				=       $_POST['country'];
$phonenumber			=       $_POST['phonenumber'];
$emailaddress			=       $_POST['emailaddress'];
$fileupload				=       $_POST['fileupload'];

if($emailaddress != "")
		{

// multiple recipients
$to  = 'varunpanicker.87@gmail.com'; // note the comma

// subject
$subject = 'brndstr';

// message
$message = "<table cellpadding='20' cellspacing='20' border='0' style='border:15px solid #efefef' >";
$message.="<tr><td width=\"30%\"><strong>Name</strong></td><td width=\"10%\">:</td><td width=\"60%\">".$firstname." ".$lastname."</td></tr>";
$message.="<tr><td width=\"30%\"><strong>Email address</strong></td><td width=\"10%\">:</td><td width=\"60%\">".$emailaddress."</td></tr>";
$message.="<tr><td width=\"30%\"><strong>Phone number</strong></td><td width=\"10%\">:</td><td width=\"60%\">".$phonenumber."</td></tr>";
$message.="<tr><td width=\"30%\"><strong>Country</strong></td><td width=\"10%\">:</td><td width=\"60%\">".$country."</td></tr>";
$message.="<tr><td width=\"30%\"><strong>Upload</strong></td><td width=\"10%\">:</td><td width=\"60%\">".$fileupload."</td></tr>";
$message.= "</table></p></body></html>";	

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: '.$firstname.'<'.$emailaddress.'>' . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: varunpanicker.87@gmail.com' . "\r\n";

// Mail it
 $result = mail($to,$subject,$message,$headers);  

	if($result)
			{
			   header('location:sent.html');
			}
			else
			{
				header('location:index.html');
			}
		}
?>