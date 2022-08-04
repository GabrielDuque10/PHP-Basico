<?php

$idade = 16;
$numerodepessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado(a)" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Pode entrar sozinho";}

else if ($idade >= 16 and $numerodepessoas >1) {
        echo "Você tem $idade anos" . PHP_EOL;
        echo "Você está acompanhado(a)" . PHP_EOL;
        echo "Pode entrar"; } 

else {
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Você não pode entrar";}