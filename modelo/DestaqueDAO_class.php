<?php
	include_once("ConnectionFactory_class.php"); //PDO
	include_once("Destaque_class.php"); //entidade
    
	class DestaqueDAO{
        //DAO - Data Access Object	
	//CRUD - Creat, Read, Update e Delete
	//operações básicas de banco de dados
	
		public $con = null; //obj recebe conexão
		//jdbc:postgresql://localhost:5433/task_controller?createDatabaseIfNotExist=true
		public function __construct(){
			$conF = new ConnectionFactory();
			$this->con = $conF->getConnection();
		}
        //cadastrar
		public function cadastrar($cont){
			try{
				$stmt = $this->con->prepare(
				"INSERT INTO destaque(titulo, texto, data_criacao, foto)
				VALUES (:titulo, :texto, :data_criacao, :foto)");
				
				//ligamos as âncoras aos valores de Contato
				$stmt->bindValue(":titulo", $cont->getTitulo());
				$stmt->bindValue(":texto", $cont->getTexto());
				$stmt->bindValue(":data_criacao", $cont->getDataCriacao());
				$stmt->bindValue(":foto", "teste");
				
				$stmt->execute(); //execução do SQL	
				
				/*$this->con->close();
				$this->con = null;*/	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}

        //alterar
		public function alterar($cont){
			try{
				$stmt = $this->con->prepare(
				"UPDATE destaque SET titulo =:titulo,texto =:texto,data_criacao=:datacriacao,foto=:foto
				WHERE id=:id");
				
				//ligamos as âncoras aos valores de Contato
				$stmt->bindValue(":titulo", $cont->getTitulo());
				$stmt->bindValue(":texto", $cont->getTexto());
				$stmt->bindValue(":data_criacao", $cont->getDataCriacao());
				$stmt->bindValue(":foto", $cont->getFoto());
				$stmt->bindValue(":id", $cont->getId());
				
				$this->con->beginTransaction();
				//Inicia a transação
				//consistência ao banco
				//sem erros
				$stmt->execute(); //execução do SQL	
				$this->con->commit(); 
				//rollback - voltar atrás
				//commit - confirmação de tudo ok
				
				/*$this->con->close();
				$this->con = null;*/	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}

		//listar
		public function listar($query = null){
			//quando $consulta == null
			//listar todos os contatos do banco
			//consultar a tabela contato
			//para cada linha da tabela vou criar um obj contato
			//guardar o objeto em um array
			//essa função retorna uma lista
			//query em português é consulta
			
			try{
				if($query == null){
					$dados = $this->con->query("SELECT * FROM destaque");
				} else {
					$dados = $this->con->query($query);
				}
				
				/*$this->con->close();
				$this->con = null;*/
				
				$lista = array();
				
				foreach($dados as $linha){
					$c = new Destaque();
					$c->setId($linha["id"]);
					$c->setTitulo($linha["titulo"]);
					$c->setTexto($linha["texto"]);
					$c->setDataCriacao($linha["data_criacao"]);
					$c->setFoto($linha["foto"]);
					
					$lista[] = $c;
					//preenchendo um array com objetos Contato
				}
				
				return $lista;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		//exibir 
		public function exibir($id){			
			try{				
				$lista = $this->con->query("SELECT * FROM destaque WHERE id = " . $id);
				
				/*$this->con->close();
				$this->con = null;*/
				
				$dado = $lista->fetchAll(PDO::FETCH_ASSOC);
				
				$c = new Destaque();
				$c->setId($dado[0]["id"]);
				$c->setNome($dado[0]["titulo"]);
				$c->setTelefone($dado[0]["texto"]);
				$c->setEmail($dado[0]["data_criacao"]);
				$c->setFoto($dado[0]["foto"]);
				
				return $c;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
			
		}
    }
?>  