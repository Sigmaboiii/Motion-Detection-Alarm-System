# 🎥 Motion-Detection-Alarm-System 🛠️:

- This is a motion detection system developed in Python!
- Inspired by its cost-effectiveness, this project does not require any significant   monetary investment.

# 📚 Libraries Used in This Project:

- opencv-python
- requests
- simpleaudio

❓ What Does This Code Actually Do?

- After running motion_detector.py, there will be a 10-second delay for the webcam    to warm up and avoid lag issues.
- It will play a sound once motion is detected and send an email to your Gmail        account.
- It limits the number of emails to 3 to prevent your phone from lagging due to too   many notifications.

# 💻 Technologies Used Besides Python:

- This code uses PHP to send emails once motion is detected by the webcam.
- The PHP library used is PHPMailer, one of the most popular libraries for sending emails in PHP.

# 🛠️ Setting Up send_email.php:

- Change the line:
- 
