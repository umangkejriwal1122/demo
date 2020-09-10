import RPi.GPIO as GPIO  
import time    
led = 4  
GPIO.setmode(GPIO.BCM)
GPIO.setup(led,GPIO.OUT) 
# 50Hz PWM Frequency  (Human)
pwm_led = GPIO.PWM(led, 50)  
# Default Brightness, 100% Duty Cycle  
pwm_led.start(100)  
try:  
	while True:  
		duty_s = raw_input("Enter Brightness Value (0 to 100):")  
		# Convert into Integer Value  
		duty = int(duty_s)  
		pwm_led.ChangeDutyCycle(duty)  
		time.sleep(0.5)  
except KeyboardInterrupt:  
	print ("Exiting Program")  
except:  
	print ("Error Occurs, Exiting Program")  
finally:  
	GPIO.cleanup()  