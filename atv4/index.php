<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digite seu Nome</title>
</head>
<body>
    <h1>Digite seu Nome</h1> 
    <form method="POST"> 
        <input type="text" name="nome" placeholder="Seu nome aqui" required> 
        <button type="submit">Enviar</button> 
    </form>

    <?php
        if ($_POST['nome']) { 
            $nome = $_POST['nome']; 
            echo "<p>Olá, $nome!</p>"; 
        }
    ?>
</body>
</html>