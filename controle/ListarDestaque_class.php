<?php
	include_once("modelo/DestaqueDAO_class.php");

	class ListarDestaque{
	
		public function __construct(){
			//****** acessar o modelo
			$dao = new DestaqueDAO();

			//iniciou a conexão com o BD
			$lista = $dao->listar();
			
			//vou passar a lista para a visão
			//****** acessar a visão
			include_once("visao/listaDestaque.php");
		}
	}
?>