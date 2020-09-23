#define BLYNK_PRINT Serial
#include <ESP8266WiFi.h>
#include <BlynkSimpleEsp8266_SSL.h>

// You should get Auth Token in the Blynk App.
// Go to the Project Settings (nut icon).

// http://188.166.206.43/mJGPD6leJxgk0WfkjwDvXBq_YqyI_clK/update/D2
// Method as PUT, Body as ["0"] pr ["1"]

char auth[] = "aVDpsiM2PvjEt6YJ6YaJdKfSUCtTQAkV";

// Your WiFi credentials.
// Set password to "" for open networks.
char ssid[] = "Umang Kejriwal";
char pass[] =  "umang@1122";

void setup()
{
  // Debug console
  Serial.begin(9600);

  Blynk.begin(auth, ssid, pass);
}

void loop()
{
  Blynk.run();
}
