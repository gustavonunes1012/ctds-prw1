<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos do PHP </title>
 <link rel="stylesheet" href="exerc3.css">
</head>

<body>
 <h1> Fundamentos do PHP - resposta do servidor </h1>

 <?php
  //criando constantes em PHP
  define("DESCONTO", 10/100);
  define("ICMS", 12/100);
  define("COMISSAO", 5/100);

  $valorCompra = $_GET['valor-compra'];

  //cálculos
  $desconto = $valorCompra * DESCONTO;
  $icms     = $valorCompra * ICMS;
  $comissao = $valorCompra * COMISSAO;

  //calculando o valor final da compra do cliente
  $valorFinal = $valorCompra - $desconto;

  //mostrando resultados das variáveis e da constante

  echo "<p> Resultado da venda: <br>
        Valor inicial da compra = <span> R$$valorCompra </span> <br>
        Desconto dado ao cliente = <span> R$$desconto </span> <br>
        ICMS = <span> R$$icms </span> <br>
        Valor da comissão = <span> R$$comissao </span> <br>
        Valor final da compra = <span> R$$valorFinal </span> <br>
        TAXA do ICMS cobrado = <span>" , ICMS*100 , "% </span> </p>";

 ?> 
</body>
</html>