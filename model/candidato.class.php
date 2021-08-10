<?php
   class Candidato{
	   private $nome;
	   private $anoNascimento;
	   private $endereco;
	   private $numero;
	   private $cidade;
	   private $sexo;
	   private $email;
	   private $login;
	   private $senha;
	   private $codigo;
	   private $experiencia;
	   
	   //Método Construtor Mágico:
		public function __construct($nome,$anoNascimento,$endereco,$numero,$cidade,
		$sexo,$email,$login,$senha,$codigo,$experiencia){
			$this->nome = $nome;
			$this->anoNascimento = $anoNascimento;
			$this->endereco= $endereco;
			$this->numero = $numero;
			$this->cidade = $cidade;
			$this->sexo = $sexo;
			$this->email = $email;
			$this->login = $login;
			$this->senha = $senha;
			$this->codigo = $codigo;
			$this->experiencia = $experiencia;
		}
		//Métodos Acessores:
		public function __set($atributo,$valor){
			$this->$atributo = $valor;
		}
		public function __get($atributo){
			return $this->$atributo;
		}
		
		//Método __toString:
		public function __toString(){
			return "<br>Nome: $this->nome
					<br>Ano Nascimento: $this->anoNascimento
					<br>Endereço: $this->endereco
					<br>Número: $this->numero
					<br>Cidade: $this->cidade
					<br>Sexo: $this->sexo
					<br>E-mail: $this->email
					<br>Login: $this->login
					<br>Senha: $this->senha
					<br>Código da Vaga Requirida: $this->codigo
					<br>Experiência Profissionais: $this->experiencia";
		}
		//Calculando a idade:
		public function calcularIdade(){
			return date('Y') - $this->anoNascimento;
	    }
		//Calculando Salário Médio:
		public function calcularSalarioMedio(){
			if($this->codigo==1){
				return (1200+120+140) - 45;
			}else if($this->codigo==2){
				return (2800+150+140) - 45;
			}else if($this->codigo==3){
				return (3650+100+140) - 45;
			}else if($this->codigo==4){
				return (6800+200+140) -45;
			}else{
				return (7800+200+140)+(7800 + 0.20) - 85;
			}
		}
   }
?>