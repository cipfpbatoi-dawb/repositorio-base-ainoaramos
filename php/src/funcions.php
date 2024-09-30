<?php

function imprimir($guions){
    foreach($guions as $guio){
    echo $guio . ' ';
    }
}

function endevinarParaula($paraula, $lletra, &$guions){
    $lletraEndevinada=false;

    for($i=0; $i<strlen($paraula); $i++){

        if($paraula[$i]==$lletra){
            $guions[$i]=$lletra;

            $lletraEndevinada=true;
        }
    }
   return $lletraEndevinada;

 


}
?>