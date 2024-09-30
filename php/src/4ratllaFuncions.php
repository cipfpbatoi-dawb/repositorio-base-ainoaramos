<?php

function inicialitzarGraella(){

    $graella=[];

    for($fila=1; $fila<=6; $fila++){
        for($columna=1; $columna<=7; $columna++){
            $graella[$fila][$columna]=0;

        }
    }
    return $graella;
}

function pintarGraella($graella){
    echo "<table>";
    for($fila=1; $fila<=6; $fila++){
        echo "<tr>";
        for($columna=1; $columna<=7; $columna++){
            $clase="";

            if($graella[$fila][$columna]==1){
                $clase='player1';
            }else if($graella[$fila][$columna]==2){
                $clase='player2';
            }else{
                $clase='buid';
            }
            echo "<td class='$clase'></td>";
           
        } echo "</tr>";
        
    } echo "</table>";
    
}

function ferMoviment(&$graella, $columna, $jugadorActual){

    for($fila=6; $fila>=1; $fila--){
        if($graella[$fila][$columna]==0){
            $graella[$fila][$columna]=$jugadorActual;
            return true;
        }
    }return false;
    
}

?>