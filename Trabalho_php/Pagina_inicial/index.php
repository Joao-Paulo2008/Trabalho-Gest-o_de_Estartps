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
    <a class="nav-link active" aria-current="page" href="#">Home</a>
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

<!--Começo dos Produtos -->
<div class="bg-gray-300">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-black text-lg">Produtos em oferta: 
    </h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
    
    <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://olimpofit.com.br/cdn/shop/files/Sc6764777d3ca44d681af334f78f07b0f7.webp?v=1706030880.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Tênis Resistant Sneaker Olimpofit</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 274,90 <p class="text-sm font-medium text-gray-600"> R̶$̶ ̶9̶0̶0̶,̶0̶0̶  </p></p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://http2.mlstatic.com/D_NQ_NP_2X_816531-MLU77453500902_072024-F.webp" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Creatina Monohidratada Pura 500g Dark Lab Unidad+</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 72,90 <p class="text-sm font-medium text-gray-600">  ̶R̶$̶9̶3̶,̶6̶2̶ </p></p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://http2.mlstatic.com/D_NQ_NP_2X_727263-MLB80828036545_112024-F.webp" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Meia Esportiva Antiderrapante Tipo Trusox - Entrega Imediata</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 19,95<p class="text-sm font-medium text-gray-600"> R̶ ̶R̶$̶3̶9̶,̶9̶0̶  </p></p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://http2.mlstatic.com/D_NQ_NP_2X_792405-MLU72527433138_102023-F.webp" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Penalty Futsal Rx 100 XXIII Bola de Futsal Amarela Branca e Preta</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 89,90 <p class="text-sm font-medium text-gray-600">  ̶R̶$̶1̶9̶9̶,̶9̶0̶  </p></p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://http2.mlstatic.com/D_NQ_NP_2X_995874-MLB80382528501_112024-F.webp" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Chuteira Society Para Campo Adulto Morelia Club</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 102,99 <p class="text-sm font-medium text-gray-600">  ̶R̶$̶1̶2̶9̶,̶9̶0̶  </p></p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://http2.mlstatic.com/D_NQ_NP_2X_673159-MLU79211985001_092024-F.webp" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Bola De Basquete Adulto Bt500 Grip Tamanho 7 Cor Marrom</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 187,81 <p class="text-sm font-medium text-gray-600">  ̶R̶$̶2̶3̶8̶,̶6̶9̶ </p></p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a> 
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://http2.mlstatic.com/D_NQ_NP_2X_632020-MLA72273877122_102023-F.webp" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Bola vôlei Penalty MG 3600 XXI cor laranja</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 84,24 <p class="text-sm font-medium text-gray-600">  ̶R̶$̶1̶3̶9̶,̶9̶9̶ </p></p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://http2.mlstatic.com/D_NQ_NP_2X_715569-MLU75986600001_042024-F.webp" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Bola Futevôlei X X I Branca E Preta Penalty</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 220 ,91 <p class="text-sm font-medium text-gray-600">  ̶R̶$̶2̶5̶6̶,̶9̶0̶ </p></p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        
 
   
      </div>
  </div>
</div>

<div class="bg-gray-300">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-black text-lg">Produtos em variedade: 
    </h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
    
    <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://http2.mlstatic.com/D_NQ_NP_2X_837344-MLB80704983718_112024-F.webp" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black">Kit Conjunto Infantil Bordados Retro Neymar Jr 11</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 99,90</p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://m.media-amazon.com/images/I/71ayPzXYogL.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >adidas Bola oficial da Copa do Mundo 2018 Telstar, bola oficial do jogo, branca, tamanho 5</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 599,00</p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://casadotenista.vtexassets.com/arquivos/ids/156214/raquete-tenis-pure-aero-2023-inclinada.jpg?v=638317038657100000.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Raquete de Tênis Babolat Pure Aero Team 16x19 285g L3
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 1.899,00</p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://img.irroba.com.br/fit-in/600x600/filters:fill(fff):quality(80)/equipame/catalog/2021/suporte/suporte-halter-1.jpeg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Kit Halteres Cromados de 1kg a 10kg + Suporte</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 7.999,99</p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://decathlonpro.vtexassets.com/arquivos/ids/72088055/bicicleta-de-estrada-triban-100-prata-m3.jpg?v=638346296641870000.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Bicicleta de Estrada Rc100 Triban</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 1.999,99</p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://cdnv2.moovin.com.br/palotinaesportes/imagens/produtos/det/chuteira-nike-phantom-gx-club-masculina-b8066180948cb0335385d4aa95ce4be0.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Chuteira Nike Phantom Gx Club Masculina</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 499,90</p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://cdn.sistemawbuy.com.br/arquivos/6d469cbc5c1ba1c90470f0d803823bda/produtos/65a7f8ed0c92c/083-prancha-mini-fun-6-apos-0-amarela-5-65a8576fba12e.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Prancha Mini Fun 6'0 - Amarelo</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 620,00</p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        <a href="#" class="group border-t-black border-r-black border-t-2 border-r-2 rounded-lg shadow-[4px_4px_10px_0px_rgba(0,0,0,0.25)] p-6 bg-gray-300">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 aspect-black">
          <img src="https://inspiringfans4takes.vteximg.com.br/arquivos/ids/191765-1000-1000/00176_024_1.jpg?v=638146711311400000.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700 text-black" >Bolsa de Golfe para Tacos Taylor Made Mercedes-Benz</h3>
        <p class="mt-1 text-lg font-medium text-gray-900 text-black">R$ 4.298,00</p>
        <button id="btn_unico" class="btn btn-outline-primary">Comprar</button>
        </a>
        
        
 
   
      </div>
  </div>
</div>


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>