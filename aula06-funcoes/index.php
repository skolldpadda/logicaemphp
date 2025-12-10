<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    function saudacao(){
    echo "Olá, Boas-vindas ao PHP!";
    }


    saudacao(); //Chamando a função
    echo "<br>";
    saudacao();
    echo "<br>";

    echo "<br>";

    function somar ($a, $b){
        return $a + $b;
    }

    $resultado = somar(5,4); // Chamando a função e passando os argumentos
    echo "Resultado da soma: " . $resultado;

    echo "<br>";
    echo "<br>";


    function saudacaoPersonalizada($nome = "Visitante", $nome2 = "Visitante 2"){
        echo "Olá, $nome! e $nome2 Boas-vindas ao nosso site!";
    }

    saudacaoPersonalizada(); //Chamando sem argumento, usa o valor padrão
    echo "<br>";
    saudacaoPersonalizada("Carlos","João"); //Chmando com argumento

    echo "<br>";
    echo "<br>";

    function encontrarMaiorValor($array){
        return max($array); //Função max() encontra o maior valor no array
    }

    $valores = [2, 5, 9, 1, 3, 19];
    echo "O maior valor é: " . encontrarMaiorValor($valores);

?>    
</body>
</html>