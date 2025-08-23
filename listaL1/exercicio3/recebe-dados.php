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
  define("DESCONTO", 0.1);
  define("ICMS", 0.12);
  define("COMISSAO", 0.05);
  $valorCompra = $_GET["valor-compra"];
  $valorDesconto = $valorCompra * DESCONTO;
  $valorIcms = $valorCompra * ICMS;
  $valorComissao = $valorCompra *COMISSAO;
  $valorComissaoFormatado = number_format("$valorComissao", 2, ",");
  $valorIcmsFormatado = number_format("$valorIcms", 2, ",");
    $valorDescontoFormatado = number_format("$valorDesconto", 2, ",");

  echo "<p>Valor total da compra: <span>$valorCompra</span>
  Valor do desconto: <span>$valorDescontoFormatado</span>
  Valor ICMS: <span>$valorIcmsFormatado</span>
  valor comissão: <span>$valorComissaoFormatado</span>";
 ?>
 
</body>
</html>