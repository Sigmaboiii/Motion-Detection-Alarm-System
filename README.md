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

- To setup your send_email.php, change the line:
-     $mail->Host = 'smtp.domain.com';
- to:
-     $mail->Host = 'smtp.gmail.com';
- Now, change the 'your_email@domain.com' at line 14 to your gmail account.
- Change the 'your_password' to your app passwords created in your gmail account (Do not use your main gmail account password.)
- At line 20, change the 'your_email@domain.com' to your gmail account.
- At line 21, change the 'recipient@domain.com' to the recipient's gmail account.

  Now that your send_email.php is has been set up, lets see how to run the code.

# Things you need before running the whole code:

   # PHP:
      
   - You need to have PHP which you can download from here: https://windows.php.net/download/
   - You can check out the further steps to download and set up PHP in your computer by referring to this website: 
     https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/

   # Python:

  - For this code, I am using python 3.8 to ensure no errors as this version is the best version of python that can handle the 
    library 'simpleaudio' with no errors.

   # Composer: 

   - Composer is a dependency management tool for PHP. It simplifies managing the libraries and dependencies your PHP projects 
     rely on.
   - To download composer, download it from this website: https://getcomposer.org/download/.
   - Click on **composer-setup.exe**.
   - You can follow the process of installing and setting up composer from this website: https://www.geeksforgeeks.org/how-to- 
         install-php-composer-on-windows/

 Once every thing is set up, we can now go to the final section: **How to run the code??**:

# How to run the code??:

1. Clone this repository.
2. Open Command prompt and type the path to this repository once you clone it onto your computer.
3. Then, type the command:
-      pip install -r requirements.txt.
5. After the libraries are installed, type the command
-      composer install
6.  in the directory of this project.
7. After PHPMailer is installed, run the command in your project directory
-     php -S 127.0.0.1:8000(Make sure you have read and did the steps from the section "How to set up your 'send_email.php'.)
9. Copy the url of the php file once you have run the command 'php -S localhost:5000' which will be something like:
-      http://localhost:5000.
11. In that URL, add /send_email.php which will make the URL look like
-      http://localhost:5000/send_email.php.
14. If it doesn't work and shows an error, try changing the PHP file name.
15. Now, open your python file and in line 
