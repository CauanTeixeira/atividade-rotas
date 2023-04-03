<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Operacoes extends Controller
{
    public function nome($nome){
        echo '<p> olá ',$nome,'</p>';
    }
    public function conta($number1,$number2,$operation = 'todas'){
        switch($operation){
                   case $operation == 'todas';
                       echo 
                           '<p>Soma = '. $number1 + $number2 . 
                           '<br>Subtração = '. $number1 - $number2 . 
                           '<br>Multiplicação = '. $number1 * $number2 . 
                           '<br>Divisão = '. $number1 / $number2;
                       break;
                   case $operation == 'Soma';
                       echo '<p>Soma = '. $number1 + $number2 . '<p>';
                       break;
                   case $operation == 'Subtração';
                       echo '<p>Subtração = '. $number1 - $number2 . '<p>';
                       break;
                   case $operation == 'Multiplicação';
                       echo '<p> Multiplicação = '. $number1 * $number2 . '<p>';
                       break;
                   case $operation == 'Divisão';
                       echo '<p>Divisão = '. $number1 / $number2 . '<p>';
                       break;
               };
    }
}