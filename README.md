# 🎥 Motion-Detection-Alarm-System 🛠️:

- This is a motion detection system developed in Python!
- Inspired by its cost-effectiveness, this project does not require any significant   monetary investment.

# 📚 Libraries Used in This Project:

- opencv-python
- requests
- simpleaudio

# ❓ What Does This Code Actually Do?

- After running motion_detector.py, there will be a 10-second delay for the webcam    to warm up and avoid lag issues.
- It will play a sound once motion is detected and send an email to your Gmail        account.
- It limits the number of emails to 3 to prevent your phone from lagging due to too   many notifications.

# 💻 Technologies Used Besides Python:

- This code uses PHP to send emails once motion is detected by the webcam.
- The PHP library used is PHPMailer, one of the most popular libraries for sending    emails in PHP.

# 🛠️ Setting Up send_email.php:

1. Change the line:
-     $mail->Host = 'smtp.domain.com';
- to:
-     $mail->Host = 'smtp.gmail.com';

2. Update the email settings:

- Change your_email@domain.com at line 14 to your Gmail account.
- Replace your_password with your app password from your Gmail account (do not      use your main Gmail account password).
- At line 20, change your_email@domain.com to your Gmail account.
- At line 21, change recipient@domain.com to the recipient's Gmail account.

Now we have got to know, how do we setup our PHP file, now let us move towards the main part, how do we run the code??:


