<?php

$numeros = [
    '4',
    '16',
    '80',
    '57',
    '44',
    '100',
    '33',
];

foreach ($numeros as $numero)
{
    for ($numero ;$numero < count($numeros); $numero++ );
    {
        if ($numero % 2 === 0){
            echo ("$numero é Impar <br>");
        } else { echo ("$numero é Par <br>");
        }
    }
}




// require ('../html/funcoes.php');



// $matriz = [
//     'cursos'=> [ 
//         'PHP1' => [
//             'Aluno1',
//             'Aluno2'
//         ],
//         'PHP2'=> [
//             'Aluno1',
//             'Aluno2'
//         ]
//     ]
// ];

// var_dump ($matriz);

//111


// define('Frutas', ['banana','maça']);
    

// var_dump ('FRUTAS');

//222

//     $cursos=> [ 
//         'PHP1' => [
//             'Aluno1',
//             'Aluno2'
//         ],
//         'PHP2'=> [
//             'Aluno1',
//             'Aluno2'
//         ]
//     ]
// ];

// foreach ($cursos as $curso){
//     var_dump ($curso);
//     echo '<br><br><br><br>'
// }

// foreach ($cursos as $curso => $alunos) {
//     list($posicao1, $posicao2) = $alunos;
//     print("Curso $curso possui os alunos $posicao1 e $posicao2 <br>");
// }