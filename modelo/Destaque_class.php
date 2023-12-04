<?php
    class Destaque{

        private $id;
        private $titulo;
        private $texto;
        private $data_criacao;
        private $foto;

        public function __contruct(){
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;    
        }

        public function setTexto($texto){
            $this->texto = $texto;    
        }
        public function setDataCriacao($data_criacao){
            $this->data_criacao = $data_criacao;    
        }
        public function setFoto($foto){
            $this->foto = $foto;    
        }

        public function getId(){
            return $this->id;
        }

        public function getTitulo(){
            return $this->titulo;    
        }

        public function getTexto(){
            return $this->texto;   
        }
        public function getDataCriacao(){
            return $this->data_criacao;    
        }
        public function getFoto(){
            return $this->foto;    
        }
    }
?>