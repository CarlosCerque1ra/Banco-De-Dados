<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>

<body>
    <main class="Formulario">
        <form  method="POST">
            <h2>Formulário de ingressos</h2>
                <p>Nome:</p>
            <input type="text" name="nome" placeholder="Digite seu nome" required id="nome">
            <p>Idade:</p>
            <input type="number" name="idade" placeholder="Digite sua idade" required id="idade">
            <p>Opção de ingresso:</p>
            <select id="opcoes" name="ingresso">
                <option value="1">Vip</option>
                <option value="2">Regular</option>
                <option value="3">Basico</option>
            </select>
            <button type="submit"> Enviar </button>
        </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idade = $_POST['idade'];
    $nome = $_POST['nome'];
    $ingresso = $_POST['ingresso'];

    if ($idade < 18) {
        echo "<p>ingresso não permitido para menores de idade</p>";
    } else {
        switch($ingresso) {
            case 1:
                $preço = 100;
                break;
            case 2:
                $preço = 50;
                break;
            case 3:
                $preço = 20;
                break;
            default:
            exit; 
        }  
        echo "<p>Bem-Vindo, $nome</p>";
        echo "Preço: R$".number_format ($preço, 2,",");
    }  
}     
    
?>   
</body>