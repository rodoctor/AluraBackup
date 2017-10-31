<?php include('cabecalho.php'); ?>
    <h1>Formulário de Produto</h1>
    <form action="adiciona-produto.php">
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
                <td>
                    <button type="submit">Enviar</button>
                </td>
            </tr>
        </table>
    </form> 
<?php include('rodape.php');?>