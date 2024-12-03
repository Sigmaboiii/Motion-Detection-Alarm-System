# 🎥 Motion-Detection-Alarm-System 🛠️:

- This is a motion detection system developed in Python!
- Inspired by its cost-effectiveness, this project does not require any significant monetary investment.

# 📚 Libraries Used in This Project:

- opencv-python
- requests
- simpleaudio

# ❓ What Does This Code Actually Do?

- After running motion_detector.py, there will be a 10-second delay for the webcam to warm up and avoid lag issues.
- It will play a sound once motion is detected and send an email to your Gmail account.
- It limits the number of emails to 3 to prevent your phone from lagging due to too many notifications.

# 💻 Technologies Used Besides Python:

- This code uses PHP to send emails once motion is detected by the webcam.
- The PHP library used is PHPMailer, one of the most popular libraries for sending emails in PHP.

# 🛠️ Setting Up send_email.php:

1. Change the line:
-     $mail->Host = 'smtp.domain.com';
- to:
-     $mail->Host = 'smtp.gmail.com';

2. Update the email settings:

- Change your_email@domain.com at line 14 to your Gmail account.
- Replace your_password with your app password from your Gmail account (do not use your main        Gmail account password).
- At line 20, change your_email@domain.com to your Gmail account.
- At line 21, change recipient@domain.com to the recipient's Gmail account.

Now we have got to know, how do we setup our PHP file, now let us move towards the main part, how do we run the code??:

# 📁 Prerequisites:

1. PHP:

- Download PHP from [here](https://windows.php.net/download/).
- Follow the setup instructions [here](https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/).

2. Python

- Use Python 3.8 to avoid errors and ensure compatibility with the simpleaudio library.

3. Composer

- Composer is a dependency management tool for PHP.
- Download it from [here](https://getcomposer.org/download/).
- Click on composer-setup.exe and follow the setup instructions   [here](https://www.geeksforgeeks.org/how-to-install-php-composer-on-windows/).

# How to run the code 🚀?:

1. Clone the repository:
-     git clone https://github.com/Sigmaboiii/Motion-Detection-Alarm-System.git

2. Open the terminal and navigate to the repository:
-     cd path/to/the/repo 

3. Run this command to install dependencies:
-     pip install -r requirements.txt

4. Run this composer command to install PHPMailer:
-     composer install

5. Run this PHP command to get the url of the PHP file:
-     php -S localhost:port (You can change the value in the port. E.g. 5000, 8000, etc.)

6. Adjust the URL if necessary. Example:
-     http://localhost:8000/send_email.php


