<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Arreglos Anidados</title>
    <style type="text/css"> table{margin: 20px 70px 10px 70px; float: left; width: 20%; text-align: center;} </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<BR><h1 align="center">Alumnos inscritos</h1>
<h3 align="center">(Sintaxis basada en arreglos anidados)</h3><BR>
<?php
    
    $idioma = array ('Ingles','Frances','Mandarin','Ruso','Portugues','Japones');
    $inscritos = array( array(25,10,8,12,30,90), array(15,5,4,8,15,25), array(10,2,1,4,10,67));

    for ($i = 0; $i<=5;$i++){ ?>
    <table border="1px">
        <tr>  
            <td colspan="2" bgcolor="#F7E359"><b><?php echo $idioma[$i]; ?></b></td>
        </tr>
        <tr bgcolor="#9A9DB5">
            <td>Basico</td><td><?php echo $inscritos[0][$i]; ?></td>
        </tr>
        <tr bgcolor="#5A5C90">
            <td>Intermedio</td><td><?php echo $inscritos[1][$i]; ?></td>
        </tr>
        <tr bgcolor="#7D7DFF">
            <td>Avanzado</td><td><?php echo $inscritos[2][$i]; ?></td>
        </tr>
</table>
 <?php } ?>

</body>
</html>