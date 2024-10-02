<?php
    require 'Banco.php';
    require 'Livro.php';

    $database = new Banco();
    $db = $database->getConexao();

    $livro = new Livro($db);

    $livro->setId($_GET['id']);

    if ($livro->delete()) {
        echo "Livro deletado com sucesso!";
        header("Refresh:3;url=listarLivro.php");
    } else {
        echo "Erro ao deletar o Livro.";
    }
?>
