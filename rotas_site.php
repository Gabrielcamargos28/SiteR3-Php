<?php
session_start();
 include_once("./visao/topo.php");
//ROTEADOR

	//GET -> função que deixa variáveis explicitas na URL
	//recebe o comportamento que será executado por GET
	//array chamado $_GET e os índices são as variáveis
	//localhost/agenda/contato.php?fun=alterar
	
	
	if(isset($_GET["fun"])){
		//is + set => é setado? T Está vazio? F
	
		$fun = $_GET["fun"];
		
		if($fun == "cadastrar"){
			
			include_once("./controle/CadastrarDestaque_class.php");
			$pag = new CadastrarDestaque();
			
		} elseif($fun == "alterar"){
			include_once("controle/AlterarDestaque_class.php");
			$pag = new AlterarDestaque();
			
		} elseif($fun == "excluir"){
			
			include_once("controle/ExcluirDestaque_class.php");//op == sim
			$pag = new ExcluirDestaque();
			
		} elseif($fun == "listar"){
			include_once("controle/ListarDestaque_class.php");
			$pag = new ListarDestaque();
			
		}  elseif($fun == "exibir") {
			include_once("controle/ExibirDestaque_class.php");
			$pag = new ExibirDestaque();
			
		} else {
			include_once("controle/ListarDestaque_class.php");
			$pag = new ListarDestaque();			
		}
		
		
	} else {
		include_once("controle/ListarDestaque_class.php");
		$pag = new ListarDestaque();
	}
?>