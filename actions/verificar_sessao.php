<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    // Redirecionar para a página de login
    header("Location: entrar.php");
    exit();
}
?>
