<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST">
        <input type="text" name="nome" placeholder="digite seu nome" require>
        <input type="number" name="idade" placeholder="digite sua idade" require>
        <select name="ingresso" id="vip">
            <option value="1">Vip</option>
            <option value="2">Regular</option>
            <option value="3">Basico</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
    <?php
        $ingresso = "nenhum selecionado";
        $nome = "não inserido";
        $idade = 0;
        $preco =0.00;
        if(isset($_POST["nome"])){
            $nome = $_POST["nome"];
        }
        if(isset($_POST["idade"])){
            $idade = $_POST["idade"];
        }
        if(isset($_POST["ingresso"])){
            $ingresso = $_POST["ingresso"];
        }
        if ($idade < 18){
            echo "vanda não permitida para menores de idade";
        }
        else{
           switch($ingresso){
            case 1:
                $ingresso = "Vip";
                $preco = 100.00;
            break;

            case 2:
                $ingresso = "Regular";
                $preco = 50.00;
            break;

            case 3:
                $ingresso = "Basico";
                $preco = 20.00;
            break;

            default:
            exit;
           } 
        }
        if($idade > 18){
            echo "Nome: $nome <br>";
            echo "Idade: $idade <br>";
            echo "Tipo de ingresso: $ingresso Preço: R$" . number_format($preco, 2,',');
        }
        else{
            echo "";
        }
    ?>
</body>
</html>