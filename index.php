<?php session_start(); ?>
<?php include_once 'include/header.php'; ?>
<?php include_once 'include/menu.php'; ?>

<!--FORMULÁRIO DE CADASTRO-->
<div class="row container">
  <p>&nbsp;</p>
  <form action="db/create.php" method="POST" class="col s12">
    <fieldset class="formulario" style="padding: 15px;">
      <legend><img src="img/avatar1.png" width="100" alt="imagem de login"></legend>

      <h5 class="light center">Cadastro de Clientes</h5>

      <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        session_unset();
      }
      ?>

      <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
        <label for="nome">Nome do Cliente</label>
      </div>

      <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input type="email" name="email" id="email" maxlength="50" required>
        <label for="email">Email do Cliente</label>
      </div>

      <div class="input-field col s12">
        <i class="material-icons prefix">phone</i>
        <input type="tel" name="telefone" id="telefone" maxlength="15" required>
        <label for="telefone">Telefone do Cliente</label>
      </div>

      <div class="input-field col s12">
        <input type="submit" value="cadastrar" class="btn blue">
        <input type="reset" value="Limpar" class="btn red">
      </div>

  </form>
</div>

<?php include_once 'include/footer.php' ?>