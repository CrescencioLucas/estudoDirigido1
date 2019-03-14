<?php
    print "Quanto tempo você fuma?";
        $anos = (int) fgets (STDIN);
    
    print "Quantos cigarros você fuma por dia?";
        $dia = (int) fgets (STDIN);
        
        $novoAno = $anos * 365;
        $cigarrosFumados = $novoAno * $dia;
        $tempoPerdido = $cigarrosFumados * 10;
        $final = $tempoPerdido / 1440;
    
        print "Você perdeu $final dias de sua vida \n";
    
