<?php
    require 'Banco.php';
    require 'Livro.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();

    $cliente = new Livro($conexao);

    // Usando os métodos set
    $cliente->setTitulo($_POST['titulo']);
    $cliente->setAutor($_POST['autor']);
    $cliente->setGenero($_POST['genero']);
    $cliente->setDescricao($_POST['descricao']);

        if ($cliente->create()) {
            echo "Livro cadastrado com sucesso!";
            header("Refresh:3;url=listarLivro.php");
        } else {
            echo "Erro ao cadastrar o livro.";
        }

?>

