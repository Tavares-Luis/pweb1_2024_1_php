<?php
    include "./aula03_funcao.php";

    head();
?>

<div class="col">

<h3>Formulário Aluno</h3>

<div class="mb-3">

  <label for="nome" class="form-label">Nome</label>
  <input type="text" class="form-control" id="nome" placeholder="Nome">

</div>

<div class="mb-3">

  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">

</div>

<div class="mb-3">

  <label for="telefone" class="form-label">Telefone</label>
  <input type="text" class="form-control" id="telefone" placeholder="(49) 98800-5500)">

</div>


</div>

<button type="submit" class="btn btn-success">Salvar</button>
<a class="btn btn-primary" href="./AlunoList.php">Voltar</a>


<?php
    footer();
?>