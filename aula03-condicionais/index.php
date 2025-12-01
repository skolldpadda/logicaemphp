<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //condicional if
    if(1 < 2){
        echo " O número 1 é menor <br>";
    }

    $idade = 18;

    if($idade >= 18){
        echo "Você é maior de idade. <br>";
    }

    //condicional else

    $a = 10;
    $b = 14;

    if( $a == $b){
        echo "As variáveis são iguais. <br>";
    } else {
        echo "As variáveis são diferentes. <br>";
    }

    //condicional elseif
    $idadepessoa = 25;

    if($idadepessoa <13){
        echo "Você é uma criança. <br>";
    } else if ($idadepessoa >= 20 && $idadepessoa <=59){
        echo "Você é um adulto. <br>";
    } else {
        echo "Você é idoso. <br>";
    }


    //condicional switch
    $numero = 3;

    switch (true){
        case($numero < 5);
            echo "O número é menor a 5. <br>";
        break;
        case($numero == 5);
            echo "O número é igual a 5. <br>";
        break;
        case($numero > 5);
            echo "O número é maior a 5. <br>";
        break;
        default;
            echo "Número não identificado!. <br>";
        break;
    }

    $animal = "gato";

    switch ($animal){
        case "cachorro":
            echo "É um cachorro. <br>";
        break;
        case "peixe":
            echo "É um peixe. <br>";
        break;
        default:
            // Só executa se nenhum case anterior bateu
            echo "Animal não encontrado!<br>";
        break;
    }
?>

</body>
</html>