<!-- Topbar Start -->
<div class="container-fluid">

        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
            <a href="{{ url('/') }}" class="logo">
             <span class="h1 px-2">SkyStore</span>
            </a>

                <!-- <img class="img-fluid" src="img/logos.png" alt=""> -->
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar produtos">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Minha Conta</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Entrar</button>
                            <button class="dropdown-item" type="button">Inscreva-se</button>
                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">MZN</button>
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">PT</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EN</button>
                            <button class="dropdown-item" type="button">FR</button>
                            <button class="dropdown-item" type="button">AR</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2 ">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span id="cart-counter" class="badge text-dark border border-dark rounded-circle cart-icon-count" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-white m-0"><i class="fa fa-bars mr-2"></i>Categorias</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Vestuário <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Vestuário Masculino</a>
                                <a href="" class="dropdown-item">Vestuário Feminino</a>
                                <a href="" class="dropdown-item">Vestuário de Bebê</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Camisas</a>
                        <a href="" class="nav-item nav-link">Jeans</a>
                        <a href="" class="nav-item nav-link">Roupa de Banho</a>
                        <a href="" class="nav-item nav-link">Roupa de Dormir</a>
                        <a href="" class="nav-item nav-link">Roupa Esportiva</a>
                        <a href="" class="nav-item nav-link">Macacão</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="" class="nav-item nav-link">Jaquetas</a>
                        <a href="" class="nav-item nav-link">Sapatos</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Sky</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Green</span>
                    </a>
                    <a href=" logos.png" class="text-decoration-none">

                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{url('/')}}" class="nav-item nav-link {{ Request::path() ==='/' ? 'active' : '' }}">Inicio</a>
                            <a href="{{ asset('shop') }}" class="nav-item nav-link {{ Request::path() ==='shop' ? 'active' : '' }}">Loja</a>
                            <!-- <a href="{{ asset('detail') }}" class="nav-item nav-link {{ Request::path() ==='detail' ? 'active' : '' }}">Detalhe</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Processo de Compra <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="{{ asset('cart') }}" class="dropdown-item {{ Request::path() ==='cart' ? 'active' : '' }}">Carrinho de Compras</a>
                                    <a href="{{ asset('checkout') }}" class="dropdown-item {{ Request::path() ==='checkout' ? 'active' : '' }}">Finalizar a Compra</a>
                                </div>
                            </div>
                            <a href="{{ asset('contact') }}" class="nav-item nav-link {{ Request::path() ==='contact' ? 'active' : '' }}">Contacto</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn cart-btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span id="cart-counter" class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>


                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <script>
        var cartCount = 0;
        // Obtenha o elemento do botão de carrinho de compras
const cartBtn = document.querySelector('.cart-btn');

// Obtenha o elemento do contador de itens do carrinho
const cartCounter = document.querySelector('#cart-counter');

// Defina um contador inicial
let itemCount = 0;

// Adicione um ouvinte de evento de clique ao botão de carrinho de compras
cartBtn.addEventListener('click', function(event) {
  // Impedir o comportamento padrão de clique do link
  event.preventDefault();

  // Incrementar o contador de itens
  itemCount++;

  // Atualizar o texto do contador
  cartCounter.textContent = itemCount;
});


function addToCart(event) {
    event.preventDefault();
    cartCount++;
    document.getElementById('cartCount').innerText = cartCount;
  }

    </script>

<link href="https://fonts.googleapis.com/css2?family=Qwigley&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Qwigley&display=swap" rel="stylesheet">

