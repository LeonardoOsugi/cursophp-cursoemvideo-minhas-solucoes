<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do analisador</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>
            Analisador de número real
        </h1>
        <?php 
           $n = $_POST["num"] ?? 0;
           $n_float = floatval(str_replace(",", ".", $n));
           $int = (int)$n;
           $fra = $n_float - $int;

           echo "Analisando o número <strong> ".number_format($n_float, 3, ",",".")."</strong> informado pelo usuário: <br>
           <ul>
               <li>A parte inteira do número é <strong>".number_format($int, 0 , ",",".")."</strong></li>
               <li>A parte fracionada do número é <strong>".number_format($fra, 3, ",",".")."</strong></li>
           </ul>"
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>