<?php
class Servidor{
	private $banco = "loguin";
	private $port = "3306";
	private $host = "localhost";
	private $usuarioServidor = "teste2";
	private $senhaServidor = "teste2";
	
	public function getBanco(){
		return $this->banco;
	}
	public function getPort(){
		return $this->port;
	}
	public function getHost(){
		return $this->host;	
	}
	public function getUsuario(){
		return $this->usuarioServidor;
	}
	public function getSenha(){
		return $this->senhaServidor;
	}
}

?>