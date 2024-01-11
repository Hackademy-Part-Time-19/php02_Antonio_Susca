<?php

$numeri = [1,2,3,6,8,9,10,30,40,50,60,30,32];
$somma_totale = 0;
      $counter = 0;
    foreach($numeri as $numero) { 

        if(($numero % 2) == 0){
        $somma_totale += $numero;
        $counter++;
       }
   }

var_dump($somma_totale/$counter);