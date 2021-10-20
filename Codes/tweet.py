import urllib3
http = urllib3.PoolManager()

r = http.request('POST', 'https://api.thingspeak.com/apps/thingtweet/1/statuses/update', fields={"api_key":"XG2X93YLWL0EPVO2","status":"Hi"})
print(r.data)