<?php include "actions/conexao.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Sua Página</title>
</head>
<body>

<!-- Header -->
<?php include "header.php"; ?>
<!-- Header -->

<!-- cadastro -->
<section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card p-4">
                        <h2 class="mb-4">Registrar-se</h2>
                        <form method="post" action="actions/cadastro.php" onsubmit="return validateForm();">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control rounded-pill" id="name" name="name" placeholder="Seu nome">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="Seu email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="Sua senha">
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirmar Senha</label>
                                <input type="password" class="form-control rounded-pill" id="confirmPassword" placeholder="Confirmar sua senha">
                                <p id="passwordError" class="text-danger"></p>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-pill">Registrar</button>
                        </form>
                        <p class="mt-3">Já possui uma conta? <a href="entrar.php">Entrar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            var passwordError = document.getElementById("passwordError");

            if (password !== confirmPassword) {
                passwordError.textContent = "As senhas não coincidem. Por favor, verifique novamente.";
                return false;
            } else {
                passwordError.textContent = "";
            }
        }
    </script>
<!-- cadastro -->

<!-- Footer -->
<?php include "footer.php"; ?>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
