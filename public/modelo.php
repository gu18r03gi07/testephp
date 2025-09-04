<?php
require_once ("./includes/functions.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>HTML e PHP</title>
</head>
<body>
      <?php
      echo "Teste\n de \n quebra\n de\n liha\n";
        echo "<br>"; 
        echo "Teste<br> de <br> quebra<br> de<br> liha<br>";
      ?>
      <p>
        soma: <?= soma(30, 20) ?> <br />
        subtracao: <?= subtracaoComRetornoPositivo(20, 60); ?> <br />
        multiplicacao: <?= multiplica(5, 5); ?> <br />
        divisao: <?= divide(50, 2); ?> <br />
      </p>
</body>
</html>