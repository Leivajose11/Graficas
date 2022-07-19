function configureDropDownLists(ddl1,ddl2) {
    var accidentesdetransito = ['Atropello', 
    'Caida', 
    'Choque',
    'Colisión', 
    'Despiste', 
    'Volcamiento',];


    var asistencia = ['Asistencia',
     'Asistencia Psicológica',
     'Ayuda Humanitaria',
     'COVID-19',
     'Eventos Publicos',
     'Resguardo ',];

    var casosalcaldia = ['Alteración de Linderos',
     'Conflicto Vecinal',
      'Congestionamiento',
     'Desalojo o Readecuación / Cierre de establecimientos',
      'Invasión de vía pública',
      'Venta de Alcohol sin Permiso',
      'Ley seca', 
      'Mendicidad', 
      'Negocios Clandestinos', 
      'Problemas de Agua Potable', 
      'Quema de Basura', 
      'Semaforos en Mal Estado',
      'Semovientes',
      'Tala de Arboles', 
      'Vehiculo Abandonado', 
      'Vehiculo en Mal Estado', 
      'Vehiculo Mal Estacionado',
      'Venta de Polvora',];

    var delitoscomunes = ['Amenazas',
     'Allanamiento de domicilio',
     'Chantaje',
     'Actos de Lujuria',
     'Chantaje',
     'Conducción Temeraria',
     'Contrabando',
     'Delitos Ambientales',
     'Delito de Desobediencia',
     'Delitos Contra Derechos Laborales',
     'Desordenes Públicos',
     'Estragos',
     'Exhibicionismo',
     'Injurias y Calumnia',
     'Maltrato o Abandono Animal',
     'Perturbación del Orden',
     'Quebrantamiento de condena o medida', ];
   
    var delitoscontralamujeruhombre = 
    ['Abandono ancianos / personas con discapacidad / Enfermos',
    'Bigamia',
    'Delitos Contra la Libertad Religiosa / Práctica de Rituales',
    'Discriminación',
    'Hostigamiento Sexual',
    'Maltrato Familiar',
    'Otras Agresiones Sexuales',
    'Tentativa de Violación',
    'Trata de Personas',
     'Trato Degradante',
     'Violación Sexual',
     'Violencia Doméstica',];
   

    var delitoscontralaninezyadolescencia = 
    ['Abandono de Menores',
     'Estupro',
     'Explotación Laboral Infantil',
     'Hostigamiento Sexual',
     'Incesto',
     'Incumplimiento del deber de asistencia y sustento',
     'Inducción al abandono del hogar',
     'Maltrato familiar',
     'Otras Agresiones Sexuales (Menores)',
     'Pornografia Infantil',
     'Sustracción de Menores',
     'Tentativa de Violación (Menores)',
     'Trata de Personas (Menores)',
     'Trato Degradante (Menores)',
     'Violación Sexual Especial (Menores de 14 Años)',,];


    var delitoscontralapropiedad =
['Agiotaje',
'Daños',
'Estafa',
'Extorsión',
'Fraude',
'Hurto ',
'Hurto a comercio',
'Hurto a cosechas',
'Hurto a personas',
'Hurto a Vehículo Automotor',
'Hurto de Arma de Fuego',
'Hurto de Vehículo',
'Hurto a Vivienda',
'Hurto de Ganado',
'Loterías y juegos no autorizados',
'Robo de Arma de Fuego',
'Robo a Comercio',
'Robo a personas',
'Robo a Vehículo Automotor',
'Robo a vivienda',
'Robo de ganado',
'Robo de Vehículo Automotor',
'Robo ',
'Tentativa de Hurto ',
'Tentativa de Robo ',
'Usura',
'Usurpación',
 ];


    var delitoscontralavida =
['Aborto',
'Amenazas a muerte',
'Asociación Terrorista',
'Atentado',
'Femicidio',
'Hallazgo de Feto/ Bebé Humano',
'Homicidio',
'Inducción y Auxilio al Suicidio',
'Intento de suicidio',
'Lesiones',
'Parricidio',
'Privación Ilegal de la libertad',
'Secuestro',
'Tentativa de homicidio',
'Tortura',];

 



    var desastresnaturales = 
    ['Derrumbe',
    'Desbordamiento',
     'Deslave',
     'Fenómeno de Sequia',
     'Inundaciones',
     'Marejadas',
     'Maremoto',
     'Terremoto',
     'Tromba Marina',
     'Tsunami',
     'Vientos Racheados',];


    var emergenciamedica = 
    ['COVID19',
    'Emergencias Médicas',
    'Teleconsulta',];


    var incendio = 
    ['Incendio en Líneas y Tendidos Eléctricos',
     'Incendio en Embarcaciones',
      'Incendio Estructural',
       'Incendio Forestal', 
       'Incendio Vehicular',
        'Incendio Zacatera',
            ];


    var investigacion =
     ['Abuso de Autoridad/Violación de Deberes',
      'Activación de Sistemas de Alarma',
      'Amotinamiento',
      'Asociación Ilícita',
      'Búsqueda',
       'Cohecho', 
        'Indeterminado',  
       'Consumo de Drogas',
        'Desplazamiento forzado',
         'Disparos por Arma de Fuego',
         'Enfrentamiento Entre Grupos Delictivos',
          'Falsificacion de Documentos',
          'Uso Indebido de Indumentaria Policial o Militar',
          'Decomisos',
           'Infracciones',
            'Personas Desaparecidas',
              'Persona tendida en la calle',
               'Personas detenidas por causas desconocidas',
                'Personas sospechosas',
                 'Retén / Operativos',
                 'Requerimiento de Vehículos o Personas',
                  'Saturaciones',
                  'Seguimiento',
                   'Tráfico de Armas',
                    'Tráfico de Droga',
                    'Trafico Ilícito de Personas',
                    'Traslados de Personas Detenidas',
                    'Vehículo Sospechoso',
                    'Venta de droga',
                    'Venta y Consumo de Droga',
                    ];


                    var otrascausasdemuerte = 
                    ['Muerte en incendio',
                     'Muerte por Causas Naturales',
                      'Muerte por Sumersión',
                      'Muerte por Intoxicación',
                      'Muerte por Atragantamiento',
                      'Muerte por Causas Desconocidas',
                      'Muerte por Aplastamiento por Objeto Pesado',
                      'Muerte por Caída',
                      'Muerte por Electrocución',
                      'Suicidio',
                      ];



           var reportesrecibidos = 
    ['Animales muertos',
     'Animales peligrosos',
      'Extravío de Chapa de una Autoridad',
      'Extravío de Documentos y Objetos Personales',
      'Extravío de Armas de Fuego',
      'Extravío de Placas Vehiculares Automotores',
      'Fuga de Sustancias Peligrosas e Inflamables', 
      'Fumigación',
      'Manifestaciones Pacificas',
      'Naufragio',
      'Personas Extraviadas',
      'Problemas en el Tendido Eléctrico',
      'Quema de Pólvora',
      'Reporte Oficial de Dia/Paramédico de Turno',
      'Refuerzo Institucional',
      'Rescate animal',
      'Rescate de personas',
      'Respuesta de denuncias',  ];
    
    switch (ddl1.value) 
    {
        

             case 'accidentesdetransito':
            ddl2.options.length = 0;
            for (i = 0; i < accidentesdetransito.length; i++) {
                createOption(ddl2, accidentesdetransito[i], accidentesdetransito[i]);
            }
            break;

        case 'asistencia':
            ddl2.options.length = 0;
            for (i = 0; i < asistencia.length; i++) {
                createOption(ddl2, asistencia[i], asistencia[i]);
            }
            break;

         case 'casosalcaldia':
            ddl2.options.length = 0;
            for (i = 0; i < casosalcaldia.length; i++) {
                createOption(ddl2, casosalcaldia[i], casosalcaldia[i]);
            }
            break;

        
         case 'delitoscomunes':
            ddl2.options.length = 0; 
        for (i = 0; i < delitoscomunes.length; i++) {
            createOption(ddl2, delitoscomunes[i], delitoscomunes[i]);
            }
            break;

        case 'delitoscontralamujeruhombre':
            ddl2.options.length = 0; 
        for (i = 0; i < delitoscontralamujeruhombre.length; i++) {
            createOption(ddl2, delitoscontralamujeruhombre[i], delitoscontralamujeruhombre[i]);
            }
            break;

        case 'delitoscontralaninezyadolescencia':
            ddl2.options.length = 0; 
        for (i = 0; i < delitoscontralaninezyadolescencia.length; i++) {
            createOption(ddl2, delitoscontralaninezyadolescencia[i], delitoscontralaninezyadolescencia[i]);
            }
            break;

         case 'delitoscontralapropiedad':
            ddl2.options.length = 0; 
        for (i = 0; i < delitoscontralapropiedad.length; i++) {
            createOption(ddl2, delitoscontralapropiedad[i], delitoscontralapropiedad[i]);
            }
            break;

         case 'delitoscontralavida':
            ddl2.options.length = 0;
            for (i = 0; i < delitoscontralavida.length; i++) {
                createOption(ddl2, delitoscontralavida[i], delitoscontralavida[i]);
            }
            break;

        case 'desastresnaturales':
            ddl2.options.length = 0;
            for (i = 0; i < desastresnaturales.length; i++) {
                createOption(ddl2, desastresnaturales[i], desastresnaturales[i]);
            }
            break;

         case 'emergenciamedica':
            ddl2.options.length = 0;
            for (i = 0; i < emergenciamedica.length; i++) {
                createOption(ddl2, emergenciamedica[i], emergenciamedica[i]);
            }
            break;

        case 'incendio':
            ddl2.options.length = 0;
            for (i = 0; i < incendio.length; i++) {
                createOption(ddl2, incendio[i], incendio[i]);
            }
            break;

        case 'investigacion':
            ddl2.options.length = 0;
            for (i = 0; i < investigacion.length; i++) {
                createOption(ddl2, investigacion[i], investigacion[i]);
            }
            break;

        case 'otrascausasdemuerte':
            ddl2.options.length = 0;
            for (i = 0; i < otrascausasdemuerte.length; i++) {
                createOption(ddl2, otrascausasdemuerte[i], otrascausasdemuerte[i]);
            }
            break;

             case 'reportesrecibidos':
            ddl2.options.length = 0;
            for (i = 0; i < reportesrecibidos.length; i++) {
                createOption(ddl2, reportesrecibidos[i], reportesrecibidos[i]);
            }
            break;






            break;
            default:
                ddl2.options.length = 0;
            break;
    }

}

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }










    