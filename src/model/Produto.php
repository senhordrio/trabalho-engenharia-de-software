<?php
	class Produto{
		private var $idProduto;
		private var $nome;
		private var $valor;
		private var $quantidade;
		
		function __construct($vid, $vnome, $vvalor, $vquantidade) {
			$this->idProduto = $vid;
			$this->nome = $vnome;
			$this->valor = $vvalor;
			$this->quantidade = $vquantidade;
        }
        
        function adicionarProduto(){
            
        }

        function editarProduto(){

        }

        function excluirProduto(){

        }

        function atualizarProdutos(){
            
        }

        function listarProdutos(){
            
        }
		
		function getIdProduto() {return $this->idProduto;}
		function getNome() {return $this->nome;}
		function getValor() {return $this->valor;}
		function getQuantidade() {return $this->quantidade;}
		
		function setCodigo($vid) {$this->idProduto = $vid;}
		function setNome($vnome) {$this->nome = $vnome;}
		function setNascimento($vvalor) {$this->valor = $vvalor;}
		function setSalario($vquantidade) {$this->quantidade = $vquantidade;}
	}
?>