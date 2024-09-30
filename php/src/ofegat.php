<?php
    include_once("funcions.php");

$paraula="amapola";
$guions=[];
$respostaCorrecta="";
$respostaIncorrecta="";

for($i=0; $i<strlen($paraula); $i++){
    $guions[]= '_';
}    
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $lletra=$_POST['lletra'];
    if(endevinarParaula($paraula, $lletra, $guions)){
        $respostaCorrecta=$lletra;
    }else{
        $respostaIncorrecta=$lletra;
    }
}




?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Joc de L'Ofegat </title>
    <style>
        .correct{ color: green; }
        .incorrect{ color: red; }
    </style>

</head>
<body>
    <h2> Joc de L'Ofegat </h2>
    <?php imprimir($guions);?>
  
    <form action="ofegat.php" method="post"><br>
        <input type="text" id="lletra" name="lletra">
        <input type="submit" value="Enviar"><br><br>
        <label for="correcte">Correcte: </label>
        <span class="correct"><?php echo $respostaCorrecta; ?></span><br>
        <label for="incorrecte">Incorrecte: </label>
        <span class="incorrect"><?php echo $respostaIncorrecta; ?></span><br>
    </form>
    
   
</body>
</html>