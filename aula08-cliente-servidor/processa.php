<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #e8e8e8;
            padding: 0;
            margin: 0;
        }

        .container{
            width: 450px;
            margin: 50px auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align: center;
            color: #444;
        }

        .item{
            margin-bottom: 15px;
        }
        
        .item span{
            font-weight: bold;
        }

        a{
            display: block;
            margin-top: 20px;
            text-align: center;
            padding: 12px;
            background: #0066cc;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover{
            background: #004c99;
        }

    </style>

</head>
<body>
    <div class="container">
    <h2>Dados Recebidos<h2>

    <?php
        //Recebendo e filtrando dados
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
        $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

    <div class="item">
        <span>Nome:</span> <?= $nome?>
    </div>

    <div class="item">
        <span>Email:</span> <?= $email?>
    </div>

    <div class="item">
        <span>Telefone:</span> <?= $telefone?>
    </div>

    <div class="item">
        <span>Menssagem:</span> <?= nl2br($mensagem)?>
    </div>

    <a href="index.html">Voltar </a>

</body>
</html>