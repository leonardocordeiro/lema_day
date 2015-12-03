<?php

require_once('modelos/participante.php');
require_once('modelos/dao/participante_dao.php');
require_once('infra/connection_factory.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];

$participante = new Participante($nome, $sobrenome, $email);

$factory = new ConnectionFactory();
$conexao = $factory->getConnection();

$participanteDao = new ParticipanteDao($conexao);
$participanteDao->adiciona($participante);

?>

