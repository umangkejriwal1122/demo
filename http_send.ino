#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

const char *ssid = "Umang Kejriwal";  //ENTER YOUR WIFI SETTINGS
const char *password = "umang@1122";
int i=0;
String num;

void setup() {
  delay(1000);
  Serial.begin(9600);
  WiFi.mode(WIFI_OFF);        //Prevents reconnection issue (taking too long to connect)
  delay(1000);
  WiFi.mode(WIFI_STA);        //This line hides the viewing of ESP as wifi hotspot
  
  WiFi.begin(ssid, password);     //Connect to your WiFi router
  Serial.println("");

  Serial.print("Connecting");
  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  //If connection successful show IP address in serial monitor
  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());  //IP address assigned to your ESP
}

void loop() {

  i++;
  num = String(i); 
  HTTPClient http;    //Declare object of class HTTPClient

  String getData, Link;
 
  //GET Data
  getData = "?name=umang"+num;
  Link = "http://15.206.143.222/iot/insert.php" + getData;
  Serial.println(Link);
  http.begin(Link);     //Specify request destination
  
  int httpCode = http.GET();            //Send the request
  String payload = http.getString();    //Get the response payload

  Serial.println(httpCode);   //Print HTTP return code
  Serial.println(payload);    //Print request response payload

  if(payload=="Data Uploaded"){
    Serial.println("Hello");
    }
  else{
    Serial.println("Bye");
    }  

  http.end();  //Close connection
  
  delay(5000);  //Post Data at every 5 seconds
}
