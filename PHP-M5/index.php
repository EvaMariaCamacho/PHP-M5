<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<hr>";
        echo "<strong>Nivell 1 (Exercici 1)</strong>";
        echo "<hr>";
        $integer = 50; // Variable interger
        $double = 50.5; //variable double
        $string = "Buenas tardes"; // variable string
        $boolean = true;       // variable boolean
        echo "Variable interger";
        echo " &nbsp";
        echo "<strong>$integer</strong>";
        echo "<br>";
        echo "Variable double";
        echo " &nbsp";
        echo "<strong>$double</strong>" ;
        echo "<br>";
        echo "Variable string";
        echo " &nbsp";
        echo "<strong>$string</strong>";
        echo "<br>";
        echo "Variable boolean";
        echo "&nbsp";
        echo "<strong>$boolean</strong>";
        ?>
        
        <?php
        echo "<hr>";
        echo "<strong>Nivell 1 (Exercici 2)</strong>";
        echo "<hr>";
        $string1 = "Buenos dias";  // variable string 1
        $string2 = "Buenas tardes";  // variable string 2
        $saludo = "mañana"; // variable de la concatenación 
        echo $string1.",que tengas una buena $saludo"; // resultado de la concatenación 
        echo "&nbsp"; 
        echo "<br>";
        echo "Longitud string 1 ="; 
        echo "&nbsp";
        echo strlen($string1); // resultado longitud 
        echo "<br>";
        echo "Longitud string 2 ="; 
        echo "&nbsp";
        echo strlen($string2); // resultado longitud
        echo "<br>";
        echo "Longitud suma string 1 y string 2 ="; 
        echo "&nbsp";
        echo strlen($string1)+strlen($string2); // resultado de la suma de las dos longitudes
        echo "<br>";
        echo "Orden inverso string 1 ="; 
        echo "&nbsp";
        echo strrev($string1); // resultado de invertir caracteres
        echo "<br>";
        echo "Orden inverso string 2 ="; 
        echo "&nbsp";
        echo strrev($string2); // resultado de invertir caracteres
        echo "<br>";
        echo "Concatenación ="; 
        echo "&nbsp";
        $salutacion=$string1.$string2."<br>"; // resultado de concatenacion
        echo "$salutacion"
        ?>
        
        <?php
        echo "<hr>";
        echo "<strong>Nivell 1 (Exercici 3)</strong>";
        echo "<hr>";
        define("minombre", "Eva María Camacho"); 
        echo minombre;
        ?>
        
        <?php
        echo "<hr>";
        echo "<strong>Nivell 2 (Exercici 1)</strong>"; // exercicio nivell 2 exercici 1
        echo "<hr>";
        $integers1 = array ('1', '2', '3', '4', '5');
        $integers2= array ('6', '7', '8');
        echo "Los numeros del integers1:" .$integers1[0].",".$integers1[1].",".$integers1[2].",".$integers1[3].",".$integers1[4].".";
        echo "Los numeros del integers2:" .$integers2[0].",".$integers2[1].",".$integers2[2].".";
        echo "<hr>";
        echo "<strong>Nivell 2 (Exercici 2)</strong>"; // exercicio nivell 2 exercici 2
        echo "<hr>";
        $integers2 [] = '9'; // añadimos un valor más 
        $integers2 [] = '10';
        $integers2 [] = '11';
        echo "Añadimos los numeros del integers2:" .$integers2[3].",".$integers2[4].",".$integers2[5].".";
        echo "<hr>";
        echo "<strong>Nivell 2 (Exercici 3)</strong>"; // exercicio nivell 2 exercici 3
        echo "<hr>";
        $resultado = array_merge($integers1, $integers2);
        echo "Tamaño de las dos arrays es:".count($resultado, COUNT_RECURSIVE); // resultado de la longitud de las dos arrays
              
        ?>
        <?php
        echo "<hr>";
        echo "<strong>Nivell 3 (Exercici 1)</strong>"; // exercicio nivell 3 exercici 1
        echo "<hr>";
        print_r(array_values($resultado));
        echo "<hr>";
        echo "<strong>Nivell 3 (Exercici 1)</strong>"; // exercicio nivell 3 exercici 2
        echo "<hr>";
        $x = 1;
        $y = 3;
        $n = 4;
        $m = 5;
        
        echo "Valor de las variables=" .$x, $y."<br>"; // operaciones con las variables x - y
        echo "Suma =". $x + $y."<br>";
        echo "Resta =". $x - $y."<br>";
        echo "Producto =". $x * $y."<br>";
        echo "División =". $x / $y."<br>";
        echo "Moduls =". $x % $y."<br>";
        
        echo "Valor de las variables=" .$n, $m."<br>"; // operaciones aritmetica con las variables n - m     
        echo "Suma =". $n + $m."<br>";
        echo "Resta =". $n - $m."<br>";
        echo "Producto =". $n * $m."<br>";
        echo "División =". $n / $m."<br>";
        echo "Moduls =". $n % $n."<br>";
        
        echo "Doble de la variable x=".$x * (2)."<br>";
        echo "Doble de la variable y=".$y * (2)."<br>";
        echo "Doble de la variable n=".$n * (2)."<br>";
        echo "Doble de la variable m=".$m * (2)."<br>";
        echo "Suma de variables=" .$x + $y + $n + $m."<br>";
        echo "Producto de variables=" .$x % $y % $n % $m."<br>";
        ?>
    </body>
</html>
    
