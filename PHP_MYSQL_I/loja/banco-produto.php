<?php

    function listaProdutos($conexao) {
        $produtos = array();
        $resultado = mysqli_query($conexao, "select * from produtos");
        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
        return $produtos;
    }

    function insereProduto($conexao, $produto, $preco) {
        $query = "insert into produtos(produto, preco) values ('{$produto}', {$preco});"; //cria a query
        return mysqli_query($conexao, $query);
    }

    function removeProduto($conexao, $id) {
        $query = "delete FROM produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }

?>