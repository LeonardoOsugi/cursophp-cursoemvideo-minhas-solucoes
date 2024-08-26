<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bufunfa, Dim Dim, Dinheiro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>
            Conversor de moedas v1.0
        </h1>
        <?php 
        $din = $_REQUEST["bufunfa"];
        // $din = str_replace(',', '.', $din);
        $dollinho = $din / 5.22;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
        // echo "<p>Seus R$ ". number_format($din, 2, ',','.')." equivalem a <strong>US$ ". number_format($dollinho, 2, ',', '.') ."</strong> <br> <strong>*Cotação fixa de fixa de R$5,22</strong> informada diretamente no código</p>"
        
        //formatação de moedas com internacionalização
        echo "<p>Seus ". numfmt_format_currency($padrao,$din, "BRL")." equivalem a <strong> ". numfmt_format_currency($padrao,$dollinho, "USD") ."</strong> <br> <strong>*Cotação fixa de fixa de R$5,22</strong> informada diretamente no código</p>"
        ?>

        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>