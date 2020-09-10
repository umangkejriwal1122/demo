import sys
import urllib2
from time import sleep
# URL where we will send the data, Don't change it
baseURL = 'http://apptronix.net/iot/insert.php?' 
while True:
	# Sending the data to server
	a=20
	conn = urllib2.urlopen(baseURL + '&name='+str(a))
	print conn.read()
	sleep(5)