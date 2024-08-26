<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
           $num = $_REQUEST["numero"] ?? 0;
           
           echo "<p>O número escolhido foi <strong>$num</strong><br>O seu antecessor é <strong>".($num - 1)."</strong><br>O seu sucessor é <strong>".($num + 1)."</strong></p> 
        "; ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>

</html>