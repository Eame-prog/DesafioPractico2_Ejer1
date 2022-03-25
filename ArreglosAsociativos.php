<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Arreglos Asociativos</title>
    <style type="text/css"> table{margin: 20px 70px 10px 70px; float: left; width: 20%; text-align: center;} </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<BR><h1 align="center">Alumnos inscritos</h1>
<h3 align="center">(Sintaxis basada en arreglos asociativos)</h3><BR>
<?php
    $idioma = array ('Ingles','Frances','Mandarin','Ruso','Portugues','Japones');

    $inscritos['basico'][0] = 25; 
    $inscritos['basico'][1] = 10; 
    $inscritos['basico'][2] = 8; 
    $inscritos['basico'][3] = 12;
    $inscritos['basico'][4] = 30; 
    $inscritos['basico'][5] = 90;

    $inscritos['medio'][0] = 15; 
    $inscritos['medio'][1] = 5; 
    $inscritos['medio'][2] = 4; 
    $inscritos['medio'][3] = 8;
    $inscritos['medio'][4] = 15; 
    $inscritos['medio'][5] = 25;    

    $inscritos['avanzado'][0] = 10; 
    $inscritos['avanzado'][1] = 2; 
    $inscritos['avanzado'][2] = 1; 
    $inscritos['avanzado'][3] = 4;
    $inscritos['avanzado'][4] = 10; 
    $inscritos['avanzado'][5] = 67;

    for ($i = 0; $i<=5;$i++){ ?>
    <table border="1px">
        <tr>  
            <td colspan="2" bgcolor="#FFC09F"><b><?php echo $idioma[$i]; ?></b></td>
        </tr>
        <tr bgcolor="#FFEE93">
            <td>Basico</td><td><?php echo $inscritos['basico'][$i]; ?></td>
        </tr>
        <tr bgcolor="#ADF786">
            <td>Intermedio</td><td><?php echo $inscritos['medio'][$i]; ?></td>
        </tr>
        <tr bgcolor="#A0CED9">
            <td>Avanzado</td><td><?php echo $inscritos['avanzado'][$i]; ?></td>
        </tr>
</table>
 <?php } ?>

</body>
</html>