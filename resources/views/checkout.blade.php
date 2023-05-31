<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('js/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="https://www.paypal.com/sdk/js?client-id=AR3ZjjlRgpnxW_czrcwi4nSAAomCUgtChfvWDGTW68hz5CbVOYxosUrsvYmnCSW64unks5pc08_KJwNC&currency=USD"></script>
</head>

<body>
    <!-- Topbar Start -->
    @include('menu')
    <!-- Topbar End -->





    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Inicio</a>
                    <a class="breadcrumb-item text-dark" href="#">Loja</a>
                    <span class="breadcrumb-item active">Finalizar</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Endereço de Cobrança</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Primeiro Nome</label>
                            <input class="form-control" type="text" id="first" placeholder="John">
                            <small class="text-danger first"></small>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Ultimo Nome</label>
                            <input class="form-control" type="text" id="last" placeholder="Doe">
                            <small class="text-danger last"></small>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" id="email" placeholder="example@email.com">
                            <small class="text-danger email"></small>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Numero</label>
                            <input class="form-control" type="text" id="number" placeholder="+123 456 789">
                            <small class="text-danger number"></small>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Endereço 1</label>
                            <input class="form-control" type="text" id="ad1" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Endereço 2</label>
                            <input class="form-control" type="text" id="ad2" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Pais</label>
                            <select class="custom-select" id="country">
                                <option selected>Moçambique</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Cidade</label>
                            <input class="form-control" type="text" id="city" placeholder="New York">
                            <small class="text-danger city"></small>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Provincia</label>
                            <input class="form-control" type="text" id="state" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Codigo Postal</label>
                            <input class="form-control" type="text" id="postal" placeholder="123">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Criar Conta</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto"  data-toggle="collapse" data-target="#shipping-address">enviar para outro endereço</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse mb-5" id="shipping-address">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Shipping Address</span></h5>
                    <div class="bg-light p-30">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Primeiro Nome</label>
                                <input class="form-control" type="text" placeholder="John">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" placeholder="Doe">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" placeholder="example@email.com">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" placeholder="+123 456 789">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1</label>
                                <input class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 2</label>
                                <input class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Country</label>
                                <select class="custom-select">
                                    <option selected>United States</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>City</label>
                                <input class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>State</label>
                                <input class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>ZIP Code</label>
                                <input class="form-control" type="text" placeholder="123">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Total de Pedidos</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Productos</h6>
                        <div class="d-flex justify-content-between">
                            <p>Camisa Preta</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Cinto</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Bolsa Vermelha</p>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Total</h6>
                            <h6>$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Envio</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$160</h5>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Pagamento</span></h5>
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>


                        <form action="{{ route('payment') }}" method="post">
                            @csrf
                            <input type="hidden" name="amount" value="200">
                            <!-- <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3"></button> -->
                            <div id="paypal-button-container"></div>
                        </form>
                    </div>
                    @push('scripts')
                    <script src="https://www.paypal.com/sdk/js?client-id=AR3ZjjlRgpnxW_czrcwi4nSAAomCUgtChfvWDGTW68hz5CbVOYxosUrsvYmnCSW64unks5pc08_KJwNC&currency=USD"></script>
                    @endpush
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->


    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('js/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('js/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('js/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- paypal button script -->
    <script src="https://www.paypal.com/sdk/js?client-id=AR3ZjjlRgpnxW_czrcwi4nSAAomCUgtChfvWDGTW68hz5CbVOYxosUrsvYmnCSW64unks5pc08_KJwNC&currency=USD"></script>
    <script>


      paypal.Buttons({
        onClick(){

            var first = $('#first').val();
            var last = $('#last').val();
            var email = $('#email').val();
            var number = $('#number').val();
            var city = $('#city').val();


            if(first.length == 0)
            {
                $('.first').text("*preencha o campo");
            }else {
                $('.first').text("");
            }
            if(last.length == 0){
                $('.last').text("*preencha o campo");
            }else {
                $('.last').text("");
            }
            if(email.length == 0){
                $('.email').text("*preencha o campo");
            }else {
                $('.email').text("");
            }
            if(number.length == 0){
                $('.number').text("*preencha o campo");
            }else {
                $('.number').text("");
            }
            if(city.length == 0){
                $('.city').text("*preencha o campo");
            }else {
                $('.city').text("");
            }
            if(first.length == 0 || last.length == 0 || email.length == 0 || number.length == 0 || city.length == 0)
            {
                return false;
            }
        }
        ,
    createOrder: function(data, actions) {
      // Lógica para criar o pedido do PayPal
      return actions.order.create({
        purchase_units: [
          {
            description: "Descrição do produto",
            amount: {
              currency_code: "USD",
              value: "10.00" // Valor do produto
            }
          }
        ]
      });
    },
    onApprove: function(data, actions) {
      // Lógica para capturar o pedido do PayPal após aprovação do comprador
      return actions.order.capture().then(function(details) {
        // Lógica de conclusão da transação
        console.log('Capture result', details);
        alert('Transação concluída com sucesso!');
      });
    }
  }).render('#paypal-button-container');
</script>


</body>

</html>
