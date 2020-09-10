from Adafruit_IO import Client, RequestError, Feed

ADAFRUIT_IO_KEY = 'b583f8cbef00474481f4bce7b076e1f7'

ADAFRUIT_IO_USERNAME = 'umang1122'

aio = Client(ADAFRUIT_IO_USERNAME, ADAFRUIT_IO_KEY)

humid_feed = aio.feeds('humid')

data = aio.receive(humid_feed.key)

print('Latest value from Humidity: {0}'.format(data.value))