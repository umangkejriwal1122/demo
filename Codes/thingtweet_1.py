import time, os
import urllib3
http = urllib3.PoolManager()
MAX_TEMP = 37.0
MIN_T_BETWEEN_WARNINGS = 60 # Minutes

BASE_URL = 'https://api.thingspeak.com/apps/thingtweet/1/statuses/update'
KEY = 'XG2X93YLWL0EPVO2'
def send_notification(temp):
    status = 'Hello Raspberry Pi getting hot. CPU temp=' + str(temp)
    parameters = {"api_key":"XG2X93YLWL0EPVO2","status":status}
    r = http.request('POST', BASE_URL, fields=parameters)
    print(r.data)

def cpu_temp():
    dev = os.popen('/opt/vc/bin/vcgencmd measure_temp')
    cpu_temp = dev.read()[5:-3]
    return cpu_temp
    
while True:
    temp = float(cpu_temp())
    print("CPU Temp (C): " + str(temp))
    if temp > MAX_TEMP:
        print("CPU TOO HOT!")
        send_notification(temp)
        print("No more notifications for: " + str(MIN_T_BETWEEN_WARNINGS) + 
" mins")
        time.sleep(MIN_T_BETWEEN_WARNINGS * 60)
    time.sleep(1)