INFORMACIÓN DEL PROYECTO

  <!--
  _____ _   _ _______ _____   ____  _____  _    _  _____ _____ _____ ____  _   _ 
 |_   _| \ | |__   __|  __ \ / __ \|  __ \| |  | |/ ____/ ____|_   _/ __ \| \ | |
   | | |  \| |  | |  | |__) | |  | | |  | | |  | | |   | |      | || |  | |  \| |
   | | | . ` |  | |  |  _  /| |  | | |  | | |  | | |   | |      | || |  | | . ` |
  _| |_| |\  |  | |  | | \ \| |__| | |__| | |__| | |___| |____ _| || |__| | |\  |
 |_____|_| \_|  |_|  |_|  \_\\____/|_____/ \____/ \_____\_____|_____\____/|_| \_|
                                                                                 
--------------------------------------------------------------------------------------->

Hola gente de Alegra, soy Johan Pereira.
Leí su mensaje el día en que me llegó, pero no pude disponerme a trabajar en lo que pidieron hasta hoy, 08 de diciembre, a la 01:10am; 
comencé por leer las instrucciones de lo que buscaban el día en que llegó el mensaje, así como registrarme en su web y buscar información sobre las APIs.

Esto de construir una aplicación cross-platform MVC PHP es un verdadero reto para mí, no solo a nivel de realización de proyecto, sino porque el deadend de la prueba coincide con varios de mis procesos de cierre del 2017 como mis graduaciones, otras entrevistas de trabajo, tres proyectos freelancer de desarrollo que estoy terminando (uno de los cuales pude entregar, afortunadamente ---> front end + hosting/domain + SEO de http://www.johanlewis.com.ve), servir de secretario del CNE para las elecciones del 10/12, una entrevista de servicio comunitario de antropología el día miércoles 13/12 y responsabilidades de la coordinación (que delegaré al comenzar a  trabajar) de un foro latinoamericano de antropología que se estará realizando el año que viene y del que haré su página web, http://www.felaa.com.ve; todo estaba pautado para este plazo de tiempo, así que ha sido lidiar con fechas de entrega férreas y encontrar la manera de ser consecuente. 

Viniendo de tecnologías Microsoft (incluso mis títulos son en Micosoft Solutions Developer y Técnico en tecnologías Microsoft, y la mayoría de los cursos que he hecho han sido del MVA), y desarrollar la mayoría de lo que hecho en Visual Studio y trabajado MVC solamente en asp.NET en los laboratorios de la institución, y siendo esto tan reciente para mí, ¡VAYA RETO EL QUE ME PLANTEARON!
En estos momentos estoy instalando WAMP, y voy a aprovechar mientras esto se hace para comentarles un poco de cómo ha sido hasta ahora este proceso para mí. 
Primero, me acabo de enterar de qué es Zend Framework, y estoy aprendiendo a manejar este marco de desarrollo mientras aprendo con más detalle PHP (otra de esas cosas que rara vez he tocado, solamente en plantillas de wordpress y en un servidor privado de Lineage II que monté hace todos los años del mundo)
<!-- ------------------------------------------------------------------------------------------------
           _____  _____  ______ _   _ _____ _____ ______             _ ______ 
     /\   |  __ \|  __ \|  ____| \ | |  __ \_   _|___  /   /\       | |  ____|
    /  \  | |__) | |__) | |__  |  \| | |  | || |    / /   /  \      | | |__   
   / /\ \ |  ___/|  _  /|  __| | . ` | |  | || |   / /   / /\ \ _   | |  __|  
  / ____ \| |    | | \ \| |____| |\  | |__| || |_ / /__ / ____ \ |__| | |____ 
 /_/    \_\_|    |_|  \_\______|_| \_|_____/_____/_____/_/    \_\____/|______|
                                                                              
------------------------------------------------------------------------------------------------ -->

De las cosas que estoy aprendiendo con este reto, primero:
1)instalar PHP, condición necesaria para que me corra la instalación del punto 2.
No lo instalo como dependencia de Apache (WAMP) porque conseguí una guía que me explicaba cómo realizar la instalación de los módulos necesarios en Windows 10 para que Composer reconozca la instalación. .<------ https://drivemarketing.ca/en/blog/installing-composer-on-windows-10/ ;

2) instalar Composer, gestor de dependencias del que desconocía, y que me llevó a personalizar mi cónsola de windows y hasta agarrarle gusto;

3) Instalar ZF 1.12 y Ext JS 6.5.2 en WAMP para realizar pruebas locales

3)Descargar e instalar WAMP, luego incluir las rutas en PHP.ini de las librerías del ZendFramework 1.12 como una de sus dependencias (mientras esto se hacía, permití las conexiones en el firewall de windows por el puerto 8080, por si acaso esto hacía falta);
-Cambiar la versión de PHP de WAMP de 5.6.31 for CLI a PHP 7+ 
-Hacer un rollback a lo anterior, ya que el hosting donde voy a alojar la prueba, tiene una versión de apache 5.3+

4) Aprender, con tutoriales y manuales oficiales, cómo desarrollar en PHP utilizando Zend Framework, crear un esqueleto básico de MVC en este marco y hacerme camino a través de él;

5) Y este creo que ha sido mi mayor aprendizaje: ser realista con los tiempos de entrega, reconocer mis límites, mis capacidades y qué puedo hacer dadas mis circunstancias. 

Me estoy preparando para ser project manager, es incluso la razón que me llevó a aprender a programar y es una de las razones por las que me encantaría trabajar con ustedes, para aprender de primera mano lo que es llevar un proyecto con un equipo de trabajo integrado, empaparme en Agile SCRUM/DevOps y tener experiencia práctica de desarrollo en un campo que me rete, para así superarme como una actividad cotidiana.

Creo que una de las principales responsabilidades de un buen PM es, justamente, procurar dar soluciones, es decir, entregar productos funcionales, escalables y corregibles antes que cualquier otra cosa; es por este mismo principio que tomé la decisión de crear esta aplicación de prueba utilizando ZEND e implementarlo en una solución sencilla de submit, que postea en mi cuenta de alegra. 

He podido aprender muchísimo en estos 5 días de trabajo que le pude dedicar al proyecto, tanto ExtJS como Zend los conocí a través de esta prueba que, como les he dicho, me llegó en mitad de circunstancias con las que tenía que ser responsable y, para poder serlo también con ustedes, crée una solución tan funcional como estuvo en mis manos, limitada, si bien está alojada, comentada, compartida en repositorio y que realiza, por ahora, las consultas que requieren en su prueba. 

Me ha costado muchas horas de esfuerzo, de lectura e implementación, pero la recompensa de tener listo algo (aunque muy humilde), verlo trabajando y poder presentarlo, me hacen vivir esto como un triunfo personal.

Por mi parte, cuentan con alguien que tiene como prioridad aprender y enseñar de lo que sabe, y que está en constante preparación para ser el mejor intérprete de soluciones posibles.

¡Gracias por la oportunidad!
 Atte.,

 Johan Pereira.

---------------------------------------------------------------------------------------------
cosas que hago en paralelo:
A) Registro un Hosting & dominio (2tr.es|johanpereira.ga)
B) Instalo GitHub local para colocar el repositorio de lo que haga

<!-- ------------------------------------------------------------------------------------------------

  _____ _   _  _____ _______ _____  _    _  _____ _____ _____ ____  _   _ ______  _____ 
 |_   _| \ | |/ ____|__   __|  __ \| |  | |/ ____/ ____|_   _/ __ \| \ | |  ____|/ ____|
   | | |  \| | (___    | |  | |__) | |  | | |   | |      | || |  | |  \| | |__  | (___  
   | | | . ` |\___ \   | |  |  _  /| |  | | |   | |      | || |  | | . ` |  __|  \___ \ 
  _| |_| |\  |____) |  | |  | | \ \| |__| | |___| |____ _| || |__| | |\  | |____ ____) |
 |_____|_| \_|_____/   |_|  |_|  \_\\____/ \_____\_____|_____\____/|_| \_|______|_____/ 
                                                                                        
                                                                                        
----------------------------------------------------------------------------------------------- -->


Objetivo: realizar una web app en base ZF+ExtJS de la ruta /client de alegra.com

El esquema de la ruta /client y los API relacionados:

RUTA /CLIENT
  + + + +
  | | | |
  | | | |
  | | | +--------> /create <--- https://developer.alegra.com/docs/crear-contacto
  | | |
  | | +----------> /view-clients (retorna client)<-- API                                                                   
  | | |             https://developer.alegra.com/docs/lista-de-contactos
  | | |     
  | | +----------> /view-providers (retorna proveedores)
  | +------------> /client/view/id/n <-- API https://developer.alegra.com/docs/consultar-un-contacto
  |
  +--------------> /edit/id/n <---- n=clientID API https://developer.alegra.com/docs/editar-contacto

Mi aplicación no debe almacenar datos, sino realizar los request sobre el API de Alegra.

Debe ser hosteado en un lugar desde el cual se pueda poner a prueba su funcionalidad -----> 
http://www.johanpereira.com.ve
Su repositorio debe ser subido y compartido, sin incluir allí el archivo de la clave del API | tokens de identidad
(información de conexión contenida en configs/application.ini, código comentado y desperzonalizado para el repositorio)
--> https://github.com/TheInterpreter/ProyectoAlegra
                                                 
¡EMPECEMOS!
<!-- -----------------------------------------------------------------------------------------------

  _____ __  __ _____  _      ______ __  __ ______ _   _ _______       _____ _____ ____  _   _ 
 |_   _|  \/  |  __ \| |    |  ____|  \/  |  ____| \ | |__   __|/\   / ____|_   _/ __ \| \ | |
   | | | \  / | |__) | |    | |__  | \  / | |__  |  \| |  | |  /  \ | |      | || |  | |  \| |
   | | | |\/| |  ___/| |    |  __| | |\/| |  __| | . ` |  | | / /\ \| |      | || |  | | . ` |
  _| |_| |  | | |    | |____| |____| |  | | |____| |\  |  | |/ ____ \ |____ _| || |__| | |\  |
 |_____|_|  |_|_|    |______|______|_|  |_|______|_| \_|  |_/_/    \_\_____|_____\____/|_| \_|
                                                                          
------------------------------------------------------------------------------------------------ -->

Inicio creando un esqueleto estándar MVC con ZF, a partir de él, creo la base del backend que lidiarán con los eventos CRUD y la autenticación en la página:
<!-- 
    _              
  / /\            
 / /  \           
/_/ /\ \          
\_\/\ \ \         
     \ \ \        
      \ \ \       
       \ \ \      
      __\ \ \___  
     /___\_\/__/\ 
     \_________\/ 
                    -->
    AlegraZFEXTJSMVCProject
    |-- application
    |   |-- Bootstrap.php
    |   |-- configs
    |   |   `-- application.ini
    |   |-- controllers
    |   |   |-- ErrorController.php
    |   |   `-- IndexController.php
    |   |   '-- ClientController.php   
    |   |-- models
    |   |   |-- mapper
    |   |   |   '-- ClientMapper.php.
    |   |   '-- Contact.php              
    |   |-- views
    |   |   |-- helpers
    |   |   `-- scripts
    |   |       |-- error
    |   |       |   `-- error.phtml
    |   |       `-- index
    |   |          `-- index.phtml
    |   |-- layouts
    |   |       `-- scripts
    |   |          '--layout.phtml
    |-- library
    |-- public
    |   |-- .htaccess
    |   `-- index.php
    `-- tests
        |-- application
        |   `-- bootstrap.php
        |-- library
        `-- phpunit.xml

Tras vincular las librerías de ZF con el proyecto, y estructurarlo según las dependencias, pasa a tener el siguiente esquema:


    _       
  /\ \      
 /  \ \     
/ /\ \ \    
\/_/\ \ \   
    / / /   
   / / /    
  / / /  _  
 / / /_/\_\ 
/ /_____/ / 
\________/  
            

    AlegraZFEXTJSMVCProject
    |-- application
    |   |-- Bootstrap.php
    |   |-- configs
    |   |   `-- application.ini
    |   |-- controllers
    |   |   |-- ErrorController.php
    |   |   `-- IndexController.php
    |   |   '-- ClientController.php
    |   |   '-- RestController.php    
    |   |-- models
    |   |   |-- mapper
    |   |   |   '-- ClientMapper.php.
    |   |   '-- Contact.php              
    |   |-- views
    |   |   |-- helpers
    |   |   `-- scripts
    |   |       |-- error
    |   |       |   `-- error.phtml
    |   |       |-- index
    |   |       | `-- index.phtml
    |   |       '----Client
    |   |             '----client.phtml
    |   |-- layouts
    |   |       `-- scripts
    |   |          |--layout.phtml
    |   |          |--header.html
    |   |          '--footer.html
    |   |
    |   |-- docs
    |   |     `-- informacion.md
    |-- library
    |   `-- Zend (Todas las librerías del 1.12. No las voy a listar acá para ahorrar espacio)   
    |-- public
    |   |-- .htaccess
    |   |-- index.php
    |   '---resources (todos los archivos requeridos)
    |  
    |   
    |  
    |   
    |
    |-- .zfproject.xml
    '-- composer.json

Entre las cosas que falté hacer (y en las que iré trabajando a partir de esto, ya que me activaron el motor Zend):
--Crear los demás eventos en vista, ya que no me dio tiempo (11:35pm del día de entrega)
--Aprender a generar front end con ExtJS e implementarlo
--Agregarle estilo a los botones de limpiar y crear en Client
--Crear condición if null para campos vacíos
--Enrutar elementos
--Colocar los field requeridos
--Aprender a autenticar en Zend y en ExtJs.
--Configurar correctamente el Layout para que extienda todos los elementos a los demás elementos de la página.
--Cualquier cosa que me extiendan uds.

Seguiré trabajando en este proyecto, quizás incluso lo empiece de cero tras entregar esta prueba, para ir consolidando conocimientos, y aprender a hacerlo cada vez mejor, ya que es un excelente ejercicio :)


<!-- 
   _____ _____            _____ _____           _____ _ 
  / ____|  __ \     /\   / ____|_   _|   /\    / ____| |
 | |  __| |__) |   /  \ | |      | |    /  \  | (___ | |
 | | |_ |  _  /   / /\ \| |      | |   / /\ \  \___ \| |
 | |__| | | \ \  / ____ \ |____ _| |_ / ____ \ ____) |_|
  \_____|_|  \_\/_/    \_\_____|_____/_/    \_\_____/(_)
                                                         -->
                                                        

(creo que está de más decirles las instrucciones de instalación y seteo de WAMP y de las librerías, así que me saltaré eso.)

Setting Up Your VHOST
=====================

The following is a sample VHOST you might want to consider for your project.

<VirtualHost *:80>
   DocumentRoot "C:/ZendFramework/AlegraZFEXTJSMVCProject/public"
   ServerName .local

   # This should be omitted in the production environment
   SetEnv APPLICATION_ENV development

   <Directory "C:/ZendFramework/AlegraZFEXTJSMVCProject/public">
       Options Indexes MultiViews FollowSymLinks
       AllowOverride All
       Order allow,deny
       Allow from all
   </Directory>

</VirtualHost>