DB First
===
**Consegna:**

1. Modellizzare la struttura di una tabella per memorizzare tutti i dati riguardanti delle auto usate messe in vendita da un concessionario.

***
automobiles

id                    || INT- AUTO INCREMENT - NOT NULL - PRIMARY KEY
price                 || SMALLINT UNSIGNED - NOT NULL 
brand                 || VARCHAR(20) - NOT NULL         
color                 || VARCHAR(20) - NULL             
model                 || VARCHAR(20) - NOT NULL             
height                || FLOAT(4,2) - NULL              
width                 || FLOAT(4,2) - NULL            
transmission          || VARCHAR(20) - NOT NULL           //MANUAL-AUTOMATIC
plate_license         || VARCHAR(7) - NOT NULL - UNIQUE   //GG111WP           
first_enrollment      || YEAR - NULL                  
mileage               || SMALLINT - NOT NULL               
fuel                  || VARCHAR(20) - NOT NULL          //GAS-DIESEL-GPL-ELECTRIC-HYBRID-HYDROGEN          
horse_power           || VARCHAR(20) - NOT NULL            
previous_owners       || CHAR(1) - NOT NULL                 
traction              || VARCHAR(5) - NOT NULL          //FRONT-REAR-4WD        
emission_class        || VARCHAR(7) - NOT NULL          //EURO 6d
vehicle_type          || VARCHAR(20) - NOT NULL                
doors                 || TINYINT - NULL               
seats                 || TINYINT - NULL                
crashed_and_repaired  || CHAR(1) - NULL                //0-1(FALSE-TRUE)
last_maintainance     || DATE - NULL                 
inspection_valid_until|| DATE - NULL                    
notes                 || TEXT - NULL                    