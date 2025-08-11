## ISURGOB

### Sistema Integrado de Gobierno
---
El ISURGOB (Sistema Integrado de Administraci�n Municipal), comprende la sistematizaci�n de un conjunto de procesos Administrativos, Tributarios y Financieros.

El Sistema Integrado de Gobierno esta basado en el concepto de c�digo abierto entendido como un modelo de desarrollo de software basado en la colaboraci�n abierta, enfocada en los beneficios pr�cticos (acceso al c�digo fuente) para los gobiernos.

ISURGOB re�ne la experiencia de software de un equipo de consultores especialista que ha desarrollado sistemas de administraci�n tributaria y financiera para gobiernos en los �ltimos 25 a�os en el pa�s y la regi�n, actualizando constantemente la tecnolog�a para obtener una de las herramientas m�s s�lidas e integradas que se pueden encontrar en el mercado.

Nuestro Sistema de Gesti�n Tributaria profundiza el aprovechamiento integral de las nuevas Tecnolog�as de la Informaci�n y la Comunicaci�n (TICs), consolidando un modelo de gesti�n tributaria eficiente, �gil, productivo, seguro y transparente en las fases operativo/funcionales de la administraci�n p�blica, para cumplir con eficacia las tareas cotidianas y fortalecer la relaci�n con los contribuyentes y/o responsables.    

Esto permite:
- Mejor eficiencia en la obtenci�n y aplicaci�n de los Recursos P�blicos.

- La generaci�n de informaci�n oportuna y confiable, indispensable para la toma de decisiones, sobre la situaci�n de cada objeto imponible y contribuyente del Municipio y dem�s relaciones funcionales de la operatoria.


### Subsistemas
---
Est� integrado por los siguientes SubSistemas:

- ISURGOB Tributario

El Sistema de Gesti�n Tributaria es un complejo y avanzado conjunto de sistemas de informaci�n, totalmente integrados, dise�ados para la gesti�n y administraci�n, que funciona como una base integradora de gesti�n.

Se basa en el concepto de Contribuyente �nico y Cuenta Corriente �nica.

Entre los m�dulos que se incluyen podemos mencionar: administraci�n de Contribuyentes y Objetos Imponibles, administraci�n de Cuenta Corriente �nica, emisi�n de Tasas peri�dicas, eventuales, Generaci�n de Declaraciones Juradas de Actividades Comerciales, Manejo de Agentes de Retenci�n y Percepci�n, generaci�n de Facilidades y Planes de Pago, gesti�n de Cobranza on-line y off-line, Cumplimiento Fiscal, Ejecuci�n Judicial y Servicios al Ciudadano.

A su vez permite la generaci�n de diferentes reportes y comprobantes para el pago de las diferentes tasas y contribuciones que operan en el Organismo en base a las normativas vigentes.
(https://github.com/isurgob/isurgob/tree/master/docs/samtrib.gif)

- ISURGOB Seguridad

El Subsistema de Seguridad es el encargado de gestionar los usuarios, perfiles y permisos de acceso a los distintos Subsistemas. Adem�s permite manejar los m�dulos de cada Subsistema. Tambi�n dispone de algunas auditor�as, en especial en lo que se refiere a control de acceso, accesos fallidos, blanqueos de clave, control de accesos m�ltiples, etc. 
F�sicamente de ubica en una carpeta distinta del Subsistema Tributario, aunque comparte algunas librer�as comunes de todos los Subsistemas. 
El Subsistema Tributario posee todos los m�dulos detallados de la Administraci�n Tributaria. De acuerdo a los permisos del usuario definidos en el Subsistema de Seguridad se habilitan las opciones disponibles.
(https://github.com/isurgob/isurgob/tree/master/docs/samseg.gif)

### Caracter�sticas del Sistema
---
La arquitectura de la soluci�n posee las siguientes caracter�sticas:
- Arquitectura Web Enabled
- Patr�n de dise�o MVC
- Interoperabilidad
- Escalabilidad, Confiabilidad y Fiabilidad
- Alto grado de Parametrizaci�n
- Integrac�n con otros sistemas mediante el uso de WebServices


### Servicios
---
Que es lo que hacemos y lo que brindamos
- M�ltiples canales de acceso
- Apoyo a la Infraestructura necesaria
- Mejora en la recaudaci�n
- Sistema intuitivo y din�mico
- Ajustes totalmente parametrizables
- Entrenamiento y capacitaci�n.


### Gu�a de instalaci�n
---
1. Prerequisitos
-   Sistema Operativo de Servidor: preferentemente Linux Server kernel versi�n 4.4 o superior, distribuciones recomendadas Debian/Ubuntu
-	Base de Datos: PostgreSQL 9.4 o superior
-	Servidor Web: Apache 2.4 o superior
-	Lenguaje: PHP 7.0
-   Librer�as PHP adicionales: 
    -   php-mbstring
	-   php-xml
	-   php-mcrypt
	-   php-gd
	-   php-zip
	-   pdo-pgsql
-   Ejemplo: $ sudo -E apt-get -yq --no-install-suggests --no-install-recommends install php7.0-xml php7.0-mbstring php7.0-mcrypt php7.0-gd php7.0-zip php7.0-pgsql

2. Instalaci�n de la Base de Datos
-   Soporte para PostgreSQL.

Para instalar las bases de datos es necesario cargar los scripts en las herramientas espec�ficas de las bases de datos como psql o PgAdmin

 -  Instalaci�n en PostgreSQL
 -  Abrir los script ubicados en la carpeta "db".
 -  Ejecutar mediante psql. El fichero Readme.txt contiene las instrucciones espec�ficas.

3. Descarga e Instalaci�n del C�digo
-   Descarga de c�digo desde el Repositorio de github
    -   $ wget https://github.com/isurgob/isurgob/archive/master.zip
-   Descomprimir el c�digo del paso anterior en el directorio de publicaci�n de Apache
    -   $ cd /var/www/html o similar seg�n la distriuci�n a utilizar.
	-   $ unzip master.zip.

4. Puesta en Marcha
Una vez instalado, tipear en su navegador Web http://ip_dns/sam.
Primeros Pasos en la imagen: (https://github.com/isurgob/isurgob/tree/master/docs/ISURGOB-Instala.gif)

5. Configuraci�n Inicial
En forma previa a la utilizaci�n de los m�dulos del Sistema, es necesario precargar los datos auxiliares y de configuraci�n en funci�n de las normativas propias del organismo.
Cada municipio tendr� su propia reglamentaci�n en materia de Tributos, Tasas, Contribuciones, Resoluciones y dem�s.
Asimismo, las tipolog�as y categorizaciones respecto de los Objetos Imponibles y otros m�dulos son propias de cada organismo en particular y es importante su ingreso desde el �rea de configuraciones, cito en el encabezado de la p�gina.
Accesos desde la barra superior del Sistema: (https://github.com/isurgob/isurgob/tree/master/docs/sam-config.jpg)

6. Vinculaci�n de ISURGOB Tributario con el GIS

-   Web Service: La vinculaci�n con otros sistemas se podr� llevar a cabo por medio de WebService.
-   Nomenclatura: La clave un�voca de todo Registro Gr�fico se centra en la nomenclatura parcelaria.
-   Solicitud de Informaci�n: A partir de la identificaci�n de una parcela en el GIS, se podr� invocar una funci�n definida en el WebService de ISURGob Tributario para recuperar informaci�n alfanum�rica a modo de consulta.
-   Desde el Formulario de consulta de inmueble, se dispondr� de link que permite el acceso al GIS. El acceso se realiza mediante URL, la cual se configura dentro del M�dulo de Configuraci�n. En la URL se env�a como par�metro la Nomenclatura del inmueble a localizar.
-   Los m�todos que se proveen son los siguientes:
    a)	Alta, Baja y modificaci�n unitaria de inmuebles:
    b)	Actualizaci�n de Valuaciones: Permitir� actualizar la informaci�n asociada a las valuaciones de inmuebles y mejoras, incluyendo todos los elementos necesarios, tales como: superficie, zona, coeficiente, valor b�sico, categor�a, etc. Este m�todo ser� invocado por el Sistema de Catastro, ante un proceso de reval�o, ya sea parcial o total.
    c)	Sem�foro de deuda: Consistir� en un sem�foro que indicar� si se pueden realizar gestiones sobre un inmueble en el Sistema de Catastro, de acuerdo al estado de deuda del mismo, teniendo en cuenta los par�metros para determinar la misma. El Sistema Comarcal incluir� las llamadas a este �sem�foro� cuando se inicien tr�mites que cambien el estado del inmueble (Planos de obra, declaraciones de mejoras, etc.)
-   Funciones y Aspectos T�cnicos: (https://github.com/isurgob/isurgob/tree/master/docs/InterfacesGIS.pdf)


### Arquitectura
---
El modelo se enmarca en por lo menos dos principios de la gesti�n p�blica de la calidad: principio de continuidad en la prestaci�n de servicios, que propone que los servicios p�blicos se prestar�n de manera regular e ininterrumpida, previendo las medidas necesarias para evitar o minimizar los perjuicios que pudieran ocasionarle al ciudadano en las posibles suspensiones del servicio. Y el principio de evaluaci�n permanente y mejora continua que propone que una gesti�n p�blica de calidad es aquella que contempla la evaluaci�n permanente, interna y externa, orientada a la identificaci�n de oportunidades para la mejora continua de los procesos, servicios y prestaciones p�blicas centrados en el servicio al ciudadano y para resultados, proporcionando insumos para la adecuada rendici�n de cuentas.
- Patr�n de Dise�o MVC
- Entorno Visual
- Usabilidad y Accesibilidad
- Ayuda en l�nea
- Interoperabilidad
- Escalabilidad y extensibilidad
- Alto grado de Parametrizaci�n


### Tecnolog�as
---
Para obtener las ventajas competitivas de la soluci�n multiprop�sito deseada, es b�sico contar con las herramientas de tecnolog�a necesarias.
-	Arquitectura Web Enabled
-	Base de Datos: PostgreSQL como servidor de Base de Datos Relacional
-	Servidor Web: Apache 2.4
-	Librer�as para interfase: BootStrap
-	Lenguaje de Desarrollo: PHP 7.0
-	Framework Yii 2.0
Las PC clientes, deber�n disponer de un navegador Web de �ltima generaci�n.


### Autor/es
---
- Gabriel Martinez (gabrielmart@gmail.com)
- Sandra Martinez (sandracmart@gmail.com)
- ISUR


### Informaci�n adicional
---
Se deber� contar con un Servidor de Base de Datos y Aplicaciones, preferentemente en Linux.
Se podr� migrar la informaci�n existente actualmente.


### Licencia 
---
[LICENCIA](https://github.com/isurgob/isurgob/blob/master/LICENSE.md)


## Limitaci�n de responsabilidades

ISUR, los autores mencionados, y el BID no ser�n responsables, bajo circunstancia alguna, de da�o ni indemnizaci�n, moral o patrimonial; directo o indirecto; accesorio o especial; o por v�a de consecuencia, previsto o imprevisto, que pudiese surgir:

i. Bajo cualquier teor�a de responsabilidad, ya sea por contrato, infracci�n de derechos de propiedad intelectual, negligencia o bajo cualquier otra teor�a; y/o

ii. A ra�z del uso de la Herramienta Digital, incluyendo, pero sin limitaci�n de potenciales defectos en la Herramienta Digital, o la p�rdida o inexactitud de los datos de cualquier tipo. Lo anterior incluye los gastos o da�os asociados a fallas de comunicaci�n y/o fallas de funcionamiento de computadoras, vinculados con la utilizaci�n de la Herramienta Digital.
