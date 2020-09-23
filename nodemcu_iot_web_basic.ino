#include <ESP8266WiFi.h>

// Replace with your network credentials
const char* ssid     = "Umang Kejriwal";
const char* password = "umang@1122";

// Set web server port number to 80
WiFiServer server(80);

void setup() {
  // put your setup code here, to run once:
Serial.begin(115200);
  // Initialize the output variables as outputs
  pinMode(D2, OUTPUT);

  // Connect to Wi-Fi network with SSID and password
  Serial.print("Connecting to ");
  Serial.println(ssid);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  // Print local IP address and start web server
  Serial.println("");
  Serial.println("WiFi connected.");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
  server.begin();
}

void loop() {
  // Check if a client has connected
WiFiClient client = server.available();
if (!client)
  { 
    return;
  }
  //Wait until the client sends some data

  Serial.println("new client");
  while (!client.available())
  {
    delay(1);
  }

  // Read the first line of the request
  String request = client.readStringUntil('\r');
  Serial.println(request);
  client.flush();
  //Match the request
  
  if (request.indexOf(" /on")!=-1)
  {
    digitalWrite(D2,HIGH);
 
  }

  if (request.indexOf(" /off")!=-1)
  {
    digitalWrite(D2,LOW);
  }
  // Set ledpin according to the request
  
  client.println("<html><body><h1>ESP8266 Web Server</h1>");
  client.println("<p><a href='/on'><button>ON</button></a></p>");
  client.println("<p><a href='/off'><button>OFF</button></a></p>");
  client.println("</body></html>");
  delay(1);
  Serial.println("Client disconnected");
  Serial.println("");

}
