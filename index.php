<?php

// $op1 = Soma;
// $op2 = Divisao;
// $op3 = Multiplicacao;
// $op4 = Subtracao;
// $valor1 = 4;
// $valor2 = 15;

// $operacao = $op4 ;

// if ($operacao == $op1){
//     echo "$valor1 + $valor2 = ";
//     echo ($valor1 + $valor2);
// }
// if ($operacao == $op2 ){
//     echo "$valor1 / $valor2 = ";
//     echo ($valor1 / $valor2);
// }
// if ($operacao == $op3 ){
//     echo "$valor1 * $valor2 = ";
//     echo ($valor1 * $valor2);
// }
// if ($operacao == $op4 ){
//     echo "$valor1 - $valor2 = ";
//     echo ($valor1 - $valor2);
// };

// o do Caique

// $media = 10;

// switch ($media) {
//     case "10":
//         echo "Você foi Muito Bem!";
//     case "9":
//     case "8":
//     case ""
//         echo "Parabens";
//         break;
//     case "0":
//         echo "Você foi mal";
//     break;
// }

// $valor1 = 5;
// $valor2 = 10;
// $operacao = "/";

// switch ($operacao){
//     case "+":
//         echo "$valor1 + $valor2 = ";
//         echo ($valor1 + $valor2);
//         break;
//     case "-":
//         echo "$valor1 - $valor2 = ";
//         echo ($valor1 - $valor2);
//         break;
//     case "/":
//         echo "$valor1 / $valor2 = ";
//         echo ($valor1 / $valor2);
//         break;
//     case "*":
//         echo "$valor1 X $valor2 = ";
//         echo ($valor1 * $valor2);
//         break;
//     default:
//         echo "Operação Inválida";
//     };

    // Do Caique

// $valor1 = 5;
// $valor2 = 10;
// $operacao = "/";

// switch ($operacao){
//     case "+":
//         echo "{$valor1} + {$valor2} = " . ($valor1 + $valor2);
//         break;
//     case "-":
//         echo "{$valor1} - {$valor2} = " . ($valor1 - $valor2);
//         break;
//     case "/":
//         echo "{$valor1} / {$valor2} = " . ($valor1 / $valor2);
//         break;
//     case "*":
//         echo "{$valor1} * {$valor2} = " . ($valor1 * $valor2);
//         break;
//     default:
//         echo "Operação Inválida";

//     }

// While

// $num = 0;

// while ($num <= 10) {
//     echo "$num <br>";
//     $num++;
// }

// // Do While

// $num = 0;

// do{
//     echo "$num <br>";
//     $num++;
// }
// while ($num <= 10) {
    
// }
// $num = 0;

// while ($num <= 10) {
//     $num++;
//     if ($num === 5){
//         continue;
//     }
//     echo "$num <br>";


// }

// $num1 = 9;
// $num2 = 0;

// while ($num1 &&  $num2 <= 10){
//        echo "{$num1} X {$num2}  = " . ($num1 * $num2)."<br> ";
//        $num2++;
// }

// for ($par = 0 , $impar = 1; $par <= 100; $par +=2, $impar += 2)
//     echo "Par: $par e Impar: $impar <br>" ;     
// )

// *****Meu

// for ($num1 = 8, $num2 = 0; $num2 <=10; $num1 && $num2++)
// {
//     echo "$num1 X $num2 = ".($num1 * $num2) . "<br>";
// }

// ****Do Caique

// $tabuada = 1;

// for ($i = 0; $i <= 10; $i++) {
//     echo " $tabuada * $i = " . ($tabuada * $i) . "<br>";
// }

// *** Como calcular mais de um valor

for ($i = 1; $i <= 10 && $tabuada <=10; $i++) {
        echo " $tabuada * $i = " . ($tabuada * $i) . "<br>";
        
        if($i === 10) {
           $i = 0;
           $tabuada++;
           echo "<br>";
        }
    }