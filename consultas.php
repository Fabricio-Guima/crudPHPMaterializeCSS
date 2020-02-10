<?php include_once 'include/header.php' ?>

<?php include_once 'include/menu.php' ?>

<div class=" row container">
  <div class="col s12">
    <h5 class="light">Consultas</h5>
  </div>

  <table class="striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
      </tr>
    </thead>

    <tbody>
      <?php
      include_once 'db/read.php';
      ?>
    </tbody>

  </table>

</div>

















<?php include_once 'include/footer.php' ?>