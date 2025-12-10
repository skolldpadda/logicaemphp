<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    //while

    echo "<h3> - While </h3>";
    $i = 1;
    while ($i <= 5) {
        echo $i . "<br>"; //imrpime o valor de $i e pula para a proxima linha
        $i ++;
    }

    echo "<br>";

    $j = 2;
    while ($j <= 10){
        echo $j . "<br>"; //imprime os números pares
        $j += 2; // Incrementa de 2 em 2
    }

    echo "<br>";


    // Do While - Faça enquanto

    echo "<h3> - Do While </h3>";
    $m = 1;
    do {
        echo $m . "<br>";
        $m ++;
    } while ($m <= 5);

    echo "<br>";


    // For

    echo "<h3> - For </h3>";
    for ($n = 1; $n <= 5; $n++){
        echo $n . "<br>";
    }

    echo "<br>";

    for ($p = 1; $p <=5; $p++){
        echo "O quadrado de $p é " . ($p * $p) . "<br>";
    }

    echo "<br>";

    echo "<h3> - Foreach </h3>";
    $frutas = ["Maça", "Banana", "Laranja", "Uva"];
    Foreach ($frutas as $fruta) {
        echo $fruta . "<br>";  //Imprime o nome de cada fruta
    }

    echo "<br>";

    $idades = [
        "João" => 25,
        "Maria" => 30,
        "Pedro" => 22
    ];

    foreach ($idades as $nome => $idade){
        echo "$nome tem $idade anos. <br>"; //Exibe nome e idade
    }


?>
</body>
</html>