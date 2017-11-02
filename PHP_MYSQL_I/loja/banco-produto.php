<?php

    function listaProdutos($conexao) {
        $produtos = array();
        $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
        return $produtos;
    }

    function insereProduto($conexao, $produto, $preco, $descricao, $usado, $categoria_id) {
        $query = "insert into produtos(produto, preco, descricao, usado, categoria_id) values ('{$produto}', {$preco}, '{$descricao}', {$usado}, {$categoria_id})"; //cria a query
        return mysqli_query($conexao, $query);
    }

    function removeProduto($conexao, $id) {
        $query = "delete FROM produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }

?>