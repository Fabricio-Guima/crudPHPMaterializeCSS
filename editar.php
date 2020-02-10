<?php
include_once 'include/header.php';
include_once 'include/menu.php';
include_once 'db/conexao.php';

?>

<?php
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect = $conexao->query("select * from tb_clientes where id = '$id'");

while ($registros = $querySelect->fetch_assoc()) {

  $nome = $registros['nome'];
  $email = $registros['email'];
  $telefone = $registros['telefone'];
}
?>

<!--FORMULÁRIO DE CADASTRO-->
<div class="row container">
  <p>&nbsp;</p>
  <form action="db/update.php" method="POST" class="col s12">
    <fieldset class="formulario" style="padding: 15px;">
      <legend><img src="img/avatar1.png" width="100" alt="imagem de login"></legend>

      <h5 class="light center">Edição de Clientes</h5>

      <div class="input-field col s12 hide">
        <input type="text" name="id" id="id" value="<?php echo $id ?>">
        <label for="id">ID do Cliente</label>
      </div>

      <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="nome" id="nome" maxlength="40" required autofocus value="<?php echo $nome ?>">
        <label for="nome">Nome do Cliente</label>
      </div>

      <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input type="email" name="email" id="email" maxlength="50" required value="<?php echo $email ?>">
        <label for="email">Email do Cliente</label>
      </div>

      <div class="input-field col s12">
        <i class="material-icons prefix">phone</i>
        <input type="tel" name="telefone" id="telefone" maxlength="15" required value="<?php echo $telefone ?>">
        <label for="telefone">Telefone do Cliente</label>
      </div>

      <div class="input-field col s12">
        <input type="submit" value="Alterar" class="btn blue">
        <a href="consultas.php" class="btn red">Voltar</a>
      </div>

  </form>
</div>















<?php
include_once 'include/footer.php';
?>