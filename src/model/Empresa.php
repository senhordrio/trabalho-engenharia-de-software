<?php
	class Empresa{
		private $idEmpresa;
		private $nome;
		private $endereco;
        private $contato;
        private $encargo;
        private $cnpj;
		
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