<!DOCTYPE html>
<html lang="pt-br">
<head>
		<title> Teste PHP, HTML,CSS e JS </title>
		<meta charset="UTF-8">
		<meta name="description" content="Teste PHP, HTML,CSS e JS">
		<meta name="keywords" content="Site">
		<meta name="author" content="Vitória">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="shortcut icon" href="../img/icone.png">
	</head>
	<body>
		<div id="geral">
		<header id="topo"></header>
		<nav id="cssmenu" class="align-center">
			<ul>
			<li><a href="#"> Exemplo </a> </li>
			<li><a href="#"> Exemplo </a> </li>
			<li><a href="#"> Exemplo </a> </li>
			<li class="active"><a href="contato.html">Contato</a></li>
			</ul>
		</nav>
		<fieldset id="maior">
		<legend id="leg1"> DADOS CADASTRADOS </legend>
		<?php
		//Incluindo a classe:
		include '../model/candidato.class.php';
		//Incluindo o Util:
		include '../util/util.class.php';
		//Instanciando Útil:
		$u1 = new Util();
		//Pegando os dados do formulário:
		$nome = $_GET['nome'];
		$anoNascimento = $_GET['anonascimento'];
		$endereco = $_GET['endereco'];
		$numero = $_GET['numero'];
		$cidade = $_GET['cidade'];
		//Inserido senha 1234567, caso o campo venha vazio:
		$sexo = (empty($_GET['sexo']))? 'Outro' : $_GET['sexo'];
		$email = $_GET['email'];
		$login = $_GET['login'];
		$senha = $_GET['senha'];
		$codigo = $_GET['codigo'];
		$experiencia = $_GET['experiencia'];
	
		//Instanciando a classe:
		$c1 = new Candidato ($nome,$anoNascimento,$endereco,$numero,$cidade,
		$sexo,$email,$login,$senha,$codigo,$experiencia);
		
		//Validando campos em branco:
		if(empty($nome) || empty($anoNascimento)|| empty($endereco) || empty($numero) ||  empty($cidade) ||  empty($sexo) || empty($email) || empty($login) || 
		  empty($codigo) || empty($experiencia) || empty($senha) ){
				echo "<p> Preencha todos os campos.</p>";
				
			//Validar o e-mail:
			}else if(!$u1->validarEmail($email)){
				echo "<p> E-MAIL inválido.</p>";
			
			//Validar o nome:
			}else if(!$u1->testaExpressao('/^[a-zA-Z ]{2,50}$/',$nome)){
					echo"<p>Erro! NOME fora de padrão.</p>";
			
			//Validar cidade:
			}else if(!$u1->testaExpressao('/^[a-zA-Z ]{2,50}$/',$cidade)){
					echo"<p>Erro! CIDADE fora de padrão.</p>";
			
			//Validar login:
			}else if(!$u1->testaExpressao('/^[a-z]{6,10}$/',$login)){
				   echo"<p>Erro! LOGIN fora de padrão.</p>";
				   
			//Validar ano:	   
			}else if(!$u1->testaExpressao('/^[0-9]{4}$/',$anoNascimento)){
				   echo"<p>Erro! ANO fora de padrão.</p>";
				   
			}else{
		//Respostas:
		echo  "<p> " .$c1. 
			  "<br> Idade: "
			  .$c1->calcularIdade().
			  "<br> Salário da Vaga Requirida: R$"
			  .$c1->calcularSalarioMedio();
			}
		?>
		</fieldset>
		<a href="../view/cadastrocandidato.html">
			<button name="volta">Voltar</button>
		</a>
		<footer id="rodape">
		 <br><<cite>********@********.com.br</cite>
		</footer> 
		
	</body>
</html>