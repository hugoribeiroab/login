<?php
class Servidor{
	private $banco = "SEU BANCO DE DADOS VAI AQUI";
	private $port = "3306";
	private $host = "O ENDEREÇO DO SEU HOST VAI AQUI, SE FOR LOCAL, USE 'localhost' ";
	private $usuarioServidor = "SEU USUARIO DO BANCO DE DADOS VAI AQUI";
	private $senhaServidor = "SUA SENHA DO BANCO DE DADOS VAI AQUI";
	
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
