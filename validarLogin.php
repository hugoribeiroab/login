<?php
include ("admin/servidor/LoginClass.php");
header("Content-Type: text/html; charset=UTF-8", true);
	session_start();
	$login = new LoginClass();
	$res = $login->toLogin($_POST["usuario"], $_POST["senha"]);
 	
    if ($res) {

    $_SESSION["logado"] = TRUE;
    $_SESSION["ID"] = $res["ID"];

    header ("Location: admin/interno.php");
    }
    else {
    header ("Location: index.php?fail=1");
    }    
?>