<?php
    print "Digite uma temperatura em Celsius: ";
        $celsius = (float) fgets (STDIN);
    
        $novoCelsius = $celsius / 5;
        $novoCels = $novoCelsius * 9;
        $faren = $novoCels + 32;
    
    print "Está temperatura vale $faren fahrenheit. \n";