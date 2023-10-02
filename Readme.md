#  Aarón Curro Solla 
## Ejercicios php tema 2
1. Realizar un programa en el que se declare una variable de cada tipo de dato; Que se utilicen las comillas simples y dobles; que se concatenen varias cadenas; que se concatenen varias cadenas con sus valores correspondientes; que se realice la salida de una de las cadenas mediante echo y mediante print; que se declare una constante (mediante define y const); que se utilice var_dump(); donde se realice una conversión explícita de tipos; donde haga uso de referencias.
2. Realizar el programa “Hola Mundo” pero añadiendo algo de estilo en PHP.
3. Realizar el programa “Hola Mundo” que contenga un enlace con el texto “Ir a la siguiente página” que abrirá una segunda página que dirá “Esta es la segunda página”.
4. Realizar un programa en PHP que muestre un valor al azar entre 1 y 1000. Para ello puedes utilizar la función rand(valor_inicio, valor_final).
5. Realizar un programa en PHP que muestre un valor al azar entre 1 y 6 con las caras de un dado. Para ello puedes utilizar la función rand(valor_inicio, valor_final) y realizar la captura de seis imágenes de un dado para hacerlo más visual.
6. Realizar un programa que cada vez que se ejecute muestre tu nombre a un tamaño elegido al azar entre 200% y 700%.
7. Crea y muestra un array con los números pares entre 1 y 100.
8. Crea un array de 5 números aleatorios entre 20 y 30, y muestralo.

9. Declara un array con los valores: 1, 2, ‘antonio’, 200, ‘pepe’. Recorre el array empezando por el último elemento, ‘pepe’, mostrando cada elemento en una línea separada.
10. Recibes una string de valores separados por coma. Debes eliminar del string los valores duplicados, mostrando el valor inicial y el valor tras eliminar los duplicados. Por ejemplo, para la siguiente cadena “1,2,3,2,4,1,5" se mostrará: 
1,2,3,2,4,1,5
1,2,3,4,5
11. Dado un array de números, un número es “líder” si su valor es mayor que la suma detodos los números que se encuentran a su derecha. Escribir un programa que dado unarray de números, devuelva otro array conteniendo los números líderes.
Ejemplos:
• leaders ([1, 2, 3, 4, 0]) ==> return [4]
• leaders ([16, 17, 4, 3, 5, 2]) ==> return {17, 5, 2]
• leaders ([5, 2, -1]) ==> return [5, 2]
• leaders ([0, -1, -29, 3, 2]) ==> return [0, -1, 3, 2]
12. El saltamonte.
Desarrollar un programa que recibe una cadena de valores enteros separados por coma que representa los “saltos". El mismo deberá mostrar el número en la posición actual ya continuación saltar tantas posiciones como el número indicado, mostrando en esas posiciones _ (underscore) y volviendo a empezar. En el caso de mostrar un 0, se finaliza.
Por ejemplo, saltos=2,3,4,1,5,3,6,7,8,1,10,0,20 se mostraría:
2,_,_,1,_,3,_,_,_,1,_,0,