<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once './PHPMailer-6.1.4/src/PHPMailer.php';
require_once './PHPMailer-6.1.4/src/SMTP.php';

$email = new PHPMailer();
$email ->setLanguage('pt_br','./lib/PHPMailer-6.1.4/language');
$email ->isSMTP();
$email ->Host = 'smtp.gmail.com';
$email ->Port = 587;
$email ->SMTPSecure = 'tls';
$email ->SMTPAuth = true;
$email ->charSet = PHPMailer :: CHARSET_UTF8;
$email ->Username = 'becapizzaiola@gmail.com';
$email ->Password = '123mudar@';
$email ->setFrom('becapizzaiola@gmail.com');
$email ->addAddress ('caiqueportela@4linux.com.br');
$email ->Subject = 'Teste no Curso de PHP';
$email ->isHTML (true);
$email ->Body = '<h1>Enviei com o PHP!</h1>';

if (!$email ->send()){
    print("erro: {$email->ErrorInfo}");
} else { 
    print("E-mail Enviado!");
};

?>
// <!-- <!-- <form method= "post">
//     <label>Usuario: </label> 
    <imput type="text" name="usuario">
    <br>
    <label>Senha: </label> 
    <imput type="text" name="senha">
    <br>
    <button type="submit">Entrar</button

// $numeros = [ -->
//     '4',
//     '16',
//     '80',
//     '57',
//     '44',
//     '100',
//     '33',
// ];

// foreach ($numeros as $numero)
// {
//     for ($numero ;$numero < count($numeros); $numero++ );
//     {
//         if ($numero % 2 === 0){
//             echo ("$numero é Impar <br>");
//         } else { echo ("$numero é Par <br>");
//         }
//     }
// }




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
// } -->