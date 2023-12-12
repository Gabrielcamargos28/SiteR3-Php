<?php
	//include_once("../modelo/DestaqueDAO_class.php");
	include_once("modelo/DestaqueDAO_class.php");
	//include_once("../modelo/Destaque_class.php");
	include_once("modelo/Destaque_class.php");
	//include_once("../visao/formCadastroDestaque.php");
	include_once("visao/formCadastroDestaque.php");
	class CadastrarDestaque{
	
		public function __construct(){
			
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$d = new Destaque();
				$d->setTitulo($_POST["titulo"]);
				$d->setTexto($_POST["texto"]);
				$d->setDataCriacao($_POST["data_criacao"]);
				
				$fotoNome = $_FILES["foto"]["name"];
				$fotoCaminhoTemporario = $_FILES["foto"]["tmp_name"];
				move_uploaded_file($fotoCaminhoTemporario, "imagens/{$fotoNome}");
				
				$d->setFoto("imagens/{$fotoNome}");

				//$d->setFoto($_POST["foto"]);
				
				$dao = new DestaqueDAO();
				
				$dao->cadastrar($d);
				
				$status = "Cadastro de Destaque realizado " . $d->getTitulo() . 
				" efetuado com sucesso";
				

			} else{
				include_once("visao/formCadastroDestaque.php");
			}
		}
	}
?>
