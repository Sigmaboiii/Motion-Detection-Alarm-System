# Motion-Detection-Alarm-System

- This is a motion detection system made in python!!
- I got the inspiration to make this project because this project doesnt need any type of money to spend for or anything and is very cost-effective.

# Libraries used in this project: 

1. opencv-python
2. requests
3. simpleaudio

# What does this code actually do??:

- After running the 'motion_detector.py', there will be a 10 second delay as the webcam is warming up to avoid lag issues.
- It will play a sound once a motion is detected and also it will send an email to your Gmail account.
- It will also limit the amount of emails to 3 so that your phone doesn't lag becausw of the mails.

# What are the things other than python used in this code??:

- This code also uses PHP to send the mails once the motion is detected on the webcam.
- The library used in PHP is the PHPMailer which is one of the most popular libraries used in PHP to send mails.

# How to setup your 'send_email.php':

- To setup your send_email.php, change the line '''$mail->Host = 'smtp.domain.com';''' to
