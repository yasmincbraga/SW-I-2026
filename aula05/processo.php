<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo Dados</title>
</head>
<body>

    <?php
      $nome = $_GET['nome'];
      $email = $_GET['email'];
      $idade = $_GET['idade'];

      $ano_atual = date('Y');
     //   echo $ano_atual;
      $nascimento = $ano_atual - $idade;
    ?>

    <p>O Nome digitado é: <?php echo "$nome"; ?> </p>
    <p>O Email digitado é: <?php echo "$email"; ?> </p>
    <p>A idade digitada é: <?php echo "$idade"; ?> </p>
    <p>Seu Ano de nascimento é: <?php echo "$nascimento"; ?></p>
</body>
</html>