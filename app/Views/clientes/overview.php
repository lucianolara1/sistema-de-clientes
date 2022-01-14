<script>

    function confirma(){
        if (!confirm("Tem certeza que realmente deseja excluir?")) {
            return false;
        }

        return true;
    }

</script>

<h1>Gerencie seus clientes</h1>

<a href="/clientes/create" class="btn btn-info">Novo cliente</a>  <a href="/signup" class="btn btn-dark">Novo usuário</a>

<h3 style="margin-top: 80px;">Lista de clientes</h3>

<table class="table">
    <tr>
        <th>Nome</th>
        <th>Ação</th>
    </tr>
    <?php if (!empty($clientes) && is_array($clientes)): ?>
        <?php foreach($clientes as $clientes_item): ?>


            <tr>
                <td><a href="<?php echo "/clientes/view/" .$clientes_item['id'] ?>" style="text-decoration: none;color: #646464;"><?php echo $clientes_item['nome'] ?></a></td>
            
                <td>
                    <a href="<?php echo "/clientes/edit/" .$clientes_item['id'] ?>" style="text-decoration: none;  color: #646464;">Editar</a> - 
                    <a href="<?php echo "/clientes/delete/" .$clientes_item['id'] ?>" onclick="return confirma()" style="text-decoration: none;color: #c50000;">Excluir</a>
                </td>
            </tr>


            <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="2">Nenhum cliente encontrado!</td>
                </tr>
        <?php endif; ?>
</table>