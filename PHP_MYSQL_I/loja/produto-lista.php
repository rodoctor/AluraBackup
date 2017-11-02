<?php include('cabecalho.php');
include('conecta.php');
include('banco-produto.php');

$produtos = listaProdutos($conexao);
?>

<?php if (array_key_exists("removido", $_GET) && $_GET["remove"]==true) { ?>
        <p class="text-success">produto removido com sucesso</p>
<?php };?>

<table class="table table-striped table-bordered">
    <?php foreach($produtos as $produto): ?>
        <tr>
            <td><?=$produto['produto']?></td>
            <td><?=$produto['preco']?></td>
            <td><?=substr($produto['descricao'],0, 40)?></td>
            <td><?=$produto['categoria_nome']?></td>
            <td>
                <form action="remove-produto.php" method="POST">
                    <input type="hidden" name="id" value="<?=$produto['id']?>">
                    <button class="btn btn-danger">remover</button>
                </form>
            </td>
        </tr>
    <?php endforeach ?>
</table>



<?php include('rodape.php');?>