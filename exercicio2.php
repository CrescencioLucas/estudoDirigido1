<?php
    print "Digite sua quantidade de dias: ";
    $dias = (int) fgets (STDIN);
    
    print "Digite sua quantidade de horas: ";
    $horas = (int) fgets (STDIN);
    
    print "Digite quantidade de minutos: ";
    $min = (int) fgets (STDIN);
    
    print "Digite quantidade de segundos: ";
    $seg = (int) fgets (STDIN);
        
        $segDias = $dias * 86400;
        $segHoras = $horas * 3600;
        $segMin = $min * 60;
        $total = $segDias + $segHoras + $segMin + $seg;
    
    print "Os segundos totais são: $total \n";
