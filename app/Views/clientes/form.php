<h2><?php echo isset($id) ? "Editando Cliente" : "Novo Cliente" ?></h2>
<p><?php echo isset($id) ? "Edite as informações de um cliente" : "Informe os dados para inserir um novo cliente." ?></p>
<?php echo \Config\Services::validation()->listErrors(); ?>

<form action="/clientes/store" method="post" style="margin-top: 50px;">

<div class="form-group" style="margin: 30px;">
  <label for="nome">Nome</label>
  <input type="text" name="nome" id="nome" class="form-control" value="<?php echo isset($nome) ? $nome : set_value('nome') ?>">
</div>

<div class="form-group" style="margin: 30px;">
  <label for="telefone">Telefone</label>
  <input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo isset($telefone) ? $telefone : set_value('telefone') ?>">
</div>

<div class="form-group" style="margin: 30px;">
  <label for="informacoes">Informações</label>
  <input type="text" name="informacoes" id="informacoes" class="form-control" value="<?php echo isset($informacoes) ? $informacoes : set_value('informacoes') ?>">
</div>

<input type="hidden" name="id" value="<?php echo isset($id) ? $id : set_value('id') ?>">

<div class="form-group" style="margin: 30px;">
  <input type="submit" value="Salvar" class="btn btn-info">
</div>


</form>