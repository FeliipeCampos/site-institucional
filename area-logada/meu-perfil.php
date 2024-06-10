<?php include "../actions/verificar_sessao.php"; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <title>Área do Cliente</title>
      <style>
         .custom-margin {
         margin: 150px 0;
         }
      </style>
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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 custom-margin">
               <div class="row justify-content-center">
                  <div class="col-md-8 text-center">
                     <h1 class="display-4 mb-4">Meu Perfil</h1>
                     <p class="lead">Visualize e atualize suas informações de perfil.</p>
                  </div>
               </div>
               <!-- Formulário de Perfil -->
               <form id="profile-form">
                  <div class="mb-3">
                     <label for="nome" class="form-label">Nome de Usuário</label>
                     <input type="text" class="form-control" id="nome" name="nome" value="Nome do Usuário">
                  </div>
                  <div class="mb-3">
                     <label for="organizacao" class="form-label">Organização ou Grupo</label>
                     <input type="text" class="form-control" id="organizacao" name="organizacao" value="Minha Organização">
                  </div>
                  <div class="row mb-3">
                     <div class="col-md-6">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-control" id="estado" name="estado">
                           <option value="">Selecione um estado</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label for="cidade" class="form-label">Cidade</label>
                        <select class="form-control" id="cidade" name="cidade">
                           <option value="">Selecione um estado primeiro</option>
                        </select>
                     </div>
                  </div>
                  <div class="mb-3">
                     <label for="telefone" class="form-label">Número de Telefone</label>
                     <input type="tel" class="form-control" id="telefone" name="telefone" value="(XX) XXXX-XXXX">
                  </div>
                  <div class="mb-3">
                     <label for="email" class="form-label">E-mail</label>
                     <input type="email" class="form-control" id="email" name="email" value="usuario@example.com">
                  </div>
                  <button type="submit" class="btn btn-primary">Atualizar Perfil</button>
               </form>
            </main>
         </div>
      </div>
      <!-- Footer -->
      <?php include "../footer.php"; ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
         // Função para carregar a lista de estados
         function carregarEstados() {
             fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')
                 .then(response => response.json())
                 .then(estados => {
                     const estadoDropdown = document.getElementById('estado');
                     estados.forEach(estado => {
                         const option = document.createElement('option');
                         option.value = estado.sigla;
                         option.textContent = estado.nome;
                         estadoDropdown.appendChild(option);
                     });
                 });
         }
         
         // Função para carregar as cidades de um estado selecionado
         function carregarCidades(estadoSigla) {
             fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSigla}/municipios`)
                 .then(response => response.json())
                 .then(cidades => {
                     const cidadeDropdown = document.getElementById('cidade');
                     cidadeDropdown.innerHTML = ''; // Limpa as opções anteriores
         
                     cidades.forEach(cidade => {
                         const option = document.createElement('option');
                         option.value = cidade.nome;
                         option.textContent = cidade.nome;
                         cidadeDropdown.appendChild(option);
                     });
                 });
         }
         
         document.addEventListener('DOMContentLoaded', () => {
             carregarEstados();
         
             const estadoDropdown = document.getElementById('estado');
             const cidadeDropdown = document.getElementById('cidade');
         
             estadoDropdown.addEventListener('change', () => {
                 const estadoSelecionado = estadoDropdown.value;
                 carregarCidades(estadoSelecionado);
             });
         });
      </script>
   </body>
</html>