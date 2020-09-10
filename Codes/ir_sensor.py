import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
GPIO.setup(4,GPIO.OUT)
GPIO.setup(3,GPIO.IN)

while True:
	a = GPIO.input(3)
	print(a)
	if a == True:
                GPIO.output(4,True)
                print("Led On")
        else:
                GPIO.output(4,False)
                print("LED Off")
	
