<?php

class Conexao {

	private $host = 'sql211.infinityfree.com';
	private $dbname = 'if0_35265150_php_com_pdo';
	private $user = 'if0_35265150';
	private $pass = 'reYyxpSX1EiOK';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>