<?php
session_start(); // Iniciar a sessão

include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Consulta para verificar o usuário no banco de dados
    $query = "SELECT id, nome, senha FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user["senha"])) {
            // Autenticado com sucesso, criar sessão e redirecionar para a área logada
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_nome"] = $user["nome"];
            header("Location: ../area-logada/index.php");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $stmt->close();
}
?>
