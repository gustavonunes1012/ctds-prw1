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
 


  echo "<p> Nome do aluno: $aluno </p>";

 ?>
 
</body>
</html>