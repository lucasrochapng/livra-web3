<?php
    require 'Banco.php';
    require 'Livro.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();

    $livro = new Livro($conexao);

    $livro->setId($_POST['id']);
    $livro->setTitulo($_POST['titulo']);
    $livro->setAutor($_POST['autor']);
    $livro->setGenero($_POST['genero']);
    $livro->setDescricao($_POST['descricao']);

    if ($livro->update()) {
        echo "Livro atualizado com sucesso!";
        header("Refresh:3;url=listarLivro.php");
    } else {
        echo "Erro ao atualizar o livro.";
    }

?>
