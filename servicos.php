<section class="bg-dark text-white py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fs-5 text-white">Descubra Nossos Serviços</h2>
      <h1 class="mb-4 text-white">O Que Oferecemos</h1>
      <p class="text-white">Esses são apenas alguns exemplos do que oferecemos. Se você tiver um projeto específico em mente com requisitos diferentes, entre em contato conosco. Estamos aqui para ajudar. Nossa equipe discutirá detalhes e encontrará a melhor solução para suas necessidades.</p>
    </div>
    <div class="row">
      <!-- Primeiro Serviço -->
      <div class="col-md-4 mb-4">
        <div class="card bg-dark border-light h-100 service-card"
             onmouseover="serviceCardHover(this, true);"
             onmouseout="serviceCardHover(this, false);">
          <div class="card-body">
            <h3 class="card-title text-white">Criação de sites Profissionais</h3>
            <p class="card-text text-white">Transformamos ideias em websites cativantes e personalizados, que refletem a essência da sua marca.</p>
            <ul class="text-white">
              <li>Websites Institucionais</li>
              <li>Plataformas de E-Commerce</li>
              <li>Blogs Interativos</li>
            </ul>
          </div>
          <div class="card-footer text-center bg-transparent border-0">
            <a href="criacao-de-sites.php" class="btn btn-light rounded-pill">Saiba Mais</a>
          </div>
        </div>
      </div>

      <!-- Segundo Serviço -->
      <div class="col-md-4 mb-4">
        <div class="card bg-dark border-light h-100 service-card"
             onmouseover="serviceCardHover(this, true);"
             onmouseout="serviceCardHover(this, false);">
          <div class="card-body">
            <h3 class="card-title text-white">Otimização de Busca (SEO)</h3>
            <p class="card-text text-white">Eleve sua visibilidade online e alcance os primeiros resultados nas buscas, conquistando sua audiência-alvo.</p>
            <ul class="text-white">
              <li>Meta Tags Estratégicas</li>
              <li>Conteúdo Otimizado</li>
              <li>Construção de Links Relevantes</li>
            </ul>
          </div>
          <div class="card-footer text-center bg-transparent border-0">
            <a href="seo.php" class="btn btn-light rounded-pill">Saiba Mais</a>
          </div>
        </div>
      </div>

      <!-- Terceiro Serviço -->
      <div class="col-md-4 mb-4">
        <div class="card bg-dark border-light h-100 service-card"
             onmouseover="serviceCardHover(this, true);"
             onmouseout="serviceCardHover(this, false);">
          <div class="card-body">
            <h3 class="card-title text-white">Design de Logotipos</h3>
            <p class="card-text text-white">Criamos logotipos memoráveis que personificam a identidade única da sua marca.</p>
            <ul class="text-white">
              <li>Variedade de Opções e Revisões</li>
              <li>Expressão Visual da Marca</li>
              <li>Memorabilidade Duradoura</li>
            </ul>
          </div>
          <div class="card-footer text-center bg-transparent border-0">
            <a href="logos.php" class="btn btn-light rounded-pill">Saiba Mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function serviceCardHover(card, isHovered) {
    if (isHovered) {
      card.style.transform = 'scale(1.05)';
      card.style.transition = 'transform 0.3s ease-in-out';
      card.style.boxShadow = '0 4px 8px rgba(0,0,0,0.2)';
    } else {
      card.style.transform = 'scale(1)';
      card.style.boxShadow = 'none';
    }
  }
</script>
