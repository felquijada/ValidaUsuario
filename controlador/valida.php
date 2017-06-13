<?php
 include '../librerias.php';
 session_start();
 $oUsuario=new Usuario($_REQUEST["nomusu"], $_REQUEST["claveusu"]);
 
 if($oUsuario->VerificaAcceso()){
     echo "Todo Bien";
     $_SESSION["USR"]=$oUsuario;
 }
 else{
     echo "Todo Mal";
 }
