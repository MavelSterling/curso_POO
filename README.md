# curso_POO

Algunos ejercicios del curso de programación orientada a objetos: POO de Platzi

# Orientación a Objetos

 Surge a partir de los problemas que tenemos y necesitamos plasmar en código

## POO

La ****Programación Orientada a Objetos**** viene de una filosofía o forma de pensar que es la **Orientación a Objetos** y esto surge a partir de los problemas que necesitamos plasmar en código.

Es analizar un problema en forma de objetos para después llevarlo a código, eso es la **Orientación a Objetos**.

Un **paradigma** es una teoría que suministra la base y modelo para resolver problemas. La paradigma de Programación Orientada a Objetos se compone de 4 elementos:

* Clases -> Es la estructura de los objetos del mismo tipo.
* Atributos -> Son las propiedades que definen a la clase.
* Métodos -> Son acciones que puede realizar la clase.
* Objetos -> Representación de un elemento de la vida real.

Y 4 Pilares:

* Encapsulamiento -> Protege la información de manipulaciones no autorizadas
* Abstracción -> Es el proceso de definir los atributos y los métdos de una clase.
* Herencia -> Las clases hijo heredan atributos y métodos de las clases padre
* Polimorfismo -> Da la misma orden a varios objetos para respondan de diferentes maneras.

Visual Studio Code, el editor de código multiplataforma de Microsoft, es uno de los preferidos por muchos desarrolladores.

Visual Studio permite a los desarrolladores crear sitios y aplicaciones web, así como servicios web en cualquier entorno compatible con la plataforma .NET.

Algunos de los lenguajes de programación Orientados a Objetos son:

* **Java** :
  – Orientado a Objetos naturalmente
  – Es muy utilizado en Android
  – Y es usado del lado del servidor o Server Side
* **PHP**
  – Lenguaje interpretado
  – Pensado para la Web
* **Python**
  – Diseñado para ser fácil de usar
  – Múltiples usos: Web, Server Side, Análisis de Datos, Machine Learning, etc
* **Javascript**
  – Lenguaje interpretado
  – Orientado a Objetos pero basado en prototipos
  – Pensado para la Web
* C#
* Ruby
* Kotlin

## Diagramas de Modelado

 **OMT** : Object Modeling Techniques. Es una metodología para el análisis orientado a objetos.

**UML** : Unified Modeling Language o Lenguaje de Modelado Unificado. Tomó las bases y técnicas de OMT unificándolas. Tenemos más opciones de diagramas como lo son Clases, Casos de Uso, Objetos, Actividades, Iteración, Estados, Implementación.

## OMT

Esta técnica nos propone es que una vez que tenemos nuestro análisis, ya tenemos identificado objetos, sus atributos, sus métodos y ya le hemos puesto nombre a cada objeto, la técnica nos dice que debemos empezar a plasmar cada objeto en un recuadro, y pongamos los atributos y métodos en el recuadro, y con una serie de conectores vamos a definir una relación que tiene un objeto con otro.

## UML

Con está técnica podemos tener más opciones de diagramas y podemos modelar:

* Clases
* Casos de uso
* Objetos
* Actividades
* Iteración
* Estados
* Implementación

Una vez ya tengamos un análisis con nuestros objetos, atributos y métodos vamos terminar plasmándolo en algún diagrama.

UML significa Unified Modeling Language el cual es un lenguaje estándar de modelado de sistemas orientados a objetos.

Esto significa que tendremos una manera gráfica de representar una situación, justo como hemos venido viendo. A continuación te voy a presentar los elementos que puedes utilizar para hacer estas representaciones.

Las clases se representan: Nombre de la clase, Atributos y Operación.

Estos son los niveles de **visibilidad** que puedes tener:

**-** private
**+** public
**#** protected
**~** default

Una forma de representar las relaciones que tendrá un elemento con otro es a través de las flechas en UML

Asociación: `-->`

Como su nombre lo dice, notarás que cada vez que esté referenciada este tipo de flecha significará que ese elemento contiene al otro en su definición. La flecha apuntará hacia la dependencia.

Herencia: --I>

Siempre que veamos este tipo de flecha se estará expresando la herencia.
La dirección de la flecha irá desde el hijo hasta el padre.

Agregación: 

Este se parece a la asociación en que un elemento dependerá del otro, pero en este caso será: Un elemento dependerá de muchos otros. Aquí tomamos como referencia la multiplicidad del elemento. Lo que comúnmente conocerías en Bases de Datos como Relaciones uno a muchos.

Composición:

Este es similar al anterior solo que su relación es totalmente compenetrada de tal modo que conceptualmente una de estas clases no podría vivir si no existiera la otra.

## Objetos

Los Objetos son aquellos que tienen propiedades y comportamientos, también serán sustantivos.

* Pueden ser Físicos o Conceptuales

Las **Propiedades** también pueden llamarse atributos y estos también serán sustantivos. Algunos atributos o propiedades son nombre, tamaño, forma, estado, etc. Son todas las características del objeto.

Los **Comportamientos** serán todas las operaciones que el objeto puede hacer, suelen ser verbos o sustantivos y verbo. Algunos ejemplos pueden ser que el usuario pueda hacer login y logout.

Una **Clase** es el modelo por el cual nuestros objetos se van a construir y nos van a permitir generar más objetos.

Analizamos Objetos para crear ****Clases** . Las** **Clases** son los modelos sobres los cuales construiremos nuestros objetos.

**Abstracción** es cuando separamos los datos de un objeto para generar un molde.

La **modularidad** va muy relacionada con las clases y es un principio de la Programación Orientado a Objetos y va de la mano con el Diseño Modular que significa dividir un sistema en partes pequeñas y estas serán nuestros módulos pudiendo funcionar de manera independiente.

La **modularidad** de nuestro código nos va a permitir

* Reutilizar
* Evitar colapsos
* Hacer nuestro código más mantenible
* Legibilidad
* Resolución rápida de problemas

Una buena práctica es separando las clases en archivos diferentes.
