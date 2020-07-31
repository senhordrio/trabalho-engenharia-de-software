<?php
	class Usuario{
		private var $idUsuario;
		private var $email;
		private var $senha;
		private var $permissoes;
		
		function __construct($vid, $vemail, $vsenha, $vpermissoes) {
			$this->idUsuario = $vid;
			$this->email = $vemail;
			$this->senha = $vsenha;
			$this->permissoes = $vpermissoes;
        }

        function login(){

        }

        function logout(Usuario $usuario){

        }

        function usuarioAtual(){

        }
    }
?>