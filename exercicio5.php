<?php
    print "Qual foi a sua distância percorrida?";
    $dist = (float) fgets (STDIN);
    
    print "Qual foi a sua velocidade média?";
    $velo = (float) fgets (STDIN); 
        
        $tempo = $dist / $velo;
    
    print "Você levou $tempo h para percorrer $dist km \n";
