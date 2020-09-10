from Adafruit_IO import Client, RequestError, Feed
import Adafruit_DHT
import time

sensor = Adafruit_DHT.DHT11

humidity, temperature = Adafruit_DHT.read_retry(sensor, 4)

ADAFRUIT_IO_KEY = 'b583f8cbef00474481f4bce7b076e1f7'

ADAFRUIT_IO_USERNAME = 'umang1122'

aio = Client(ADAFRUIT_IO_USERNAME, ADAFRUIT_IO_KEY)

humid_feed = aio.feeds('humidity')
temp_feed = aio.feeds('temperature')

while True:
	if humidity is not None and temperature is not None:
                print("Temperature - "+str(temperature)+ "*C" + " Humidity - "+str(humidity)+"%")
                aio.send_data(humid_feed.key, humidity)
                aio.send_data(temp_feed.key, temperature)
                time.sleep(1)
	else:
                print('Failed to get reading. Try again!')
