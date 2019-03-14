<?php
    print "Quantos KM você percorreu com o carro?";
        $kmPercorrido = (float) fgets (STDIN);
    
    print "Quantos dias você ficou com o carro?";
        $dias = (int) fgets (STDIN);
        
        $novoDia = 60 * $dias;
        $novoKm = 0.15 * $kmPercorrido;
        $precoFinal = $novoDia + $novoKm;
    
        print "Você vai pagar R$$precoFinal \n";
