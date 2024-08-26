<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Este desafio é para o usuário sortear um número clicando em um botão que sorteia de 0 até 100 
     
    OBS:
    
    - rand()  = 1951 - Linear Congrential Generator
    - mt_rand() = 1997 - Mersenne Twister
    - A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
    - random_int() = Gera números aleatórios critograficamente seguros-->

    <main>
        <h1>
            Trabalhando com números aleatórios
        </h1>
        <p>
            Gerando um número aleatório entre 0 e 100
        </p>
        <?php 
            $numrand = mt_rand(0,100);
            
            echo "<p>O valor gerado foi <strong>$numrand</strong></p>";
        ?>
        <button onclick="javascript: document.location.reload()">&#x1F504; Gerar Outro</button>
    </main>
</body>

</html>