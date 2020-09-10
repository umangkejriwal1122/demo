
import Adafruit_DHT
import time

# Sensor should be set to Adafruit_DHT.DHT11,
# Adafruit_DHT.DHT22, or Adafruit_DHT.AM2302.
sensor = Adafruit_DHT.DHT11

# Example using a Raspberry Pi with DHT sensor
# connected to GPIO23.
pin = 4

# Try to grab a sensor reading.  Use the read_retry method which will retry up
# to 15 times to get a sensor reading (waiting 2 seconds between each retry).
humidity, temperature = Adafruit_DHT.read_retry(sensor, pin)

while True:
    if humidity is not None and temperature is not None:
        print("Temperature - "+str(temperature)+ "*C" + " Humidity - "+str(humidity)+"%")
        time.sleep(1)
    else:
    	print('Failed to get reading. Try again!')
