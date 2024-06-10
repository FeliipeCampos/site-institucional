<?php include "actions/conexao.php"; ?>
<section id="contato" class="container my-5">
  <div class="container my-5">
    <div class="row">
      <div class="col-md-6"> <!-- Coluna do Formulário -->
        <div class="card border-0"> <!-- Formulário -->
          <div class="card-body">
            <h1 class="mb-4 text-center" style="color: #21252a;">Fale Conosco</h1>
            <p class="mb-4 text-center" style="color: #21252a;">Estamos aqui para responder às suas perguntas. Preencha o formulário e entraremos em contato em breve via email.</p>
            <form method="POST" action="actions/processar_formulario.php">
              <div class="mb-3">
                <label for="nome" class="form-label" style="color: #21252a;">Nome</label>
                <input type="text" class="form-control rounded-pill" id="nome" name="nome" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label" style="color: #21252a;">E-mail</label>
                <input type="email" class="form-control rounded-pill" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="mensagem" class="form-label" style="color: #21252a;">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" maxlength="1000" required></textarea>
                <small class="form-text text-muted">Máximo de 1000 caracteres.</small>
              </div>
              <button type="submit" class="btn btn-outline-secondary rounded-pill">
                Enviar Mensagem
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6"> <!-- Coluna dos Cards -->
        <div class="card mb-3 border-0"> <!-- Card WhatsApp -->
          <div class="card-body text-center">
            <h2 class="mb-3" style="color: #21252a;">Contate-nos pelo WhatsApp</h2>
            <p class="mb-4" style="color: #21252a;">Estamos disponíveis para ajudar via WhatsApp.</p>
            <a href="https://api.whatsapp.com/send?phone=numero" target="_blank" class="btn btn-outline-secondary rounded-pill">
              Entrar em Contato
            </a>
          </div>
        </div>
        <div class="card border-0"> <!-- Card Chat Online -->
          <div class="card-body text-center">
            <h2 class="mb-3" style="color: #21252a;">Inicie um Chat na Plataforma</h2>
            <p class="mb-4" style="color: #21252a;">Preferindo um chat online? Inicie um chat na nossa plataforma.</p>
            <a href="#" class="btn btn-outline-secondary rounded-pill">
              Iniciar Chat
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

