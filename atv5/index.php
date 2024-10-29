<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digite seu Nome</title>
</head>
<body>
    <h1>Verifique se você pode dirigir</h1> 
    <form method="POST"> 
        <input type="text" name="nome" placeholder="Digite sua idade:" required> 
        <button type="submit">Verificar</button> 
    </form>

    <?php
        if ($_POST['nome']) { 
            $nome = $_POST['18']; 
            echo "<p>Você pode dirigir</p>"; 
        }
    ?>
</body>
</html>