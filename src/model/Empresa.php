<?php
	class Empresa{
		private var $idEmpresa;
		private var $nome;
		private var $endereco;
        private var $contato;
        private var $encargo;
        private var $cnpj;
		
		function __construct($vid, $vnome, $vendereco, $vcontato, $vencargo, $vcnpj) {
			$this->idEmpresa = $vid;
			$this->nome = $vnome;
			$this->endereco = $vendereco;
            $this->contato = $vcontato;
            $this->encargo = $vencargo;
            $this->cnpj = $vcnpj;
        }

        function adicionarEmpresa(Empresa $empresa){
            
        }

        function editarEmpresa(Empresa $empresa){

        }

        function excluirEmpresa($id){

        }

        function listar(){
            
        }
    }
?>