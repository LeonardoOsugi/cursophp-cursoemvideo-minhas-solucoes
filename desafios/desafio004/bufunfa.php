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
         $dataInicial = date("m-d-Y", strtotime("-7 days"));
         $dataFinal = date("m-d-Y");
     
         $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=\'' . $dataInicial . '\',dataFinalCotacao=\'' . $dataFinal . '\')?$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'
         ;
        $data = json_decode(file_get_contents($url), true);
        $cotacao_dollar = $data["value"][0]["cotacaoCompra"];
        
        $din = $_REQUEST["bufunfa"];
        $din = str_replace(',', '.', $din);
        $dollinho = $din / $cotacao_dollar;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
        echo "<p>Seus R$ ". numfmt_format_currency($padrao,$din, "BRL")." equivalem a <strong> ". numfmt_format_currency($padrao,$dollinho, "USD") ."</strong><br> *Cotação no site do Banco Central do Brasil<br><strong>Cotação atual: ". numfmt_format_currency($padrao,$cotacao_dollar, "BRL") ."</strong></p>"
        ?>

        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>