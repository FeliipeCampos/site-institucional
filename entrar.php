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

<!-- login -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card p-4">
          <h2 class="mb-4">Entrar</h2>
          <form method="post" action="actions/entrar.php">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="Seu email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="Sua senha">
            </div>
            <button type="submit" class="btn btn-primary rounded-pill">Entrar</button>
           </form>
          <p class="mt-3">Ainda não tem uma conta? <a href="cadastro.php">Registrar-se</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- login -->

<!-- Footer -->
<?php include "footer.php"; ?>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
