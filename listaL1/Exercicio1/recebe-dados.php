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
  $aluno = $_POST["aluno"];
  $nota1 = $_POST["nota1"];
  $peso1 = $_POST["peso1"];
  $nota2 = $_POST["nota2"];
  $peso2 = $_POST["peso2"];
  //calculando a média ponderada  
  $media = (($nota1 * $peso1)+($nota2 * $peso2))/($peso1 + $peso2);
  //utilizando formatação númerica em php
  $mediaFormatada = number_format($media, 1, ",");
 

echo "<p>Resultado do processamento das notas do aluno
Aluno: $aluno
Média: <span>$mediaFormatada</span></p>";

 ?>
 
</body>
</html>