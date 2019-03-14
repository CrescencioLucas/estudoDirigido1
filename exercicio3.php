<?php


    print "Digite seu salário:";
    $salario=(float) fgets (STDIN);

    print "Digite a porcentagem do aumento do salário:";
    $porcentagem=(float) fgets (STDIN);

    
    $inflacao=$porcentagem/100;
    $aumento=$inflacao*$salario;
    $novosalario=$aumento+$salario;

    print "Houve um aumento de: R$$aumento \n";
    print "O novo salário é: R$$novosalario \n";