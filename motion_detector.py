import cv2
import threading
import requests  
import simpleaudio as sa
import queue
import os
import time  

status_list = [None, None]
sound_played = False  
email_sent_count = 0  
max_emails = 3  

def play_sound():
    sound_file = r'path/to/file/alarm.wav'  

    if not os.path.exists(sound_file):
        print(f"Error: The file does not exist at the specified path: {sound_file}")
        return

    try:
        wave_obj = sa.WaveObject.from_wave_file(sound_file)  
        play_obj = wave_obj.play()  
        print("Sound is playing...")  
    except Exception as e:
        print(f"An error occurred while trying to play the sound: {e}")

def send_email():
    url = 'http://localhost:port/send_email.php'  
    try:
        response = requests.post(url)
        print(response.text)  
    except Exception as e:
        print(f"Error sending email: {e}")

video = cv2.VideoCapture(0)
alert_queue = queue.Queue()

def alert_handler():
    while True:
        alert = alert_queue.get()
        if alert == "email":
            send_email()

alert_thread = threading.Thread(target=alert_handler, daemon=True)
alert_thread.start()

backSub = cv2.createBackgroundSubtractorMOG2()
delay_seconds = 5  
print(f"Starting motion detection in {delay_seconds} seconds...")
time.sleep(delay_seconds)  
warmup_seconds = 5  
print(f"Warm-up period for {warmup_seconds} seconds...")
start_time = time.time()

frame_skip = 2  
frame_count = 0  

while True:
    check, frame = video.read()
    if not check:
        break

    frame = cv2.flip(frame, 1)
    frame = cv2.resize(frame, (640, 480))  
    fg_mask = backSub.apply(frame)
    contours, _ = cv2.findContours(fg_mask, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)
    motion_detected = False

    if frame_count % frame_skip == 0:  
        for c in contours:
            if cv2.contourArea(c) < 3000:  
                continue
            (x, y, w, h) = cv2.boundingRect(c)
            
            if w > 50 and h > 100:  
                cv2.rectangle(frame, (x, y), (x + w, y + h), (0, 255, 0), 1)
                motion_detected = True  

        if time.time() - start_time > warmup_seconds:
            if motion_detected and not sound_played and email_sent_count < max_emails:  
                play_sound()  
                alert_queue.put("email")  
                send_email()  
                sound_played = True 
                email_sent_count += 1  
            elif not motion_detected:
                sound_played = False  
            if motion_detected:
                cv2.imshow('motion detector', frame)  

    frame_count += 1  

    key = cv2.waitKey(1)
    if key == ord('q'):
        break

video.release()
cv2.destroyAllWindows()
