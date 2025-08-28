<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos do PHP </title>
 <link rel="stylesheet" href="exerc4.css">
</head>

<body>
 <h1> Fundamentos do PHP - resposta do servidor, tratando dados de links </h1>

 <?php
  //o recebimento de dados de um link sempre é feito por meio de $_GET[]
  $tempF = $_GET['tempF'];

  $tempC = ($tempF - 32) * 5/9;

  $tempFFormatada = number_format($tempF, 1, ",", ".");
  $tempCFormatada = number_format($tempC, 1, ",", ".");

  echo "<p> Resultado da conversão termométrica: <br>
            Temperatura fornecida, em ºF = <span> $tempFFormatada ºF </span> <br>
            Temperatura convertida para ºC = <span> $tempCFormatada °C </span> </p>";            
            
 ?> 
</body>
</html>