<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Posso Dirigir?</h1>

    <form method="POST">
        <input type="number" name="idade" placeholder="Digite sua idade" require>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if (isset($_POST['idade'])) {
        // Convertendo para inteiro
        $idade = $_POST['idade'];

        if ($idade >= 18) {
            echo "<p> Ta podendo DIRIGIR</p>";
        } 
        else {
            echo "<p> Não pode DIRIGIR CABEÇUDO </p>";
        }
    } else {
        echo "<p> Idade não foi informada. </p>";
    }
    ?>

</body>
</html>