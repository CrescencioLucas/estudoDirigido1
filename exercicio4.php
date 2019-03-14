<?php
    print "Qual o valor da mercadoria? ";
    $valorInicial = (float) fgets (STDIN);
    
    print "Quantos % de desconto? ";
    $desconto = (int) fgets (STDIN);
        
        $novoDesconto = $desconto / 100;
        $novaPorcen = $valorInicial * $novoDesconto;
        $novoValor = $valorInicial - $novaPorcen;
    
    print "Preço a pagar da mercadoria: $novoValor \n";
    
    print "Valor do desconto: $novaPorcen \n";