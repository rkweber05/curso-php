<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String em PHP</title>
</head>
<body>
    <h2>
        <?php 
            const CANAL = "Curso em vídeo \u{1F499}";
    
            echo 'Eu adoro o ' . CANAL;
        ?>
    </h2>
    <h2>
        <?php 
            const CANAL2 = 'Curso em vídeo \u{1F499}';

            echo 'Eu adoro o ' . CANAL2;
        ?>
    </h2>

    <h2>
        <?php 
            $nome = "Rodrigo";
            $snome = "Weber";

            echo "$nome \"Kunzler\" $snome";
        ?>
    </h2>
</body>
</html>