<?php
/* Send an SMS using Twilio. You can run this file 3 different ways:
 *
 * - Save it as sendnotifications.php and at the command line, run
 * php sendnotifications.php
 *
 * - Upload it to a web host and load mywebhost.com/sendnotifications.php
 * in a web browser.
 * - Download a local server like WAMP, MAMP or XAMPP. Point the web root
 * directory to the folder containing this file, and load
 * localhost:8888/sendnotifications.php in a web browser.
 */
 
// Step 1: Download the Twilio-PHP library from twilio.com/docs/libraries,
 // and move it into the folder containing this file.
 require "twilio-php/Services/Twilio.php";
 
// Step 2: set our AccountSid and AuthToken from www.twilio.com/user/account
 $AccountSid = "YOUR-TWILIO-ACCOUNT-SID-HERE";
 $AuthToken = "YOUR-TWILIO-AUTHTOKEN-HERE";
 
// Step 3: instantiate a new Twilio Rest Client
 $client = new Services_Twilio($AccountSid, $AuthToken);
 
// Step 4: Get phone number from the test-sms form
 $phone=$_POST["phone"];
 
// Step 5: Create SMS
 $sms = $client->account->sms_messages->create(
 
// Change the 'From' number below to be a valid Twilio number
 // that you've purchased, or the (deprecated) Sandbox number
 // USE 123-456-7890 FORMAT IN STRING
 "YOUR-TWILIO-PHONE-NUMBER-HERE",
 
// the number we are sending to - Any phone number
 $phone,
 
// the sms body
 "Get our app now: http://bit.ly/LINK-TO-YOUR-APP-HERE"
 );
 
// Display a confirmation message on the screen
 $sms_check='OK'; //Use Twilio's callback here
 //$return_json = '{"sms_sent":"' . $email_check . '"}';
 $return_json = '{"sms_sent":"OK"}';
 
echo $return_json;
?>