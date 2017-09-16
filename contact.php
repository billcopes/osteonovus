<?php
// require ReCaptcha class
require('recaptcha-master/src/autoload.php');

// configure
$from = 'Osteonovus Contact Form <hello@osteonovus.com>';
$contact = $_POST['contact'];
$subject = 'Osteonovus Contact Form Submission';
$fields = array('name' => 'First Name', 'surname' => 'Last Name', 'phone' => 'Phone', 'visitor' => 'Visitor Category', 'contact' => 'Department', 'email' => 'Customer Email', 'message' => 'Message'); // array variable name => Text to appear in the email
$okMessage = 'Thank you, we will be in touch soon!';
$errorMessage = 'There was an error while submitting the form. Please try again.';
$recaptchaSecret = '6LfjgjAUAAAAABGxnHjK68VUlbanf5OP0iKoh2yC';
/*switch($contact) {
   case 'business':
       $sendTo = "hello@osteonovus.com";
       break;
   case 'customerservice':
       $sendTo = "customerservice@osteonovus.com";
       break;
   case 'ordering':
       $sendTo = "customerservice@osteonovus.com";
       break;
   default:
       $sendTo = "customerservice@osteonovus.com";
       break;
}*/
switch($contact) {
   case 'business':
       $sendTo = "bschlossberg@osteonovus.com";
       break;
   case 'customerservice':
       $sendTo = "bschlossberg@osteonovus.com";
       break;
   case 'ordering':
       $sendTo = "bschlossberg@osteonovus.com";
       break;
   default:
       $sendTo = "bschlossberg@osteonovus.com";
       break;
}



// let's do the sending
try
{
    if (!empty($_POST)) {

        // validate the ReCaptcha, if something is wrong, we throw an Exception, 
        // i.e. code stops executing and goes to catch() block
        
        if (!isset($_POST['g-recaptcha-response'])) {
            throw new \Exception('ReCaptcha is not set.');
        }

        // do not forget to enter your secret key in the config above 
        // from https://www.google.com/recaptcha/admin
        
        $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
        
        // we validate the ReCaptcha field together with the user's IP address
        
        $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);


        if (!$response->isSuccess()) {
            throw new \Exception('ReCaptcha was not validated.');
        }
        
        // everything went well, we can compose the message, as usually
        
        $emailText = "You have new message from contact form\n=============================\n";

        foreach ($_POST as $key => $value) {

            if (isset($fields[$key])) {
                $emailText .= "$fields[$key]: $value\n";
            }
        }
        

        $headers = array('Content-Type: text/plain; charset="UTF-8";',
            'From: ' . $from,
            'Reply-To: ' . $from,
            'Return-Path: ' . $from,
        );

        mail($sendTo, $subject, $emailText, implode("\n", $headers));

        $responseArray = array('type' => 'success', 'message' => $okMessage);
    }
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}
