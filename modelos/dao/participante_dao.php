<?php

require_once("modelos/participante.php");

class ParticipanteDao {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;	
	}
	
	public function adiciona(Participante $participante) {
		$query = 'insert into Participante(nome, sobrenome, email) 
														values(?, ?, ?)';

		$stmt = $this->conexao->prepare($query);	
		$stmt->bind_param('sss', $participante->getNome(),
								 $participante->getSobrenome(),
								 $participante->getEmail());
	
		$stmt->execute();

	}

}

?>