<?php
include "conexao.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Preparar e executar a consulta de inserção
    $sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $mensagem);

    if ($stmt->execute()) {
        // Inserção bem-sucedida
        header("Location: ../sucesso.php"); // Redirecionar para uma página de sucesso, se desejar
        exit();
    } else {
        // Erro na inserção
        header("Location: ../erro.php"); // Redirecionar para uma página de erro, se desejar
        exit();
    }

    $stmt->close();
}

// Fechar a conexão após o uso
$conn->close();
?>
