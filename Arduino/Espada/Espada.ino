#include <WiFi.h>
#include <HTTPClient.h>

//const char* nombre = "iPhone de Migue Mesa";
//const char* contra = "password123";
//const char* nombre = "vodafoneCB24";
//const char* contra = "Nitrophoska314$";
const char* nombre = "Espada";
const char* contra = "Elwifidelaespadika";

TaskHandle_t Task1;
TaskHandle_t Task2;

// Constantes para las funciones de generacion, detección y envio
const int PinPWM = 17;  //Pin para emitir la señal AC a la cazoleta y espada
const int PinEstado=15; //Pin para mostrar en un LED el estado de toque valido/no valido
int suma;
String user="1"; //Inicializamos valores para POST HTTP
String pass="0";

String apiKeyValue = "tPmAT5Ab3j7F9";

String sensorName = "Usuario1";
String sensorLocation = "Terreno";

void setup() {
  Serial.begin(115200); 
  //Inicializamos los pines a usar para generacion de AC y deteccion de continua/alterna
  pinMode(34,INPUT);
  pinMode(35,INPUT);
  pinMode(17,OUTPUT);
  pinMode(15,OUTPUT);

  WiFi.begin(nombre,contra);
 
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Conectado a la red WiFi...");
  }
 
  Serial.println("Conectado a la red con exito");
  Serial.print("Direccion IP: ");
  Serial.println(WiFi.localIP());
  delay(2000);
  Serial.println("Listo para el partido!");
  
        digitalWrite(PinEstado,HIGH);
        delay(250);
        digitalWrite(PinEstado,LOW);
        delay(250);
        digitalWrite(PinEstado,HIGH);
        delay(250);
        digitalWrite(PinEstado,LOW);      
        
  //Definición de la funcion de generación de pulsos PWM en el nucleo 0
  xTaskCreatePinnedToCore(
                    Task1code, 
                    "Pulsos PWM",
                    10000,       
                    NULL, 
                    2,   
                    &Task1,   
                    0);           

  //Definición de la tarea de medicion y envío de datos que correrá en el nucleo 1
  xTaskCreatePinnedToCore(
                    Task2code, 
                    "Medicion", 
                    10000,   
                    NULL,   
                    2,     
                    &Task2,
                    1);
}

//Task1code: Generación pulsos PWM a 500Hz
void Task1code( void * pvParameters ){
  for(;;){ //Bucle infinito
        digitalWrite(PinPWM,HIGH);
        delay(1);
        digitalWrite(PinPWM,LOW);
        delay(1);
        }
}

//Task2code: Lectura de los datos
void Task2code( void * pvParameters ){
  for(;;){ //Bucle infinito
      while(digitalRead(35)){ //Mientras que el sensor 1 detecte tension->
          if(((analogRead(34))/4095*3)<0.2){ //Contamos el numero de picos que tiene la señal
            suma=suma+1; //Se espera que el # de picos si es un toque valido sea minimo, y que si es no valido sea un valor alto
        } 
      }
      if(suma>100){ //Directamente transmitimos la informacion de toque valido (o no valido)
        Serial.print("No valido: ");
        Serial.println(suma);
        digitalWrite(PinEstado,HIGH);
        delay(500);
        digitalWrite(PinEstado,LOW);
        EnvioHTTP(0);
      }
      
      if(suma<100 && suma>1){
        
        Serial.print("Valido: ");
        Serial.println(suma);
        digitalWrite(PinEstado,HIGH);
        delay(250);
        digitalWrite(PinEstado,LOW);
        delay(250);
        digitalWrite(PinEstado,HIGH);
        delay(250);
        digitalWrite(PinEstado,LOW);
        EnvioHTTP(1);
      }
      suma=1;
    }
  }

void loop(){ 
  }

void EnvioHTTP (int valido){
      WiFiClient client;
      HTTPClient http;

      //Comienzo de la conexion http
      http.begin("http://192.168.8.114/InterfazGrafica/post-esp-data.php");
      
      //Especificamos la cabecera de contenido
      http.addHeader("Content-Type", "application/x-www-form-urlencoded");
      
      //Informacion a enviar con HTTP POST
      String infoHTTP = "api_key=" + apiKeyValue + "&resultado1="+ String(user)+ "&resultado2="+String(valido);      
      
      // Se envia la HTTP POST Request
      int CodigoRespuesta = http.POST(infoHTTP);
      Serial.println("Codigo de respuesta: ");
      Serial.println(CodigoRespuesta);
      // Liberamos los recursos
      http.end();
}
