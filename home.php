<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Livra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .hero {
            position: relative;
            text-align: center;
            color: white;
        }
        .hero img {
            width: 100%;
            height: auto;
        }
        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Sombra com transparência */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 2rem; /* Tamanho do texto */
            padding: 20px; /* Espaçamento interno */
        }
        .hero .titulo {
            display: flex; /* Usar flexbox para alinhar os títulos */
            justify-content: center; /* Centralizar horizontalmente */
            font-size: 3rem; /* Tamanho do título */
        }
        .hero .titulo1 {
            color: white; /* Cor do título 1 */
            margin-right: 10px; /* Espaço entre os títulos */
        }
        .hero .titulo2 {
            color: blue; /* Cor do título 2 */
        }
        .hero .slogan {
            color: white; /* Cor do slogan */
            font-size: 1.5rem; /* Tamanho do slogan */
            margin-top: -15px;
        }
        .card {
            height: 100%; /* Ajusta a altura dos cards para ficarem do mesmo tamanho */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top"> LIVRA
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="home.php">INICIO</a>
                </li>
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'form_cadastroLivro.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="form_cadastroLivro.php">CADASTRAR LIVRO</a>
                </li>
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'listarLivro.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="listarLivro.php">LIVROS DISPONÍVEIS</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Imagem com Sombra e Texto -->
    <div class="hero">
        <img src="img/banner.jpg" alt="banner do livra">
        <div class="overlay">
            <div class="titulo">
                <span class="titulo1">LIVRA</span>
            </div>
            <p class="slogan">CONECTANDO LIVROS E LEITORES</p>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="mb-4">Bem-vindo ao Livra!</h1>
        <p>O Livra é uma plataforma online dedicada à troca de livros, promovendo a reutilização e o acesso sustentável à leitura. Conecte-se com outros leitores, descubra novas histórias e contribua para a preservação do meio ambiente ao trocar livros de maneira fácil e segura!</p>
        
        <!-- Cards -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/card-avalia.jpg" class="card-img-top" alt="Avalie suas trocas">
                    <div class="card-body">
                        <h5 class="card-title">Avalie suas Trocas</h5>
                        <p class="card-text">Ajude a fortalecer a comunidade Livra avaliando suas trocas. Suas opiniões garantem uma experiência segura e confiável para todos os usuários.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/card-coins.jpg" class="card-img-top" alt="Ganhe moedas virtuais">
                    <div class="card-body">
                        <h5 class="card-title">Ganhe Livra Coins</h5>
                        <p class="card-text">A cada troca realizada, você ganha moedas virtuais que podem ser usadas para obter descontos exclusivos com nossos colaboradores, tornando suas próximas trocas ainda mais vantajosas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/card-conect.jpg" class="card-img-top" alt="Conecte-se com leitores">
                    <div class="card-body">
                        <h5 class="card-title">Conecte-se com Leitores</h5>
                        <p class="card-text">Entre para uma comunidade de leitores apaixonados por livros! Troque experiências, recomende leituras e descubra novos títulos enquanto contribui para a circulação de conhecimento.</p>
                    </div>
                </div>
            </div>
        </div>
        
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
