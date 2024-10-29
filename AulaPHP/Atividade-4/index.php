<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite seu nome</h1>

    <form method="POST">
        <input type="text" name="nome" placeholder="Digite o seu nome" require>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if(isset ($_POST ["nome"])){
            $nome = $_POST["nome"];
            echo "<p>Ola, $nome</p>" ;
        }
    ?>



</body>
</html>