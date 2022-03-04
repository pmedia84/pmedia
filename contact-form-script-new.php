<?php
include("email/email_details.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'].'/pmedia/mailer/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'].'/pmedia/mailer/SMTP.php';
require $_SERVER['DOCUMENT_ROOT'].'/pmedia/mailer/Exception.php';

if(!$_POST) {
	echo "<div style='text-align:center;font-size: 32px;font-weight:bold;'>403 Forbidden</div>";
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	exit;
}

if(isset($_POST['validation']) && !empty($_POST['validation'])) {
	$secret = '6LdQQ7UcAAAAAPLfmSCoR2BWaM-2Iri5zC6LW7YK';
	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['validation']);
	$responseData = json_decode($verifyResponse);
	if($responseData->success) {
		//success start
		// Email address verification.
		function isEmail($email) {
			return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
		}
		//define new line
		if (!defined("PHP_EOL")) {
			define("PHP_EOL", "\r\n");
		}
		//filter values
		$name     = htmlspecialchars($_POST['name'],);
		$email    = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
		$phone    = filter_var($_POST['phone'],FILTER_SANITIZE_SPECIAL_CHARS);
		$message  = htmlspecialchars($_POST['message'],);
		// define extra fields for an auto reply to customer
		$visitoremail    = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
		//check values
		if(trim($name) == '') {
			echo '<div id="response">0</div><div class="error_message">You must enter your name. Please try again.</div>';
			exit();
		} else if(trim($email) == '') {
			echo '<div id="response">0</div><div class="error_message">You must enter your email. Please try again.</div><br>';
			exit();
		} else if(!isEmail($email)) {
			echo '<div id="response">0</div><div class="error_message">Invalid email address. Please try again.</div><br>';
			exit();
		} else if(trim($phone) == '') {
			echo '<div id="response">0</div><div class="error_message">You must enter your phone. Please try again.</div><br>';
			exit();
		} else if(trim($message) == '') {
			echo '<div id="response">0</div><div class="error_message">No message. Please try again.</div>';
			exit();
		}


		// Configuration options
		// Enter the email address that you want emails to be sent to.

		///Stored in seperate file
		
        /// From Server
        $fromserver    = $username;
		//email subject
		$subject = 'You have been contacted by ' . $name . '.';
		

		// compose email body
		$body = '<h1>' . $name .' Has Contacted You From Your Contact Page </h1>
                <h2>Here are the details:</h2>
                <p>Name: '. $name .' </p> 
                <p>Email: '. $email .' </p>
                <p>Phone No.: '. $phone .' </p>
                <p>Message: '. $message .' </p>
                <br>
                <p><strong>Regards</strong></p>
                ';

		// Auto Reply email Body
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->Host = $host; // Enter your host here
        $mail->SMTPAuth = true;
        $mail->Username = $username; // Enter your email here
        $mail->Password = $pass; //Enter your password here
        $mail->Port = 25;
        $mail->IsHTML(true);
        $mail->From = $from;
        $mail->FromName = $fromname;
        $mail->Sender = $fromserver; // indicates ReturnPath header
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($email_to);
        if(!$mail->Send()){
        echo "Mailer Error: " . $mail->ErrorInfo;
        }else{
        
        echo "<fieldset class='response-fieldset'>
        <div id='response'>1</div>
        <div id='success_page'>
            <p>Message Sent Successfully.</p>
            <p>Thank you <strong>$name</strong>, your message has been sent and I will come back to you ASAP.</p>
        </div>
    </fieldset>";
            
        
        }

		
		

	
	//success end

	} else {
		//validation present but failed
		echo '<div id="response">0</div><div class="error_message">Robot Verification failed! Please try again.</div><br>';
		exit;
	}
} else {
	//validation not present
	echo '<div id="response">0</div><div class="error_message">Robot Verification failed! Please try again.</div><br>';
	exit;
}