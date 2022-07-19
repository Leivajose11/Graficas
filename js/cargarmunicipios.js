
//creamos variableas array para cada departamento
var departamentos_COPAN = ["SANTA ROSA DE COPAN","CABAÑAS","CONCEPCION COPAN","COPAN RUINAS","CORQUIN","CUCUYAGUA","DOLORES","DULCE NOMBRE","EL PARAISO COPAN","FLORIDA","LA JIGUA","LA UNION COPAN","NUEVA ARCADIA","SAN AGUSTIN","SAN ANTONIO","SAN JERONIMO","SAN JOSE","SAN JUAN DE OPOA","SAN NICOLAS","SAN PEDRO COPAN","SANTA RITA","TRINIDAD COPAN","VERACRUZ"];
var departamentos_LEMPIRA=["BELEN","CANDELARIA","ERANDIQUE","GRACIAS","GUALCINCE","GUARITA","LA CAMPA","LA IGUALA","LA UNION LEMPIRA","COLOLACA", 
"LA VIRTUD","LAS FLORES","LEPAERA","MAPULACA","PIRAERA","SAN ANDRES","SAN FRANCISCO","SAN JUAN DE GUARITA","SAN MANUEL DE COLOHETE","SAN MARCOS DE CAIQUIN","SAN RAFAEL","SAN SEBASTIAN","SANTA CRUZ","TALGUA","TAMBLA","TOMALA","VALLADOLID","VIRGINIA","COLOLACA"];
var departamentos_OCOTEPEQUE=["CONCEPCION","FRATERNIDAD","LA ENCARNACION","LA LABOR","MERCEDES","SAN FERNANDO","SAN JORGE","SANTA FE","SENSENTI","SINUAPA","BELEN GUALCHO","DOLORES","LUCERNA","NUEVA OCOTEPEQUE","SAN FRANCISCO DEL VALLE","SAN MARCOS"];
var departamentos_ATLANTIDA=["LA CEIBA","TELA","JUTICALPA","LA MASICA","SAN FRANSISCO","ARIZONA","ESPARTA","EL PROVENIR"];
var departamentos_COLON=["TRUJILLO","BALTAFE","IRIONA","LIMON","SABA","SANTA FE","SANTA ROSA DE AGUAN","SONAGUERA","TOCOA","BONITO ORIENTAL"];
var departamentos_COMAYAGUA=["COMAYAGUA","AJUTERIQUE","EL ROSARIO","ESQUINAS","HUMUYA","LA LIBERTAD","LA MANI","LA TRINIDAD","LEJAMANI","MINAS DE ORO","MEAMBAR","SAN JERONIMO","SAN JOS DE COMAYAGUA","SAN JOSE DEL POTRERO","SAN LUIS","SAN SEBASTIAN","SIGUATEPEQUE","VILLA DE SAN ANTONIO","LAS LAJAS","TAULABE"];
var departamentos_CORTES=["SAN PEDRO SULA","CHOLOMA","OMOA","PIMIENTA","POTRERILLOS","PUERTO CORTES","SAN ANTONIO DE CORTES","SAN FRANSISCO DE YOJOA","VILLANUEVA","LA LIMA"];
var departamentos_CHOLUTECA=["CHOLUTECA","APACIGALPA","CONCEPCION DE MARIA","DUYURE","EL CORPUS","EL TRIUNFO","MARCOVIA","NAMASIGUE","OROCUINA","PESPIRE","SAN ANTONIO DE LAS FLORES","SAN ISIDRO","SAN JOSE DE CHOLUTECA","SAN MARCOS DE COLON","SANTA ANA DE YUSGUARE"];
var departamentos_EL_PARAISO=["YUSCARAN","ALAUCA","DANLI","EL PARAISO","GUINOPE","JACALEPA","LIURE","MOROCELI","OROPOLI","POTRERILLOS","SAN ANTONIO DE LAS FLORES","SAN LUCAS","SAN MATIAS","TEUPASENTI","TEXIGUAT","VADO ANCHO","YAUYUPE","TROJES"];
var departamentos_FRANCISCO_MORAZAN=["DISTRITO CENTRAL","CEDROS","CURAREN","EL PORVENIR","GUAIMACA","LA LIBERTAD","LA VENTA","LEPATERIQUE","MARAITA","MARALE","NUEVA ARMENIA","OJOJONA","ORICA","REITOCA","SABANAGRANDE","SAN ANTONIO DE ORIENTE","SAN BUENAVENTURA","SAN IGNACIO","SAN JUAN DE FLORES","SAN MIGUELITO","SANTA ANA","SANTA LUCIA","TALANGA","VALLECILLO","TATUMBLA","VALLE DE ANGELES","VILLA DE SAN FRANSISCO","ALUBAREN"];
var departamentos_GRACIAS_A_DIOS=["PUERTO LEMPIRA","BRUS LAGUNA","AHUAS","JUAN FRANSISCO BULNES","RAMON VILLEDA MORALES","WAMPUSIRPE"];
var departamentos_INTIBUCA=["LA ESPERANZA","CAMASCA","COLOMONCAGUA","CONCEPCION","DOLORES ESPERANZA","JESUS DE OTORO","MAGDALENA","MASAGUARA","SAN ANTONIO","SAN ISIDRO","SAN JUAN","SAN MARCOS DE LA SIERRA","SAN MIGUEL GUACAPLA","SANTA LUCIA","YAMARANGUILA","SAN FRANSISCO DE OPALACA"];
var departamentos_ISLAS_DE_LA_BAHIA=["ROATAN","GUANAJA","SAN JOSE DE GUARDIOLA","UTILA"];
var departamentos_LA_PAZ=["LA PAZ","AGUANTEQUERIQUE","CABAÑAS","CANE","CHINACLA","GUAJIQUIRO","LAUTERIQUE","MARCALA","MERCEDES DE ORIENTE","OPATORO","SAN ANTOIO DEL NORTE","SAN JOSE DE LA PAZ","SAN JUAN","SAN PEDRO DE TUTULE","SANTA ANA","SANTA ELENA","SANTA MARIA","SANTIAGO DE PURINGUA","YARUL"];
var departamentos_OLANCHO=["JUTICALPA","CAMPAMENTO","CATACAMAS","CONCORDIA","DULCE NOMBRE DE CULMI","EL ROSARIO","ESQUIPULAS DEL NORTE","GUALACO","GUARIZAMA","GUATA","GUATA","GUAYAPE","JANO","LA UNION","MAGUILILE","MANTO","SALAMA","SAN ESTEBAN","SAN FRANSISCO DE BECERRA","SAN FRANSISCO DE LA PAZ","SAN MARIA DEL REAL","SILCA","YOCON","PATUCA"];
var departamentos_SANTA_BARBARA=["SANTA BARBARA","ARADA","ATIMA","AZACUALPA","CEGUACA","COCEPCION DEL NORTE","COCEPCION DEL SUR","CHINDA","EL NISPERO","GUALALA","ILAMA","LAS VEGAS","MACUELIZO","NARANJITO","NUEVA CELILAC","NUEVA FRONTERA","PETOA","PROTECCION","QUIMISTAN","SAN FRANSISCO DE OJUERA","SAN JOSE DE COLINAS","SAN LUIS","SAN MARCOS_SB","SAN PEDRO ZACAPA","SAN VICENTE CENTENARIO","SANTA RITA_SB","TRINIDAD"];
var departamentos_VALLE=["NACAOME","ALINAZA","AMAPALA","ARAMECINA","CARIDAD","GOASCORAN","LANGUE","SAN FRANSISCO DE CORAY","SAN LORENZO"];
var departamentos_YORO=["YORO","ARENAL","EL NEGRITO","EL PROGRESO","JOCON","MOARAZAN","OLANCHITO","SANTA RITA YORO","SULACO","VICTORIA","YORITO"];


function cambia_departamento(){
 //tomamos el valor del select departamento elegido
 var dpt
 dpt = document.getElementById('departamentos').value	
     mis_dptos = acentos(dpt)
     // verificamos si el Departamento está definido

if (mis_dptos!=0) { 
      	 //si estaba definido, entonces coloco las opciones del Departamento correspondiente. 
      	 //selecciono el array del departamento adecuado 
      	 mis_municipios=eval("departamentos_"+mis_dptos) 
      	  //calculo el numero de municipios 
      	 num_municipios = mis_municipios.length 
      	 //marco el número de municipios en el select 
      	 document.f1.minucipios.length = num_municipios 
      	 //para cada municipio del array, lo introduzco en el select 
      	 for(i=0;i<num_municipios;i++){ 
         	 document.f1.minucipios.options[i].value=mis_municipios[i] 
         	 document.f1.minucipios.options[i].text=mis_municipios[i] 
      	 }	
   	    }else{ 
      	 //si no había municipio seleccionado, elimino los municipios del select 
      	 document.f1.minucipios.length = 1 
      	 //coloco un guión en la única opción que he dejado 
      	 document.f1.minucipios.options[0].value = " " 
      	 document.f1.minucipios.options[0].text = "SIN ASIGNAR" 
   	   } 
   	}// FIN DE FUNCIONcambia_departamento

   function acentos(dpt){
   var acentuada
   if(dpt=="COPAN"){ acentuada="COPAN";}
   else{
   if(dpt=="LEMPIRA"){ acentuada="LEMPIRA"; }
	else{
   if(dpt=="OCOTEPEQUE"){ acentuada="OCOTEPEQUE"; }
   else{
   if(dpt=="ATLANTIDA"){ acentuada="ATLANTIDA"; }
   else{
   if(dpt=="COLON"){ acentuada="COLON"; }
   else{
   if(dpt=="COMAYAGUA"){ acentuada="COMAYAGUA"; }
   else{
   if(dpt=="CORTES"){ acentuada="CORTES"; }
   else{
   if(dpt=="CHOLUTECA"){ acentuada="CHOLUTECA"; }
   else{
   if(dpt=="EL PARAISO"){ acentuada="EL_PARAISO"; }
   else{
   if(dpt=="FRANCISCO MORAZAN"){ acentuada="FRANCISCO_MORAZAN"; }
   else{
   if(dpt=="GRACIAS A DIOS"){ acentuada="GRACIAS_A_DIOS"; }
   else{
   if(dpt=="INTIBUCA"){ acentuada="INTIBUCA"; }
   else{
   if(dpt=="ISLAS DE LA BAHIA"){ acentuada="ISLAS_DE_LA_BAHIA"; }
   else{
   if(dpt=="LA PAZ"){ acentuada="LA_PAZ"; }
   else{
   if(dpt=="OLANCHO"){ acentuada="OLANCHO"; }
   else{
   if(dpt=="SANTA BARBARA"){ acentuada="SANTA_BARBARA"; }
   else{
   if(dpt=="VALLE"){ acentuada="VALLE"; }
   else{
   if(dpt=="YORO"){ acentuada="YORO"; }
   else{
   acentuada=dpt;
       }    
   		}
   		  }
   		    }	
   				}
   				  }
   					 }
   						}
   					     }
   				          }
   			               }
   		                    }
   	                         }
                                 }
                                  }
                                   }
                                    }
                                     }
   	
   		
return  acentuada

   }// fin funcion acentos

   