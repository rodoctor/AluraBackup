<?php include('cabecalho.php');
include('banco-produto.php');
include('conecta.php');

$produto = $_GET["produto"];
$preco = $_GET["preco"];

//executa a conexão com a query
if (insereProduto($conexao, $produto, $preco)) { ?>
    <p class="text-success"> O produto <?= $produto;?>, preço <?= $preco;?> foi adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">Ocorreu o seguinte erro ao adicionar o produto: <?= $msg;?></p>
<?php };
?>

<?php include('rodape.php');?>