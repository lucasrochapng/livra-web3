<?php
require 'Banco.php';
require 'Livro.php';

$banco = new Banco();
$db = $banco->getConexao();

$livro = new Livro($db);
$stmt = $livro->read();
$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIVROS DISPONÍVEIS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .nav-link.active {
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top">
            LIVRA
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'active' : ''; ?>" href="home.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'form_cadastroLivro.php' ? 'active' : ''; ?>" href="form_cadastroLivro.php">CADASTRAR LIVRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'listarLivro.php' ? 'active' : ''; ?>" href="listarLivro.php">LIVROS DISPONÍVEIS</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4">LIVROS DISPONÍVEIS</h2>

        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Genero</th>
                    <th>Descricao</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($livros as $livro) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($livro['id']); ?></td>
                        <td><?php echo htmlspecialchars($livro['titulo']); ?></td>
                        <td><?php echo htmlspecialchars($livro['autor']); ?></td>
                        <td><?php echo htmlspecialchars($livro['genero']); ?></td>
                        <td><?php echo htmlspecialchars($livro['descricao']); ?></td>
                        <td>
                            <a href="form_atualizaLivro.php?id=<?php echo $livro['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="deleteLivro.php?id=<?php echo $livro['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-5">
        <div class="container">
            <p>&copy; 2024 Livra. Todos os direitos reservados.</p>
            <p>Entre em contato: <a href="mailto:contato@livra.com" class="text-white">contato@livra.com</a></p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="https://www.facebook.com/livra" class="text-white" target="_blank">Facebook</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.instagram.com/livra" class="text-white" target="_blank">Instagram</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.twitter.com/livra" class="text-white" target="_blank">Twitter</a>
                </li>
            </ul>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
