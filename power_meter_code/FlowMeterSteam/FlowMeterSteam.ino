

    #include <Ethernet.h>
    #include <SPI.h>
 
    byte mac[] = {  0x90, 0xA2, 0xDA, 0x0D, 0xF6, 0xFF }; 
    byte ip[] = {  10, 8, 107, 213};
    byte gateway[] = { 10,8,107,1 };      

         
  
    EthernetClient client;
 
    String temp;


int Boiler1 = A0;    // select the input pin for the potentiometer
int Boiler2 = A1;    // select the input pin for the potentiometer
int ledPin = 13;      // select the pin for the LED
int sensorValue1 = 0;  // variable to store the value coming from the sensor
int sensorValue2 = 0;  // variable to store the value coming from the sensor

unsigned long timer,timer2,timer3,timer4;

void setup() {
  
    Ethernet.begin(mac, ip, gateway);
    Serial.begin(9600);
    Serial.println(Ethernet.localIP());
    delay(1000);
    delay(1000);
    Serial.println("connecting...");

}

void sendToServer()
{
  
    if (client.connect("10.8.107.200",80))
    {                                 
    Serial.println("Sending to Server: ");                    
    client.println("POST /hotab_util/index.php/api/tampung_ethernet_steam HTTP/1.1");           
    Serial.print("POST /hotab_util/index.php/api/tampung_ethernet_steam HTTP/1.1");           
    client.println("Host: 192.168.0.55");
    client.println("Content-Type: application/x-www-form-urlencoded");
    client.println("Connection: close");
    client.println("User-Agent: Arduino/1.0");
    client.print("Content-Length: ");
    client.println(temp.length());
    client.println();
    client.print(temp);
    client.println();                                           
    }

    else
    {
    Serial.println("Cannot connect to Server");               
    }
}

void loop() {
  // read the value from the sensor:
  sensorValue1 = analogRead(Boiler1);
  sensorValue2 = analogRead(Boiler2);
  
  temp = "STEAM1="+String(sensorValue1)+"&STEAM2="+String(sensorValue2);

  
  
  // Send every 5000ms
  if(millis() - timer3 >= 50000 || timer3 > millis()){
    timer3 = millis();
   
    
    sendToServer(); // send to server over HTTP request (POST)
    
  }


}
