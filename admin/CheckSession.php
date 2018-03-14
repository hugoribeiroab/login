<?php

class CheckSession{

	
	public function check($session){

		if (!isset($session["logado"]) || $session["logado"] != TRUE) {
			header("Location: ../index.php");
		}
		else {
			return TRUE;
		}
	}
	public function isLoged($session){

		if (!isset($session["logado"]) || $session["logado"] != TRUE) {
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
}

?>