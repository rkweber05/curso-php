<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões aritméticas</title>
</head>
<body>
    <main>
        <?php 
            $result = abs(-2000);
            echo "<p>O resultado absoluto é $result</p>";

            $convertBase = base_convert(254, 10, 2);
            echo "<p>O resultado da base convertida é $convertBase</p>"
        ?>
    </main>
</body>
</html>