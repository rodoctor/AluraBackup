<?php include('cabecalho.php'); 
include('conecta.php');
include('banco-categoria.php');

$categorias = listaCategorias($conexao);

?>
    <h1>Formulário de Produto</h1>
    <form action="adiciona-produto.php" method="POST">
        <table class="table">
            <tr>
                <td>Produto:</td>
                <td><input type="text" class="form-control" id="produto" name="produto"/></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td ><input type="text" class="form-control" id="preco" name="preco"/></td>
            </tr>
            <tr>
                <td>Descrição: </td>
                <td ><textarea class="form-control" id="descricao" name="descricao"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="usado" value="true">Usado
                </td>
            </tr>
            <tr>
                <td>Categoria: </td>
                <td>
                    <select name="categoria_id" id="categoria_id" class="form-control">
                        <?php foreach ($categorias as $categoria) :?>
                            <option value="<?=$categoria['id'];?>">
                                <?=$categoria['nome'];?>
                            </option>
                        <?php endforeach?>
                    </select>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Enviar</button>
                </td>
            </tr>
        </table>
    </form> 
<?php include('rodape.php');?>