SMS-App-Install-Using-Twilio
============================

A simple example of using Twilio for app installs via SMS

This is a cleaned up, working version of the code originally published on the Apptamin website, 
http://www.apptamin.com/blog/app-download-button/

The repo includes two PHP files. One for the front end web form, and one for the back end logic. 

To implement the full solution, you'll need to register for an account at 
http://Twilio.com where you will be provided with a Twilio phone number, AccountSid, and AuthToken.

You will need to replace the placeholder values in sendnotifications.php with the values from Twilio.

You'll also need to download one of the Twilio helper libraries:
https://www.twilio.com/docs/libraries

This example references the PHP version, but other libraries are available. 

For this example, the twilio-php library folder was placed at the root level with sms.php and sendnotifications.php

Once you've installed the files and updated the values in sendnotifications.php, you should be able to enter a
phone number to receive an sms message with a link to your app.

Enjoy.


