<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dias da Semana</title>
</head>
<body>
    <h1>ESCOLHA UM NÍUMERO PARA SUA BEBIDA:</h1>
    <h4>APENAS NÚMEROS DE 1 a 3</h4>
    <form method="POST">
        <input type="number" name="dia" placeholder="Digite um número">
        <button type="submit"> Enviar </button>
    </form>
    <?php
     if (isset($_POST['dia'])){
      $dia = $_POST['dia'];
     }
  // $bebida = 3;
    switch($dia) {
    case 1:
        $preco = 2.50;
        $nomebebida = "Agua";
        break;
    case 2:
        $preco = 5.50;
        $nomebebida = "COCA-COLA";    
        break;
    case 3:
        $preco = 8.00;
        $nomebebida = "PITÙ";    
        break;
    default:
        echo "Opção invalida";      
            }
        echo "<p>Você escolheu: $nomebebida</p>";
        echo "Preço: " . number_format($preco, 2, ',');
    ?>
</body>
</html>