<?php

    print "Digite um número em metros para converter para mm: ";
    $metros= (int) fgets (STDIN);

    $mm = $metros*1000;

    print "Esse é o número em cm: $mm \n";