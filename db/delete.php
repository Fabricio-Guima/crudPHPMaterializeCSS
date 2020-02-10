<?php

include_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
echo "$id";
$queryDelete = $conexao->query("delete from tb_clientes where id ='$id' ");

if (mysqli_affected_rows($conexao) > 0) {
  header("Location:../consultas.php");
}
