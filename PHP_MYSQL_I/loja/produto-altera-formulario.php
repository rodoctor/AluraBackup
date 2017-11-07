<?php include('cabecalho.php'); 
include('conecta.php');
include('banco-produto.php');
include('banco-categoria.php');

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);

$usado = $produto['usado'] ? "checked='checked'" : ""; //teste para verificar se o produto está marcado como usado

?>
    <h1>Alterando Produto</h1>
    <form action="altera-produto.php" method="POST">
        <table class="table">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
            <tr>
                <td>Produto:</td>
                <td><input type="text" class="form-control" id="produto" name="produto" value="<?=$produto['produto']?>"/></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td ><input type="text" class="form-control" id="preco" name="preco" value="<?=$produto['preco']?>"/></td>
            </tr>
            <tr>
                <td>Descrição: </td>
                <td >
                    <textarea class="form-control" id="descricao" name="descricao"><?=$produto['descricao']?></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="usado" <?=$usado?> value="true">Usado
                </td>
            </tr>
            <tr>
                <td>Categoria: </td>
                <td>
                    <select name="categoria_id" id="categoria_id" class="form-control">
                        <?php foreach ($categorias as $categoria) :
                            $seEssaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                            $selecao = $seEssaEhACategoria ? "selected='selected'" : "";
                            ?>
                            <option value="<?=$categoria['id'];?>" <?=$selecao?>>
                                <?=$categoria['nome'];?>
                            </option>
                        <?php endforeach?>
                    </select>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Alterar</button>
                </td>
            </tr>
        </table>
    </form> 
<?php include('rodape.php');?>