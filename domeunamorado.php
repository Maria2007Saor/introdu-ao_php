<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
    <style>
        body {
            background: rgb(238, 174, 202);
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 100, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            color: white;
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <?php
    echo "Olá, mundo!";
    ?>


    <?php
    $nome = "João";
    $nome = "Maria"; // agora $nome vale "Maria"
    ?>



    <?php
    $notas = [8, 7.5, 6, 9, 5.5, 8, 7, 6.5, 9.5, 10];
    $media = array_sum($notas) / count($notas);
    echo "3. Média do aluno em 10 disciplinas: $media<br><br>";
    ?>




    <?php
    $cond1 = true;
    $cond2 = false;

    if ($cond1 || $cond2) {
        echo "4. verdadeiro<br><br>";
    }
    ?>




    <?php
    $valor1 = 19;
    $valor2 = 15;


    if ($valor1 < $valor2) {
        echo ("verdadeiro");
    }else{
        echo("falso");
    }
    ?>


<?php

$nota1 = 8.5;
$nota2 = 7.0;

// Calculando a média
$media = ($nota1 + $nota2) / 2;

// Mostrando notas e média
echo "Nota 1: $nota1<br>";
echo "Nota 2: $nota2<br>";
echo "Média: $media<br>";

// Verificando o conceito com base na média
if ($media >= 9.0 && $media <= 10.0) {
    $conceito = 'A';
} elseif ($media >= 7.5 && $media < 9.0) {
    $conceito = 'B';
} elseif ($media >= 6.0 && $media < 7.5) {
    $conceito = 'C';
}

?>










































































































































































</body>

</html>