/*
 * GET DATA FROM PM5350 (MODBUS RTU)
 * ***********************************************************************************

 */


#include "Arduino.h"
#include "SimpleModbusMaster.h"


// NOTE 
// `````````````````````````````````````````````````````````````````````````````````````
// To change serial config (data bit, parity, & stop bit) go to "SimpleModbusMaster.cpp" on line 355 
// arduino default config : SERIAL_8N1
// PM5350 default config : SERIAL_8E1
// ref : https://www.arduino.cc/reference/en/language/functions/communication/serial/begin/

#define baud 9600
#define timeout 1000
#define polling 200 // the scan rate


#define retry_count 10 
#define TxEnablePin 0 // pin 0 & pin 1 are reserved for RX/TX. To disable set _TxEnablePin < 2 

unsigned int connection_status;




// PACKET MAPPING
// ``````````````````````````````
// Check on register list of PM5350 :
// https://www.se.com/id/en/download/document/Public+PM5350+v1.11.0+Register+List/
unsigned int data1[12]; // current       ==> 2999 - 3010
unsigned int data2[18]; // voltage       ==> 3019 - 3036
unsigned int data3[24]; // power         ==> 3053 - 3076
unsigned int data4[16]; // Power Factor  ==> 3077 - 3092
unsigned int data5[2];  // frequancy     ==> 3109 - 3110
unsigned int data6[4]; // ENERGY       ==> 2699

unsigned int data1_2[12]; // current       ==> 2999 - 3010
unsigned int data2_2[18]; // voltage       ==> 3019 - 3036
unsigned int data3_2[24]; // power         ==> 3053 - 3076
unsigned int data4_2[16]; // Power Factor  ==> 3077 - 3092
unsigned int data5_2[2];  // frequancy     ==> 3109 - 3110
unsigned int data6_2[4]; // ENERGY       ==> 2699


unsigned int data1_3[12]; // current       ==> 2999 - 3010
unsigned int data2_3[18]; // voltage       ==> 3019 - 3036
unsigned int data3_3[24]; // power         ==> 3053 - 3076
unsigned int data4_3[16]; // Power Factor  ==> 3077 - 3092
unsigned int data5_3[2];  // frequancy     ==> 3109 - 3110
unsigned int data6_3[4]; // ENERGY       ==> 2699


unsigned int data1_4[12]; // current       ==> 2999 - 3010
unsigned int data2_4[18]; // voltage       ==> 3019 - 3036
unsigned int data3_4[24]; // power         ==> 3053 - 3076
unsigned int data4_4[16]; // Power Factor  ==> 3077 - 3092
unsigned int data5_4[2];  // frequancy     ==> 3109 - 3110
unsigned int data6_4[4]; // ENERGY       ==> 2699


unsigned int data1_5[12]; // current       ==> 2999 - 3010
unsigned int data2_5[18]; // voltage       ==> 3019 - 3036
unsigned int data3_5[24]; // power         ==> 3053 - 3076
unsigned int data4_5[16]; // Power Factor  ==> 3077 - 3092
unsigned int data5_5[2];  // frequancy     ==> 3109 - 3110
unsigned int data6_5[4]; // ENERGY       ==> 2699

unsigned int data1_6[12]; // current       ==> 2999 - 3010
unsigned int data2_6[18]; // voltage       ==> 3019 - 3036
unsigned int data3_6[24]; // power         ==> 3053 - 3076
unsigned int data4_6[16]; // Power Factor  ==> 3077 - 3092
unsigned int data5_6[2];  // frequancy     ==> 3109 - 3110
unsigned int data6_6[4]; // ENERGY       ==> 2699






enum{
  PACKET1,
  PACKET2,
  PACKET3,
  PACKET4,
  PACKET5,
  PACKET6,

  PACKET1_2,
  PACKET2_2,
  PACKET3_2,
  PACKET4_2,
  PACKET5_2,
  PACKET6_2,

  PACKET1_3,
  PACKET2_3,
  PACKET3_3,
  PACKET4_3,
  PACKET5_3,
  PACKET6_3,

  PACKET1_4,
  PACKET2_4,
  PACKET3_4,
  PACKET4_4,
  PACKET5_4,
  PACKET6_4,

  PACKET1_5,
  PACKET2_5,
  PACKET3_5,
  PACKET4_5,
  PACKET5_5,
  PACKET6_5,

  PACKET1_6,
  PACKET2_6,
  PACKET3_6,
  PACKET4_6,
  PACKET5_6,
  PACKET6_6,
  
  TOTAL_NO_OF_PACKETS_1,
  TOTAL_NO_OF_PACKETS_2,
  TOTAL_NO_OF_PACKETS_3,
  TOTAL_NO_OF_PACKETS_4,
  TOTAL_NO_OF_PACKETS_5,
  TOTAL_NO_OF_PACKETS_6
};

Packet packets_1[TOTAL_NO_OF_PACKETS_1];
packetPointer packet1 = &packets_1[PACKET1];
packetPointer packet2 = &packets_1[PACKET2];
packetPointer packet3 = &packets_1[PACKET3];
packetPointer packet4 = &packets_1[PACKET4];
packetPointer packet5 = &packets_1[PACKET5];
packetPointer packet6 = &packets_1[PACKET6];

packetPointer packet1_2 = &packets_1[PACKET1_2];
packetPointer packet2_2 = &packets_1[PACKET2_2];
packetPointer packet3_2 = &packets_1[PACKET3_2];
packetPointer packet4_2 = &packets_1[PACKET4_2];
packetPointer packet5_2 = &packets_1[PACKET5_2];
packetPointer packet6_2 = &packets_1[PACKET6_2];


packetPointer packet1_3 = &packets_1[PACKET1_3];
packetPointer packet2_3 = &packets_1[PACKET2_3];
packetPointer packet3_3 = &packets_1[PACKET3_3];
packetPointer packet4_3 = &packets_1[PACKET4_3];
packetPointer packet5_3 = &packets_1[PACKET5_3];
packetPointer packet6_3 = &packets_1[PACKET6_3];


packetPointer packet1_4 = &packets_1[PACKET1_4];
packetPointer packet2_4 = &packets_1[PACKET2_4];
packetPointer packet3_4 = &packets_1[PACKET3_4];
packetPointer packet4_4 = &packets_1[PACKET4_4];
packetPointer packet5_4 = &packets_1[PACKET5_4];
packetPointer packet6_4 = &packets_1[PACKET6_4];




// MODBUS INIT
// `````````````````````````````````````````
void modbusInit(){
  packet1->id = 10;
  packet1->function = READ_HOLDING_REGISTERS;
  packet1->address = 2999;
  packet1->no_of_registers = ARRSIZE(data1);
  packet1->register_array = data1;

  packet2->id = 10;
  packet2->function = READ_HOLDING_REGISTERS;
  packet2->address = 3019;
  packet2->no_of_registers = ARRSIZE(data2);
  packet2->register_array = data2;

  packet3->id = 10;
  packet3->function = READ_HOLDING_REGISTERS;
  packet3->address = 3053;
  packet3->no_of_registers = ARRSIZE(data3);
  packet3->register_array = data3;

  packet4->id = 10;
  packet4->function = READ_HOLDING_REGISTERS;
  packet4->address = 3077;
  packet4->no_of_registers = ARRSIZE(data4);
  packet4->register_array = data4;

  packet5->id = 10;
  packet5->function = READ_HOLDING_REGISTERS;
  packet5->address = 3109;
  packet5->no_of_registers = ARRSIZE(data5);
  packet5->register_array = data5;


  packet6->id = 10;
  packet6->function = READ_HOLDING_REGISTERS;
  packet6->address = 2699;
  packet6->no_of_registers = ARRSIZE(data6);
  packet6->register_array = data6;

    
  // meter 2
  packet1_2->id = 11;
  packet1_2->function = READ_HOLDING_REGISTERS;
  packet1_2->address = 2999;
  packet1_2->no_of_registers = ARRSIZE(data1_2);
  packet1_2->register_array = data1_2;
  
  packet2_2->id = 11;
  packet2_2->function = READ_HOLDING_REGISTERS;
  packet2_2->address = 3019;
  packet2_2->no_of_registers = ARRSIZE(data2_2);
  packet2_2->register_array = data2_2;
  
  packet3_2->id = 11;
  packet3_2->function = READ_HOLDING_REGISTERS;
  packet3_2->address = 3053;
  packet3_2->no_of_registers = ARRSIZE(data3_2);
  packet3_2->register_array = data3_2;
  
  packet4_2->id = 11;
  packet4_2->function = READ_HOLDING_REGISTERS;
  packet4_2->address = 3077;
  packet4_2->no_of_registers = ARRSIZE(data4_2);
  packet4_2->register_array = data4_2;
  
  packet5_2->id = 11;
  packet5_2->function = READ_HOLDING_REGISTERS;
  packet5_2->address = 3109;
  packet5_2->no_of_registers = ARRSIZE(data5_2);
  packet5_2->register_array = data5_2;
  
  
  packet6_2->id = 11;
  packet6_2->function = READ_HOLDING_REGISTERS;
  packet6_2->address = 2699;
  packet6_2->no_of_registers = ARRSIZE(data6_2);
  packet6_2->register_array = data6_2;

/*
  // meter 3
packet1_3->id = 3;
packet1_3->function = READ_HOLDING_REGISTERS;
packet1_3->address = 2999;
packet1_3->no_of_registers = ARRSIZE(data1_3);
packet1_3->register_array = data1_3;

packet2_3->id = 3;
packet2_3->function = READ_HOLDING_REGISTERS;
packet2_3->address = 3019;
packet2_3->no_of_registers = ARRSIZE(data2_3);
packet2_3->register_array = data2_3;

packet3_3->id = 3;
packet3_3->function = READ_HOLDING_REGISTERS;
packet3_3->address = 3053;
packet3_3->no_of_registers = ARRSIZE(data3_3);
packet3_3->register_array = data3_3;

packet4_3->id = 3;
packet4_3->function = READ_HOLDING_REGISTERS;
packet4_3->address = 3077;
packet4_3->no_of_registers = ARRSIZE(data4_3);
packet4_3->register_array = data4_3;

packet5_3->id = 3;
packet5_3->function = READ_HOLDING_REGISTERS;
packet5_3->address = 3109;
packet5_3->no_of_registers = ARRSIZE(data5_3);
packet5_3->register_array = data5_3;


packet6_3->id = 3;
packet6_3->function = READ_HOLDING_REGISTERS;
packet6_3->address = 3206;
packet6_3->no_of_registers = ARRSIZE(data6_3);
packet6_3->register_array = data6_3;


// meter 4
packet1_4->id = 4;
packet1_4->function = READ_HOLDING_REGISTERS;
packet1_4->address = 2999;
packet1_4->no_of_registers = ARRSIZE(data1_4);
packet1_4->register_array = data1_4;

packet2_4->id = 4;
packet2_4->function = READ_HOLDING_REGISTERS;
packet2_4->address = 3019;
packet2_4->no_of_registers = ARRSIZE(data2_4);
packet2_4->register_array = data2_4;

packet3_4->id = 4;
packet3_4->function = READ_HOLDING_REGISTERS;
packet3_4->address = 3053;
packet3_4->no_of_registers = ARRSIZE(data3_4);
packet3_4->register_array = data3_4;

packet4_4->id = 4;
packet4_4->function = READ_HOLDING_REGISTERS;
packet4_4->address = 3077;
packet4_4->no_of_registers = ARRSIZE(data4_4);
packet4_4->register_array = data4_4;

packet5_4->id = 4;
packet5_4->function = READ_HOLDING_REGISTERS;
packet5_4->address = 3109;
packet5_4->no_of_registers = ARRSIZE(data5_4);
packet5_4->register_array = data5_4;


packet6_4->id = 4;
packet6_4->function = READ_HOLDING_REGISTERS;
packet6_4->address = 3206;
packet6_4->no_of_registers = ARRSIZE(data6_4);
packet6_4->register_array = data6_4;
  */
  modbus_configure(baud, timeout, polling, retry_count, TxEnablePin, packets_1, TOTAL_NO_OF_PACKETS_1);  
}


// CONVERT DATA MODBUS TO FLOAT 
// ```````````````````````````````
union f_2uint { // CONVERT REGISTER TO FLOAT ==> I got this function from : https://industruino.com/blog/our-news-1/post/modbus-tips-for-industruino-26#blog_content
  float f;
  uint16_t i[2];
};
union f_2uint f_number;

float meterData[37]; // converted registers (float) will be stored here and send to server with http request
unsigned int meterIndex;



void convertData(Packet* pc, unsigned int dt[]){
  for(unsigned int i=0;i<pc->no_of_registers;i++){
    //RINTLN(String(pc->address+i)+" : "+String(data2[i]));
    if(pc->address + i == 3034)continue; // 3034 not use ==> check on PM5350 register list
    if((pc->address + i) % 2 == 0){ //Get even register ==> all register on list usage even
      f_number.i[0] = dt[i];
      f_number.i[1] = dt[i-1];
      meterData[meterIndex] = isnan(f_number.f)?0:f_number.f;
      PRINTLN(String(pc->address+i)+" : "+String(meterData[meterIndex]));
      meterIndex++;
    }
  }
}


void convertDataInt(Packet* pc, unsigned int dt[]){
  for(unsigned int i=0;i<pc->no_of_registers;i++){
    //RINTLN(String(pc->address+i)+" : "+String(data2[i]));
    if(pc->address + i == 3034)continue; // 3034 not use ==> check on PM5350 register list
    if((pc->address + i) % 2 == 0){ //Get even register ==> all register on list usage even
      f_number.i[0] = dt[i];
      f_number.i[1] = dt[i-1];
      meterData[meterIndex] = dt[i];
      PRINTLN(String(pc->address+i)+" : "+String(meterData[meterIndex]));
      meterIndex++;
    }
  }
}


void modbusData(){
  //if (connection_status != TOTAL_NO_OF_PACKETS)
    //Serial.println("\nModbus packet not valid...");
   
  PRINTLN("\nREGISTER DATA :");
  meterIndex = 0;
  convertData(packet1,data1);
  convertData(packet2,data2);
  convertData(packet3,data3);
  convertData(packet4,data4);
  convertData(packet5,data5);
  convertData(packet6,data6);
}

void modbusData_2(){
  //if (connection_status != TOTAL_NO_OF_PACKETS)
    //Serial.println("\nModbus packet _2not valid...");
   
  PRINTLN("\nREGISTER DATA :");
  meterIndex = 0;
  convertData(packet1_2,data1_2);
  convertData(packet2_2,data2_2);
  convertData(packet3_2,data3_2);
  convertData(packet4_2,data4_2);
  convertData(packet5_2,data5_2);
  convertData(packet6_2,data6_2);
}


void modbusData_3(){
  //if (connection_status != TOTAL_NO_OF_PACKETS)
    //Serial.println("\nModbus packet _3not valid...");
   
  PRINTLN("\nREGISTER DATA :");
  meterIndex = 0;
  convertData(packet1_3,data1_3);
  convertData(packet2_3,data2_3);
  convertData(packet3_3,data3_3);
  convertData(packet4_3,data4_3);
  convertData(packet5_3,data5_3);
  convertData(packet6_3,data6_3);
}


void modbusData_4(){
  //if (connection_status != TOTAL_NO_OF_PACKETS)
    //Serial.println("\nModbus packet _4not valid...");
   
  PRINTLN("\nREGISTER DATA :");
  meterIndex = 0;
  convertData(packet1_4,data1_4);
  convertData(packet2_4,data2_4);
  convertData(packet3_4,data3_4);
  convertData(packet4_4,data4_4);
  convertData(packet5_4,data5_4);
  convertData(packet6_4,data6_4);
}
