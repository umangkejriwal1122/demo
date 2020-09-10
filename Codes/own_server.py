import time
import urllib2
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BCM)
GPIO.setup(23, GPIO.OUT)
while True:
	url = "http://apptronix.net/iot/get.php"
	conn = urllib2.urlopen(url)
	response = conn.read()
	print(response)
	print(type(response))
	if response == "ON":
		GPIO.output(23,True)
	if response == "OFF":
		GPIO.output(23,False)
	time.sleep(0.2)
	