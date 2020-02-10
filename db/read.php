<?php
include_once 'conexao.php';

$querySelect = $conexao->query("select * from tb_clientes");

while ($registros = $querySelect->fetch_assoc()) {
  $id = $registros['id'];
  $nome = $registros['nome'];
  $email = $registros['email'];
  $telefone = $registros['telefone'];

  echo "<tr>";
  echo "<td>$nome</td><td>$email</td><td>$telefone</td>
  <td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a>  
  <a href='db/delete.php?id=$id'><i class='material-icons'>delete</i></a>
  </td>";
  echo "</tr>";
}
