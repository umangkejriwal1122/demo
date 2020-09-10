import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
GPIO.setup(4,GPIO.OUT)

while True:
	GPIO.output(4,True)
	print("Led On")
	time.sleep(1)
	GPIO.output(4,False)
	print("LED Off")
	time.sleep(1)
