<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link real="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>resultado final</h1>
        <p>
            <?php
            $n = $_REQUEST["num"]?? 0;
            $b= $n - 1;
            $s = $n + 1;
            echo"O número escolhido foi <strong>$n</strong>";
            echo "<br>O seu <em>antecessor</em> é $b";
            echo "<br>O seu <em>sucessor</em> é $s";
            ?>
        </p>
        <button>Voltar</button>

    </main>
    
</body>
</html>