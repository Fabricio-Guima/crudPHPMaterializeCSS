<?php
session_start();
include_once 'conexao.php';



$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
$id =  filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$queryUpdate = $conexao->query("update tb_clientes set nome='$nome', email='$email',
telefone='$telefone' where id ='$id'");

$affected_rows = mysqli_affected_rows($conexao);

if ($affected_rows > 0) {
  header('Location:../consultas.php');
}
