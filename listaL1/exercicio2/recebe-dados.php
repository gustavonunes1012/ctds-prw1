<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos do PHP </title>
 <link rel="stylesheet" href="exerc1.css">
</head>

<body>
 <h1> Fundamentos do PHP - resposta do servidor </h1>

 <?php
  //recebendo os dados do formulário no servidor
  $distancia = $_GET["distancia"];
  $preco = $_GET["preco"];
  $consumo = $_GET["consumo"];
  //calculando o custo da viagem
  $custoViagem = $distancia / $consumo *$preco;
  //formatando o preço
  $precoFormatado = number_format($custoViagem, 2, ",");
  //saida dos valores
  echo "<p>Distancia em km: $distancia
  Quantidade de litros: $consumo litros
  Custo da viagem: R$<spam> $precoFormatado</spam></p>";

 ?>
 
</body>
</html>