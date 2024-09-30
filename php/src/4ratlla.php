<?php
include_once("4ratllaFuncions.php");



if(isset($_POST['graella'])){
    $graella=unserialize($_POST['graella']);
}else{
    $graella=inicialitzarGraella();
}

if(isset($_POST['jugadorActual'])){
    $jugadorActual=$_POST['jugadorActual'];
}else{
    $jugadorActual=1;  
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
   
    $columna=$_POST['columna'];
    if($columna==true){
    if(ferMoviment($graella, $columna, $jugadorActual)){

    if($jugadorActual==1){
        $jugadorActual=2;
    }else{
        $jugadorActual=1;
    }
}
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> 4 en Ratlla </title>

    <style>
        table { border-collapse: collapse; }

        td {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 10px dotted #fff; 
            background-color: #000; 
            display: inline-block;
            margin: 10px;
            color: white;
            font-size: 2rem;
            text-align: center ;
            vertical-align: middle;
    }
    .player1 {
        background-color: red;
    }
    .player2 {
        background-color: yellow; 
    }
    .buid {
        background-color: white; 
        border-color: #000; 
    }
    </style>
   </head>
<body>
    <h2> 4 en Ratlla </h2>
  
    <form action="4ratlla.php" method="post"><br>
    <label>Seleciona columna (1-7): </label>
    <input type="number" id="columna" name="columna">
    <input type="hidden" name="graella" value= "<?php echo htmlspecialchars(serialize($graella));?>">
    <input type="hidden" name="jugadorActual" value= "<?php echo $jugadorActual;?>">
    <input type="submit" value="Enviar"><br><br>
    </form>
    <?php
    pintarGraella($graella);
    ?>
   
</body>
</html>