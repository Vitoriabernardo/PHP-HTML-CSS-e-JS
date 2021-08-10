<?php
	class Util{
		//Método para validar E-mail:
		public function validarEmail($email){
			return filter_var($email, FILTER_VALIDATE_EMAIL);
			
		}
		//método de expressão regular:
		public function testaExpressao($expressao,$atributo){
			return preg_match($expressao,$atributo);
		}
		//Método para minúsculo:
		public function converterMinusculo($variavel){
			return strtolower ($variavel);
		}
		//Método para minúsculo:
		public function converterMaiusculo($variavel){
			return strtoupper($variavel);
		}
	    //Método  para retirar espaço:
		public function retirarEspaco($variavel){
			return trim($variavel);
		}
		//Transformar 1° letra maiúsculo:
		public function converterPrimeiraLetra($variavel){
			return ucwords($variavel);
		}
		//Contar Caracteres:
		public function contarCaracteres($atributo){
			return strlen($atributo);
		}
	}
?>