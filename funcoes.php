<?php

$numeros = [
    '1',
    '6',
    '9',
    '57',
    '44',
    '100',
    '33',
];

foreach ($numeros as $numero){
    for ($numero ;$numero < count($numeros); $numero++ );
    {
        if ($numero % 2=0){
            echo ("$numero é Par");
        } else { echo ("$numero é Impar")};
    }
}



// $alunos =[
//     [
//         'nome' =>'João',
//         'notas' => [10,8,5]
//     ],
//     [
//         'nome' => 'Maria',
//         'notas' => [6,5,3]
//     ],
//     [
//         'nome' => 'José',
//         'notas' => [9,7,4]
//     ]
// ];

// list (array 



// function media ($n1,$n2,$n3){
//     foreach ($aluno as $aluno => $notas){
//         echo ($resultado = ($n1 + $n2 + $n3) / 3);
//     }
// };

// function nomealuno ($alunos){
//     foreach ($alunos as $aluno => $nome);
//     list($posicao1, $posicao2, $posição3) = $alunos;
//     print ("Aluno: $aluno está com média: $resultado <br>");
// };


// Solução: 

// function calculanotas(array $alunos)
// {
//     foreach ($alunos as $aluno){
//         $notas = $alunos ['notas'];
//         $media = ($notas [0] + $notas[1] = $notas[2])/ 3;
//         $aluno ['media'] = $media;
//     }
// }
// function exibenotas (array $alunos)
// {
//     foreach ($alunos as $aluno) {
//     print ( "O Aluno {$aluno ['nome']} teve media {$aluno ['media']}.<br>");
//     }
// }

// //Lista

// $lista = [
//     'fruta1' => 'banana',
//     'fruta2' => 'maca',
//     'fruta3' => 'abacate',
//     10 => ['abacaxi'],
//     'manga'
// ];

// //forma 1:

// for ($i =  ; $i < count ($lista); $i++) {
//     echo 'Item' . $i 'valor'. $lista [ $i] . '<br>';
// }

// //forma 2:

// foreach ($lista as $chave => $fruta) {
//     echo 'Item' . $chave . 'valor' . $fruta . '<br>';
// }





















// function soma ($a , $b) 
//     $resultado = $a + $b;
//     return "$resultado"
// }

// function calculapesoideal(string $sexo, float $altura)
// {
//     switch ($sexo){
//         case "M":
//             return calcula (72.7,58,$altura);
//         break;
//         case "F":
//             return calcula (62.1,44.7,$altura);
//         break;
//         default:
//             return "Sexo invalido!";
//     }
// }
// function calcula($a,$b,$altura) {
//     return ($a * $altura) - $b;
// }

// function calculaequacao ( )
// {

// }
// global $a,$b,$c ;

// function calculadelta (float $a,float $b, float $c){
//     return ( pow($b,2) - 4 * $a * $c )
// }
// global $a,$b,$c;

// function calculax1 ()
//     return (((-$b) + sqrt(calculadelta)) / 2 * $a)
// } -->
