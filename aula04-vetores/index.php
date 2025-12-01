<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //Criação de Vetor/Array indexado
    $array = [10,20,30,40];

    //Exibindo o array
    echo "Array original: ";
    print_r($array); //print_r() exibe o array de forma legivel
    echo "<br>";

    // Adicionando um valor ao final do array
    $array[] = 50;

    // Exibindo o array atualizado
    echo "Array após adicionar 50: ";
    print_r($array);

    echo "<br>";

    //Alterando o valor na posição 1 para 25
    $array[1] = 25;
    echo "Array após alterar indice 1: ";
    print_r($array);

    echo "<br>";
    
    //Removendo o valor na posição 2
    unset($array[2]);
    echo "Array após excluir indice 2: ";
    print_r($array);

    echo "<br>";

    //Reorganizando os indices do array
    $array = array_values($array);

    //Exibindo o array após remover o valor
    echo "Array após remover o valor na posilção 2: ";
    print_r($array);

    echo "<br>";

    //adicionando vários valores
    array_push($array, 60, 3, 22);
    print_r($array);

    echo "<br>";

    //Ordenando o vetor
    sort($array);

    //exibindo o vetor ordenado
    echo "Array após ordenar os valores: ";
    print_r($array);

    echo "<br>";

    //Criando um array associativo
    $associativo = [
        "nome" => "João",
        "idade" => 30,
        "cidade" => "São Paulo"
    ];

    //Exibindo o array associativo
    echo "Array associativo: ";
    print_r($associativo);

    echo "<br>";
    
    //Criando um array multidimensional (matrizes)
    $multidimensional = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    //Exibindo o valor na posição [1][2] (4, 5, 6) -> 6
    echo "Valor na posição [1][2] " . $multidimensional [1][2];
    
    echo "<br>";

    //Função array_merge()
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];

    //Mesclando dois arrays
    $novo_array = array_merge($array1, $array2);

    //Exibindo o array resultante
    echo "Array mesclado: ";
    print_r($novo_array);

    echo "<br>";

    //Função array_search()
    $numeros = [2, 4, 6, 30, 8];

    //Procurando o valor 30 no array
    $indice = array_search(30, $numeros);

    //Exibindo o indice onde o valor foi encontrado
    echo "O índice do valor 30 é: " . $indice;
    echo "<br>";
    print_r($numeros);

    echo "<br>";

    //Função in_array()
    //VErificando se o valor 25 está no array
    $existe = in_array(25, $array);

    //Exibindo se o valor existe ou não
    if($existe) {
        echo "O valor 25 está no array. ";
    } else {
        echo "O valor 25 não está no array. ";
    }


?>
</body>
</html>