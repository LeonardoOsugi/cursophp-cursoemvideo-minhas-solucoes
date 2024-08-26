<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <h1>
        Teste de Tipos Primitivos
    </h1>
    <?php 
    //    0x = Hexadecimal 0b = Binário 0 = octal
    //    $num = 010;
    //   echo "O valor da variável é $num";
    //   $v = "Satoru";
    //   var_dump($v);

    //$num = (int) 3e2;  //coerção  //3X10^2
    //echo "o valor é $num";
    //var_dump($num);

    // $num = (int)"950";
    // var_dump($num);

    // $casado = true;
    // var_dump($casado);
    //print "O valor para casado é $casado"

    // $vet = [6, 2, 9, 3, 5];
    // var_dump($vet);
    // print "O primeiro número do array é $vet[0]";

    // class Pessoa{
    //     private string $nome;
    // }

    // $p = new Pessoa;

    // var_dump($p);

    //ESCAPES SEQUENCES
    // /n  Nova Linha
    // /t  Tabulação Horizontal
    // // Barra Invertida
    // /$ Sinal de Cifrão
    // \u{} Codepoint Unicode
    
    // $nom = "Rodrigo";
    // $snom = "Nogueira";
    // $apelido = "Minotauro";
    // echo "$nom "\$apelido\" $snom "; 
    // res = Rodrigo "Minotouro" Nogueira 

    //echo "$nom '$apelido' $snom ";
    // res = Rodrigo $apelido Nogueira

    //echo '$nom \'$apelido\' $snom ';
    // res = $nom '$apelido' $snom
    
    // echo "$nom\t "\$apelido\" \t$snom ";
    // res = Rodrigo   "Minotauro"   Nogueira

    // echo "$nom\n\t "\$apelido\" \t\t$snom "; 
    // res = Rodrigo
    //             "Minotauro"      Nogueira

    
    // $canal = "Curso em Vídeo";
    // $ano = date("Y");    // String heredoc

    // echo <<< FRASE
    //         Estou fazendo o curso de PHP do canal
    //         $canal em $ano
    // FRASE;

    // $canal = "Curso em Vídeo";
    // $ano = date("Y");    // String NowDoc

    // echo <<< 'FRASE'
    //         Estou fazendo o curso de PHP do canal
    //         $canal em $ano
    // FRASE;
    ?>
</body>

</html>