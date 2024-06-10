<?php include "../actions/verificar_sessao.php"; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <title>Área do Cliente</title>
   </head>
   <body>
      <div class="container-fluid">
      <div class="row">
      <!-- Sidebar -->
      <div class="container-fluid">
         <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
               <div class="position-sticky">
                  <!-- Área de Logo -->
                  <div class="text-center py-4">
                     <a href="#">
                     <img src="caminho-para-o-seu-logo.png" alt="Logo da Empresa" class="img-fluid" style="max-width: 80%;">
                     </a>
                  </div>
                  <!-- Menu de Navegação -->
                  <ul class="nav flex-column">
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fas fa-tasks fa-fw me-2"></i>
                        Meus Projetos
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fas fa-shopping-cart fa-fw me-2"></i>
                        Contratar Serviços
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fas fa-comment fa-fw me-2"></i>
                        Abrir Chamado
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fas fa-question-circle fa-fw me-2"></i>
                        Central de Ajuda
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="meu-perfil.php">
                        <i class="fas fa-user fa-fw me-2"></i>
                        Meu Perfil
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fas fa-money-bill fa-fw me-2"></i>
                        Acompanhamento Financeiro
                        </a>
                     </li>
                  </ul>
               </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
               <!-- Conteúdo da Página -->
               <section class="container my-5 py-5">
                  <div class="row justify-content-center">
                     <div class="col-md-8 text-center">
                        <h1 class="display-4 mb-4">Bem-vindo à sua Área do Cliente, <?php echo $_SESSION['user_nome']; ?>!</h1>
                        <p class="lead">Aqui você pode gerenciar suas informações e interagir com a empresa.</p>
                     </div>
                  </div>
                  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-4">
                     <!-- Card 1 - Meus Projetos -->
                     <div class="col">
                        <div class="card h-100">
                           <div class="card-body text-center">
                              <i class="fas fa-tasks fa-3x mb-3"></i>
                              <h5 class="card-title"><a href="#" class="text-decoration-none text-dark">Meus Projetos</a></h5>
                              <p class="card-text">Visualize e acompanhe o progresso dos seus projetos em andamento.</p>
                           </div>
                           <div class="card-footer bg-light text-center">
                              <a href="#" class="btn btn-primary rounded-pill">Ver mais</a>
                           </div>
                        </div>
                     </div>
                     <!-- Card 2 - Contratar Serviços -->
                     <div class="col">
                        <div class="card h-100">
                           <div class="card-body text-center">
                              <i class="fas fa-shopping-cart fa-3x mb-3"></i>
                              <h5 class="card-title"><a href="#" class="text-decoration-none text-dark">Contratar Serviços</a></h5>
                              <p class="card-text">Explore nossos serviços e contrate o que você precisa.</p>
                           </div>
                           <div class="card-footer bg-light text-center">
                              <a href="#" class="btn btn-primary rounded-pill">Ver mais</a>
                           </div>
                        </div>
                     </div>
                     <!-- Card 3 - Abrir Chamado -->
                     <div class="col">
                        <div class="card h-100">
                           <div class="card-body text-center">
                              <i class="fas fa-comment fa-3x mb-3"></i>
                              <h5 class="card-title"><a href="#" class="text-decoration-none text-dark">Abrir Chamado</a></h5>
                              <p class="card-text">Abra um chamado para solicitar suporte ou assistência.</p>
                           </div>
                           <div class="card-footer bg-light text-center">
                              <a href="#" class="btn btn-primary rounded-pill">Ver mais</a>
                           </div>
                        </div>
                     </div>
                     <!-- Card 4 - Central de Ajuda -->
                     <div class="col">
                        <div class="card h-100">
                           <div class="card-body text-center">
                              <i class="fas fa-question-circle fa-3x mb-3"></i>
                              <h5 class="card-title"><a href="#" class="text-decoration-none text-dark">Central de Ajuda</a></h5>
                              <p class="card-text">Encontre respostas para suas dúvidas frequentes na nossa central de ajuda.</p>
                           </div>
                           <div class="card-footer bg-light text-center">
                              <a href="#" class="btn btn-primary rounded-pill">Ver mais</a>
                           </div>
                        </div>
                     </div>
                     <!-- Card 5 - Meu Perfil -->
                     <div class="col">
                        <div class="card h-100">
                           <div class="card-body text-center">
                              <i class="fas fa-user fa-3x mb-3"></i>
                              <h5 class="card-title"><a href="meu-perfil.php" class="text-decoration-none text-dark">Meu Perfil</a></h5>
                              <p class="card-text">Visualize e atualize suas informações de perfil.</p>
                           </div>
                           <div class="card-footer bg-light text-center">
                              <a href="#" class="btn btn-primary rounded-pill">Ver mais</a>
                           </div>
                        </div>
                     </div>
                     <!-- Card 6 - Acompanhamento Financeiro -->
                     <div class="col">
                        <div class="card h-100">
                           <div class="card-body text-center">
                              <i class="fas fa-money-bill fa-3x mb-3"></i>
                              <h5 class="card-title"><a href="#" class="text-decoration-none text-dark">Acompanhamento Financeiro</a></h5>
                              <p class="card-text">Acompanhe o status financeiro dos seus projetos e pagamentos.</p>
                           </div>
                           <div class="card-footer bg-light text-center">
                              <a href="#" class="btn btn-primary rounded-pill">Ver mais</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </main>
         </div>
      </div>
      <!-- Footer -->
      <?php include "../footer.php"; ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>