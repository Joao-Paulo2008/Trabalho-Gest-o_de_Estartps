<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Crud PHP</title>
</head>
<body>

<!-- Começo NAVBAR -->   
<nav class="navbar bg-gray-900 border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="imgs/image (3).png" alt="" width="100px" class="rounded-full"></a>
    
    <ul class="nav justify-content-center ms-auto">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="../Pagina_inicial/index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../Pagina_inicial/Sobre_nois.php">Quem Somos</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="../Pagina_inicial/contato.php">Entre em contato</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="../contas/Entrar.php">Entrar</a>
  </li>
</ul>
    <form class="d-flex ustify-content-center" role="search">
      <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Começo CARROSSEL -->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/www.reallygreatsite.com.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/www.reallygreatsite.com (1).png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/www.reallygreatsite.com (2).png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
  <div class="absolute inset-0 -z-10 overflow-hidden">
    <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
      <defs>
        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
          <path d="M100 200V.5M.5 .5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
        <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
    </svg>
  </div>

  <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
    <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
      <div class="lg:pr-4">
        <div class="lg:max-w-lg">
          <p class="text-base/7 font-semibold text-indigo-600">Plano de Negócio - JPSPORTS</p>
          <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">A JPSPORTS</h1>
          <p class="mt-6 text-xl/8 text-gray-700">
            A JPSPORTS é uma empresa que visa atender a demanda crescente por produtos esportivos, oferecendo uma variedade de itens para diferentes modalidades. Nosso objetivo é nos tornar a principal referência em vendas de produtos esportivos na região, proporcionando uma experiência de compra completa e satisfatória aos nossos clientes.
          </p>
        </div>
      </div>
    </div>

    <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
      <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="../Pagina_inicial/imgs/ladinpage.png" alt="JPSPORTS logo ou imagem do produto">
    </div>

    <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
      <div class="lg:pr-4">
        <div class="max-w-xl text-base/7 text-gray-700 lg:max-w-lg">
          <p>
            Atuamos em um mercado amplo, abrangendo desde atletas amadores até profissionais, além de escolas, clubes e academias. Com alguns diferenciais de nossos concorrentes:
            <br>Atendimento personalizado e especializado.
            <br>Preços competitivos e promoções exclusivas.
            <br>Parcerias com famosos e marcas renomadas.
            <br>Entrega rápida e eficiente.  
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="mx-auto max-w-7xl px-6 py-12 sm:px-12 lg:px-16">
    <h2 class="text-2xl font-bold text-gray-900">Plano Financeiro</h2>
    <div class="mt-6 text-gray-700">
      <p><strong>Investimentos Iniciais:</strong></p>
      <ul>
        <li>- Marketing (principalmente com parcerias) e divulgação.</li>
        <li>- Compra de estoque inicial.</li>
        <li>- Equipamentos (caixa, computador, etc.).</li>
      </ul>
      <p><strong>Preços dos serviços/produtos:</strong> Os preços serão definidos com base na pesquisa de mercado e na margem de lucro desejada. Como o preço dos produtos, que foram selecionados em cima dos preços dos concorrentes, como forma de derrubar essa concorrência.</p>
      <p><strong>Projeção de lucros:</strong> Estima-se um lucro de R$10.000,00 nos primeiros três meses de operação.</p>
    </div>

    <h2 class="mt-12 text-2xl font-bold text-gray-900">Estratégia de Marketing</h2>
    <div class="mt-6 text-gray-700">
      <p><strong>Divulgação:</strong></p>
      <ul>
        <li>- Criação de um site e redes sociais.</li>
        <li>- Distribuição de panfletos e flyers.</li>
        <li>- Parcerias com influenciadores digitais.</li>
        <li>- Participação em eventos esportivos.</li>
      </ul>
      <p><strong>Promoções:</strong></p>
      <ul>
        <li>- Descontos para compras acima de determinado valor, kits promocionais e sorteios.</li>
      </ul>
    </div>

    <h2 class="mt-12 text-2xl font-bold text-gray-900">Metas e Avaliação</h2>
    <div class="mt-6 text-gray-700">
      <p><strong>Metas a curto prazo:</strong></p>
      <ul>
        <li>- Aumentar a base de clientes em [percentual] nos primeiros seis meses.</li>
        <li>- Alcançar um faturamento mensal de [valor].</li>
      </ul>
      <p><strong>Metas a longo prazo:</strong></p>
      <ul>
        <li>- Expandir o negócio para outras localidades.</li>
        <li>- Diversificar a linha de produtos.</li>
      </ul>
      <p><strong>Monitoramento:</strong> Análise mensal das vendas, acompanhamento das métricas das redes sociais e feedback dos clientes.</p>
    </div>
  </div>
</div>




 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>