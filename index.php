<?php
    include 'librerias.php';
    session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(!isset($_SESSION["USR"])){
              
        ?>
        <form action="<?=URL?>/controlador/valida.php" method="post">
            <div><label>Nombre :</label><input type="text" name="nomusu"></div>
            <div><label>Clave :</label><input type="password" name="claveusu"></div>
            <div><input type="submit" value="Acceder"></div>
            
        </form>
        <?php
            }
        ?>
    </body>
</html>
