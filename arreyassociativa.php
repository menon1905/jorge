<?php

function media ($a, $b, $c){
    echo 'digite suas nota1';
    echo "\n";
    echo 'digite suas nota2 ';
      echo "\n";
    echo 'digite suas nota3 ';
      echo "\n";
    return ($a+$b+$c)/3;
}

echo media(9,9,10);


$alunos=    [
        [
            "nome" => "João",
            "idade" => 20
        ],
        [
            "nome" => "Maria",
            "idade" => 22
        ],
        [
            "nome" => "José",
            "idade" => 21
        ]
    ]
  
    echo {$alunos["nome"]}{$alunos["idade"]};
?>
