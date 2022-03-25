<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Combinacion: Anidados y Asociativos</title>
    <style type="text/css"> table{margin: 20px 70px 10px 70px; float: left; width: 20%; text-align: center;} </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<BR><h1 align="center">Alumnos inscritos</h1>
<h3 align="center">(Sintaxis Combinada: Arreglos asociativos y Arreglos Anidados)</h3><BR>
<?php
    $idioma = array ('Ingles','Frances','Mandarin','Ruso','Portugues','Japones');

    $inscritos['basico'] = array(25,10,8,12,30,90);
    $inscritos['medio'] = array(15,5,4,8,15,25);
    $inscritos['avanzado'] = array(10,2,1,4,10,67);

    for ($i = 0; $i<=5;$i++){ ?>
    <table border="1px">
        <tr>  
            <td colspan="2" bgcolor="#B6DEE7"><b><?php echo $idioma[$i]; ?></b></td>
        </tr>
        <tr bgcolor="#FCD9DD">
            <td>Basico</td><td><?php echo $inscritos['basico'][$i]; ?></td>
        </tr>
        <tr bgcolor="#F9E2CF">
            <td>Intermedio</td><td><?php echo $inscritos['medio'][$i]; ?></td>
        </tr>
        <tr bgcolor="#F2CDAF">
            <td>Avanzado</td><td><?php echo $inscritos['avanzado'][$i]; ?></td>
        </tr>
</table>
 <?php } ?>

</body>
</html>