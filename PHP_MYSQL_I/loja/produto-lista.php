<?php include('cabecalho.php');
include('conecta.php');
include('banco-produto.php');?>

<?php
    if (array_key_exists("removido", $_GET) && $_GET["remove"]==true) { ?>
        <p class="text-success">produto removido com sucesso</p>
<?php 
    };
?>

<table class="table table-striped table-bordered">
    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto):
    ?>
        <tr>
            <td><?=$produto['produto']?></td>
            <td><?=$produto['preco']?></td>
            <td><a class="text-danger" href="remove-produto.php?id=<?=$produto['id']?>">remover</a></td>
        </tr>
    <?php
        endforeach
    ?>
</table>



<?php include('rodape.php');?>