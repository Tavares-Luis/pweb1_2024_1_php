<?php
    include './aula03_funcao.php';

    head();
?>

<div class="col">

<h3>Listagem de Alunos </h3>

<div class="container-fluid">
      <form class="d-flex" role="search">
    <div class="col-4 px-2">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
    </div>
    <div>
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        <a class="btn btn-outline-primary" href="./AlunoForm.php">Novo</a>
      </form>
    </div>
</div>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<?php
    footer();
?>