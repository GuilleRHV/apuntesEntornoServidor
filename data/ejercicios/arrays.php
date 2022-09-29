<?php

//Los elementos son heterogeneos, es decir los elementos pueden ser de cualquier tipo

$miarray = array(1,"hola",3.5,false);

echo "<br>El elemento 2 del array: " . $miarray[2];
//Mostrar
    //foreach, var dumpo, print_r
    foreach($miarray as $elmio){
        echo "<br>El elemento es : " . $elmio;
    }
   
    print_r($miarray);
    echo"<br>";
    var_dump($miarray);
    echo"<br>";
    //Para ver el numero de elementos de un array
    echo "Longitud del array: " . count($miarray) . "<br>";
//Otra forma de crear un array
$array2=[2,3,4,6,3];
print_r($array2);
echo"<br>";
//Para multiplicarlo por 2
    //¡¡¡¡IMPORTANTE DESPUES DEL AS USAR & PARA CAMBIARLO, SI NO LO USAMOS SOLO LO MOSTRARÁ, NO LO CAMBIARÁ!!!!
foreach($array2 as &$elemento){
    $elemento= $elemento * 2;
}
print_r($array2);
echo"<br>";
//Para añadir un elemento a un array
$array2[]=12;
print_r($array2);