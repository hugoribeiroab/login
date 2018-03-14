<?php
include ("servidor.php");
class LoginClass{
	function toLogin($usuario, $senha){
		$server = new Servidor();
		$mysqli = new mysqli($server->getHost(), $server->getUsuario(), $server->getSenha(), $server->getBanco(), $server->getPort());
		$mysqli->set_charset("utf8");
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		$resultado = $mysqli->query("SELECT * FROM usuarios WHERE user = '".$usuario."' AND pass = '".$senha."'");
		if (!$resultado){
			return FALSE;
		}
		$resultado->data_seek(0);
		$row = $resultado->fetch_assoc();
		$mysqli->close();
		return $row;
	}
}
?>
