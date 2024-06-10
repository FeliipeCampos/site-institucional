<?php
session_start();

// Lógica para sair da sessão
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php"); 
    exit();
}
?>

<!-- Barra de Navegação -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="logo.png" alt="Logo" width="120">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pagina-quem-somos.php">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pagina-servicos.php">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pagina-contatos.php">Contatos</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <?php if (isset($_SESSION['user_id'])) : ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="area-logada/index.php">Área do cliente</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?logout=true">Sair</a>
                    </div>
                </li>
                <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="entrar.php">
                        <i class="fas fa-sign-in-alt"></i> Entrar
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>


