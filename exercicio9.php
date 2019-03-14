
<?php
    print "Quantos metros quadrados tem a área que será pintada?";
        $area = (float) fgets (STDIN);
    
        $litrosUsados = $area / 6;
    
        $quantLata = $litrosUsados / 18;
        $quantGalao = $litrosUsados / 3.6;
        $precoLata = $quantLata * 80;
        $precoGalao = $quantGalao * 25;
    
        $restoLata = ceil ($quantLata/18);
        $sobras = $restoLata%18;
        $x = ceil ($sobras/3.6);
        $valor = $precoLata + $precoGalao;
        $desconto = $valor - ($valor*0.10);
        
    print "Serão utilizadas $quantLata latas de tinta por um preço de R$$precoLata \n";
    
    print "Serão utilizados $quantGalao galões de tinta por um preço de R$$precoGalao \n";   

    print "A quantidade de latas que você terá que comprar é $restoLata, e $x galões, ao preço de $desconto \n";