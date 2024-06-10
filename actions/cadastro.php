<?php

include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Verificar se o email já existe no banco de dados
    $checkEmailQuery = "SELECT id FROM usuarios WHERE email = ?";
    $checkEmailStmt = $conn->prepare($checkEmailQuery);
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailResult = $checkEmailStmt->get_result();

    if ($checkEmailResult->num_rows > 0) {
        echo "O email inserido já existe no banco de dados.";
    } else {
        // Inserir novo registro se o email não existir
        $insertQuery = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("sss", $name, $email, $password);

        if ($stmt->execute()) {
            echo "Registro bem-sucedido!";
        } else {
            echo "Erro ao registrar: " . $stmt->error;
        }

        $stmt->close();
    }

    $checkEmailStmt->close();
}
?>
