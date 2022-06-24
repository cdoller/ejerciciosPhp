<?php
    #Funcion para cargar hasta $max numeros en un arreglo de 1 en 1
    function cargarNumeros(&$arr, int $max){
        for($i = 1; $i<=$max; $i++){
            array_push($arr,$i);
        }
    }
    
    
    /*Definir un array con los días de la semana y recorrer imprimiendo cada uno de los
    días con la posición o índice que corresponde.
        a. Ejemplo de impresión: “EL valor de la posición [0] es [Lunes]
        b. Recordar que para recorrer un array tenemos el for y foreach y echo para
        mostrar el elemento*/

    #definimos arreglo de dias
    $days = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
    $i = 0; #contador para ver la posicion dentro del arreglo
    #recorremos el arreglo con un foreach
    foreach($days as $day){
        echo "El valor de la posicion [$i] = $day" . "<br>";
        $i++;
    }

    /*Definir un array con los números enteros del 1 al 20, recorrer el array y mostrar los
    números que sean múltiplos de 2.
        a. Recordar que para recorrer un array tenemos el for y foreach y echo para
        mostrar el elemento.*/

    #definimos un arreglo para numeros del 1 al 20
    $numbers1to20_0 = array();
    
    #cargamos los numeros con la funcion definida al comienzo
    cargarNumeros($numbers1to20_0,20);

    echo "<br>" . "Numeros multiplos de 2, entre el 1 y el 20: ";
    #recorremos el arreglo para imprimir solo los multiplos de 2;
    foreach($numbers1to20_0 as $ind){
        if($ind%2 == 0){
            echo "[$ind] ";
        }
    }

    /*Definir un array con los números enteros del 1 al 20, recorrer el array y mostrar los
    números que sean múltiplos de 2 y de 5.
        a. Recordar que para recorrer un array tenemos el for y foreach y echo para
        mostrar el elemento.*/
    $numbers1to20_2 = array();
    echo "<br><br>";
    cargarNumeros($numbers1to20_2,20);
    echo "Numeros multiplos de 2 y 5, entre el 1 y el 20: ";
    foreach($numbers1to20_2 as $index){
        if($index%2 == 0 && $index%5 == 0){
            echo "[$index] ";
        }
    }

    /*Definir un array de números enteros, recorrer el array y realizar la siguientes
    operaciones:
        a. Si el número es par elevar al cuadrado(Expresión exponencial)
        b. Si el número es impar restar el elemento anterior al número impar. por
        ejemplo si es el 3, debo hacer la resta de 3 menos 2.
        c. Recordar que para recorrer un array tenemos el for y foreach y echo para
        mostrar el elemento y pow para hacer la operación exponencial.*/

    #ACLARACION: este ejercicio resuelve para numeros consecutivos unicamente
    $numbers1toX = array();
    echo "<br><br>";
    cargarNumeros($numbers1toX, 30);
    #numero anterior me sirve para cumplir con la parte b del programa
    $numeroAnterior = 0;
    foreach($numbers1toX as $i){
        if($i % 2 == 0){
            $aux = $i * $i;
            echo $i . "=>" . $aux . "<br>";
        }
        else{
            $aux = $i - $numeroAnterior;
            echo $i . "=>" . $aux . "<br>";
        }
        $numeroAnterior = $i;
    }

    /*Elaborar un programa para imprimir una tabla con los cuadrados y los cubos de los
    20 primeros números enteros.
        a. Recordar que para recorrer un array tenemos el for y foreach y echo para
        mostrar el elemento.*/
    $numbers1to20_3 = array();
    cargarNumeros($numbers1to20_3, 20);
    echo "<br>";
    foreach($numbers1to20_3 as $i){
        echo $i . " - Al cuadrado: " . $i*$i . " - Al cubo: " . $i*$i*$i . "<br>";
    }
?>