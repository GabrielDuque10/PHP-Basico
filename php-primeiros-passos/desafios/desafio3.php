<?php

$peso = 65.7;
$altura = 1.72;
$imc = $peso / $altura**2;

    echo "Seu IMC é $imc. Você está com IMC ";

        if ($imc < 18.5) {echo "abaixo";}
        if ($imc >= 18.5 && $imc<24.9) {echo "dentro ";} 
        if ($imc >= 25 && $imc<29.9) {echo "acima ";}
        if ($imc >= 30 && $imc<39.9) {echo "muito acima ";}
        if ($imc > 40) {echo "gravemente acima ";} 

    echo "do recomendado.";