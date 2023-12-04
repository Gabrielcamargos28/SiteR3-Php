<?php
session_start(); //Inicia a sessão
//área de memória dentro do servidor
//carrinho de compras, seus dados de conexão
//qualquer variável que vc queira criar
	include_once("visao/topo.php");
	include("visao/section-logo.php");
	include("visao/carrosel.php");
	include("visao/sobre.php");
	include_once("controle/ListarDestaque_class.php");
	$index = new ListarDestaque();
	//atribuição de responsabilidade
	//o controle sabe como exibir a lista de contatos
	include_once("visao/orcamento.php");
	include_once("visao/base.php");
?>