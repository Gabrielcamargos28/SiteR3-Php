<?php
	include_once("../modelo/DestaqueDAO_class.php");
	include_once("../modelo/Destaque_class.php");
	class CadastrarDestaque{
	
		public function __construct(){
			
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$c = new Destaque();
				$c->setNome($_POST["titulo"]);
				$c->setEmail($_POST["texto"]);
				$c->setTelefone($_POST["data_criacao"]);
				$c->setFoto($_POST["foto"]);
				
				$dao = new DestaqueDAO();
				
				$dao->cadastrar($c);
				
				$status = "Cadastro de Destaque realizado " . $c->getNome() . 
				" efetuado com sucesso";
				
				$lista = $dao->listar();
				
				include_once("../visao/formCadastroDestaque.php");
				
			} else{
			
				include_once("../visao/formCadastroDestaque.php");	
			
			}
		}
	}
?>
