/*
 * ARDUINO - PM5350 (MODBUS RTU)
 * ***********************************************************************************
 
 */



// FOR DEBUGING ONLY
// ```````````````````````
// NOTE : Pins 0 and 1 also used for modbus communication ==> enable (DEBUG) only when needed
#define DEBUG 1 // set 1 to enable debuging
#if DEBUG
  #define PRINT(s)    { Serial.print(s); }
  #define PRINTLN(s)  { Serial.println(s); }
#else
  #define PRINT(s)
  #define PRINTLN(s)
#endif

// fn get size of int array
// ````````````````````````````
#define ARRSIZE(x)   (sizeof(x) / sizeof(x[0]))

#include <SPI.h>
#include <Ethernet.h>
#include "ronnModbus.h"
#include "ronnEthernet.h"

unsigned long timer,timer2,timer3,timer4;
void(* resetFunc) (void) = 0;

void init_ethernet()
{
  pinMode(8,OUTPUT);
  digitalWrite(8,LOW);
  delay(50);
  digitalWrite(8,HIGH);
  delay(50);
  digitalWrite(8,HIGH);
  delay(100);
  
}

void setup(){
  Serial.begin(9600);
  modbusInit();
  //modbusInit_2();
  init_ethernet();
  ethernetInit();
  
  
  //delay(1000);
}



void loop(){
  
  connection_status = modbus_update(packets_1);
  //connection_status = modbus_update(packets_2);
    
    
    
  
  /*
    delay(5000);
    modbusData();   // update data modbus convert to float
    sendToServer("PDU01A"); // send to server over HTTP request (POST)
    delay(5000);
  */

  
  // Send every 5000ms
  if(millis() - timer >= 77264 || timer > millis()){
    timer = millis();
   
    modbusData();   // update data modbus convert to float
    sendToServer("C_AMO_R1"); // send to server over HTTP request (POST)
    
  }
  

  // Send every 5000ms
  if(millis() - timer2 >= 83262 || timer2 > millis()){
    timer2 = millis();

    
 
    modbusData_2();   // update data modbus convert to float
    sendToServer("Chiller_A"); // send to server over HTTP request (POST)
    

  }




  // Send every 5000ms
  if(millis() - timer3 >= 61267 || timer3 > millis()){
    timer3 = millis();
   
    modbusData_3();   // update data modbus convert to float
    sendToServer("Chiller_B"); // send to server over HTTP request (POST)
    
  }

/*
  // Send every 5000ms
  if(millis() - timer4 >= 5000 || timer4 > millis()){
    timer4 = millis();
   
    modbusData_4();   // update data modbus convert to float
    sendToServer("PDU02B"); // send to server over HTTP request (POST)
    
  }

  */


}
